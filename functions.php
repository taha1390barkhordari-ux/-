<?php
/**
 * Aron Tara 3D Theme Functions
 * 
 * @package AronTara3D
 */

// Security check
if (!defined('ABSPATH')) {
    exit;
}

// Theme setup
function arontara_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('custom-logo');
    add_theme_support('customize-selective-refresh-widgets');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('منوی اصلی', 'arontara'),
        'footer' => __('منوی فوتر', 'arontara'),
    ));
    
    // Add image sizes
    add_image_size('product-thumb', 300, 200, true);
    add_image_size('slider-image', 1920, 1080, true);
    add_image_size('gallery-thumb', 400, 300, true);
}
add_action('after_setup_theme', 'arontara_theme_setup');

// Enqueue styles and scripts
function arontara_enqueue_assets() {
    // Theme stylesheet
    wp_enqueue_style('arontara-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Persian font
    wp_enqueue_style('iran-sans', 'https://cdn.fontcdn.ir/Font/Persian/IRANSansX/IRANSansX.css', array(), '1.0.0');
    
    // Theme JavaScript
    wp_enqueue_script('arontara-main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
    
    // Localize script for AJAX
    wp_localize_script('arontara-main', 'arontara_ajax', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('arontara_nonce'),
    ));
    
    // Add RTL support
    if (is_rtl()) {
        wp_enqueue_style('arontara-rtl', get_template_directory_uri() . '/rtl.css', array('arontara-style'), '1.0.0');
    }
}
add_action('wp_enqueue_scripts', 'arontara_enqueue_assets');

// Handle contact form submission
function handle_contact_form_submission() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['contact_nonce'], 'contact_form_nonce')) {
        wp_die('خطای امنیتی');
    }
    
    // Sanitize form data
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $message = sanitize_textarea_field($_POST['message']);
    
    // Validate required fields
    if (empty($name) || empty($email) || empty($message)) {
        wp_redirect(add_query_arg('contact_error', '1', home_url('/#contact')));
        exit;
    }
    
    // Prepare email
    $to = get_option('admin_email');
    $subject = 'پیام جدید از سایت آرون تارا - ' . $name;
    $body = "نام: $name\n";
    $body .= "ایمیل: $email\n";
    $body .= "تلفن: $phone\n";
    $body .= "پیام:\n$message\n\n";
    $body .= "ارسال شده از: " . home_url() . "\n";
    $body .= "تاریخ: " . current_time('mysql') . "\n";
    
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . get_bloginfo('name') . ' <noreply@' . $_SERVER['HTTP_HOST'] . '>',
        'Reply-To: ' . $name . ' <' . $email . '>',
    );
    
    // Send email
    $sent = wp_mail($to, $subject, $body, $headers);
    
    // Store message in database (optional)
    global $wpdb;
    $table_name = $wpdb->prefix . 'contact_messages';
    
    $wpdb->insert(
        $table_name,
        array(
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'message' => $message,
            'submitted_at' => current_time('mysql'),
            'ip_address' => $_SERVER['REMOTE_ADDR'],
        ),
        array('%s', '%s', '%s', '%s', '%s', '%s')
    );
    
    // Redirect with success message
    if ($sent) {
        wp_redirect(add_query_arg('contact_success', '1', home_url('/#contact')));
    } else {
        wp_redirect(add_query_arg('contact_error', '2', home_url('/#contact')));
    }
    exit;
}
add_action('admin_post_contact_form_submit', 'handle_contact_form_submission');
add_action('admin_post_nopriv_contact_form_submit', 'handle_contact_form_submission');

// Create contact messages table
function create_contact_messages_table() {
    global $wpdb;
    
    $table_name = $wpdb->prefix . 'contact_messages';
    
    $charset_collate = $wpdb->get_charset_collate();
    
    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name varchar(100) NOT NULL,
        email varchar(100) NOT NULL,
        phone varchar(20),
        message text NOT NULL,
        submitted_at datetime DEFAULT CURRENT_TIMESTAMP,
        ip_address varchar(45),
        status varchar(20) DEFAULT 'unread',
        PRIMARY KEY (id)
    ) $charset_collate;";
    
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
add_action('after_switch_theme', 'create_contact_messages_table');

// Add admin menu for contact messages
function arontara_admin_menu() {
    add_menu_page(
        'پیام‌های تماس',
        'پیام‌های تماس',
        'manage_options',
        'contact-messages',
        'display_contact_messages',
        'dashicons-email-alt',
        25
    );
}
add_action('admin_menu', 'arontara_admin_menu');

// Display contact messages in admin
function display_contact_messages() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'contact_messages';
    
    // Handle status updates
    if (isset($_POST['update_status']) && isset($_POST['message_id'])) {
        $message_id = intval($_POST['message_id']);
        $status = sanitize_text_field($_POST['status']);
        
        $wpdb->update(
            $table_name,
            array('status' => $status),
            array('id' => $message_id),
            array('%s'),
            array('%d')
        );
        
        echo '<div class="notice notice-success"><p>وضعیت پیام به‌روزرسانی شد.</p></div>';
    }
    
    $messages = $wpdb->get_results("SELECT * FROM $table_name ORDER BY submitted_at DESC");
    
    ?>
    <div class="wrap">
        <h1>پیام‌های تماس</h1>
        
        <table class="wp-list-table widefat fixed striped">
            <thead>
                <tr>
                    <th>نام</th>
                    <th>ایمیل</th>
                    <th>تلفن</th>
                    <th>پیام</th>
                    <th>تاریخ</th>
                    <th>وضعیت</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($messages): ?>
                    <?php foreach ($messages as $message): ?>
                        <tr>
                            <td><?php echo esc_html($message->name); ?></td>
                            <td>
                                <a href="mailto:<?php echo esc_attr($message->email); ?>">
                                    <?php echo esc_html($message->email); ?>
                                </a>
                            </td>
                            <td>
                                <?php if ($message->phone): ?>
                                    <a href="tel:<?php echo esc_attr($message->phone); ?>">
                                        <?php echo esc_html($message->phone); ?>
                                    </a>
                                <?php endif; ?>
                            </td>
                            <td>
                                <div style="max-width: 300px; max-height: 100px; overflow-y: auto;">
                                    <?php echo esc_html(wp_trim_words($message->message, 20)); ?>
                                </div>
                            </td>
                            <td><?php echo esc_html($message->submitted_at); ?></td>
                            <td>
                                <span class="status-<?php echo esc_attr($message->status); ?>">
                                    <?php 
                                    switch($message->status) {
                                        case 'unread': echo 'خوانده نشده'; break;
                                        case 'read': echo 'خوانده شده'; break;
                                        case 'replied': echo 'پاسخ داده شده'; break;
                                        default: echo $message->status; break;
                                    }
                                    ?>
                                </span>
                            </td>
                            <td>
                                <form method="post" style="display: inline;">
                                    <input type="hidden" name="message_id" value="<?php echo esc_attr($message->id); ?>">
                                    <select name="status" onchange="this.form.submit()">
                                        <option value="unread" <?php selected($message->status, 'unread'); ?>>خوانده نشده</option>
                                        <option value="read" <?php selected($message->status, 'read'); ?>>خوانده شده</option>
                                        <option value="replied" <?php selected($message->status, 'replied'); ?>>پاسخ داده شده</option>
                                    </select>
                                    <input type="hidden" name="update_status" value="1">
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7" style="text-align: center;">پیامی یافت نشد.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    
    <style>
    .status-unread { color: #d63638; font-weight: bold; }
    .status-read { color: #00a32a; }
    .status-replied { color: #0073aa; font-weight: bold; }
    </style>
    <?php
}

// Add custom dashboard widget
function arontara_dashboard_widget() {
    wp_add_dashboard_widget(
        'arontara_contact_stats',
        'آمار پیام‌های تماس',
        'arontara_dashboard_widget_content'
    );
}
add_action('wp_dashboard_setup', 'arontara_dashboard_widget');

function arontara_dashboard_widget_content() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'contact_messages';
    
    $total = $wpdb->get_var("SELECT COUNT(*) FROM $table_name");
    $unread = $wpdb->get_var("SELECT COUNT(*) FROM $table_name WHERE status = 'unread'");
    $today = $wpdb->get_var("SELECT COUNT(*) FROM $table_name WHERE DATE(submitted_at) = CURDATE()");
    $this_week = $wpdb->get_var("SELECT COUNT(*) FROM $table_name WHERE submitted_at >= DATE_SUB(NOW(), INTERVAL 7 DAY)");
    
    echo '<div style="display: flex; justify-content: space-between; text-align: center;">';
    echo '<div><strong>' . $total . '</strong><br>کل پیام‌ها</div>';
    echo '<div><strong style="color: #d63638;">' . $unread . '</strong><br>خوانده نشده</div>';
    echo '<div><strong>' . $today . '</strong><br>امروز</div>';
    echo '<div><strong>' . $this_week . '</strong><br>این هفته</div>';
    echo '</div>';
    
    if ($unread > 0) {
        echo '<p style="margin-top: 15px;"><a href="' . admin_url('admin.php?page=contact-messages') . '" class="button button-primary">مشاهده پیام‌های جدید</a></p>';
    }
}

// Add theme customizer options
function arontara_customize_register($wp_customize) {
    // Add company info section
    $wp_customize->add_section('company_info', array(
        'title' => 'اطلاعات شرکت',
        'priority' => 30,
    ));
    
    // Company name
    $wp_customize->add_setting('company_name', array(
        'default' => 'شرکت سهامی خاص آرون تارا',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('company_name', array(
        'label' => 'نام شرکت',
        'section' => 'company_info',
        'type' => 'text',
    ));
    
    // Phone number
    $wp_customize->add_setting('company_phone', array(
        'default' => '034-32476351-2',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('company_phone', array(
        'label' => 'تلفن شرکت',
        'section' => 'company_info',
        'type' => 'text',
    ));
    
    // Address
    $wp_customize->add_setting('company_address', array(
        'default' => 'کرمان، خیابان امام جمعه، کوچه شماره 18، پلاک 47',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('company_address', array(
        'label' => 'آدرس شرکت',
        'section' => 'company_info',
        'type' => 'textarea',
    ));
}
add_action('customize_register', 'arontara_customize_register');

// Add SEO meta tags
function arontara_add_meta_tags() {
    if (is_front_page()) {
        echo '<meta name="description" content="شرکت سهامی خاص آرون تارا - تامین کننده تجهیزات مکانیک، الکتریک، الکترونیک و مواد شیمیایی در کرمان">' . "\n";
        echo '<meta name="keywords" content="آرون تارا، فلوکولانت، PAX، MIBC، تجهیزات مکانیک، مواد شیمیایی، کرمان، تامین تجهیزات صنعتی">' . "\n";
    }
}
add_action('wp_head', 'arontara_add_meta_tags');

// Security enhancements
function arontara_security_headers() {
    // Remove X-Frame-Options to allow embedding in preview
    header_remove('X-Frame-Options');
    
    // Add other security headers
    header('X-Content-Type-Options: nosniff');
    header('X-XSS-Protection: 1; mode=block');
    header('Referrer-Policy: strict-origin-when-cross-origin');
}
add_action('send_headers', 'arontara_security_headers');

// Performance optimizations
function arontara_performance_optimizations() {
    // Remove unnecessary scripts and styles
    if (!is_admin()) {
        wp_deregister_script('jquery-migrate');
        wp_dequeue_style('wp-block-library');
        wp_dequeue_style('wp-block-library-theme');
    }
}
add_action('wp_enqueue_scripts', 'arontara_performance_optimizations', 100);

// Add structured data for local business
function arontara_structured_data() {
    if (is_front_page()) {
        $structured_data = array(
            '@context' => 'https://schema.org',
            '@type' => 'LocalBusiness',
            'name' => 'شرکت سهامی خاص آرون تارا',
            'description' => 'تامین کننده تجهیزات مکانیک، الکتریک، الکترونیک و مواد شیمیایی',
            'url' => home_url(),
            'telephone' => '+98-34-32476351',
            'address' => array(
                '@type' => 'PostalAddress',
                'streetAddress' => 'خیابان امام جمعه کوچه شماره 18 پلاک 47',
                'addressLocality' => 'کرمان',
                'postalCode' => '7619635359',
                'addressCountry' => 'IR'
            ),
            'openingHours' => array(
                'Mo-We 08:00-17:00',
                'Th 08:00-13:00'
            ),
            'sameAs' => array(
                'https://instagram.com/arontara',
                'https://linkedin.com/company/arontara'
            )
        );
        
        echo '<script type="application/ld+json">' . json_encode($structured_data, JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
    }
}
add_action('wp_head', 'arontara_structured_data');

// Disable WordPress emojis for performance
function arontara_disable_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}
add_action('init', 'arontara_disable_emojis');

// Floating Contact Buttons
function add_floating_contacts() {
    ?>
    <div class="floating-contact">
        <a href="tel:09106168590" class="contact-btn phone" title="تماس مستقیم">
            📞
        </a>
        <a href="https://wa.me/989106168590" target="_blank" class="contact-btn whatsapp" title="واتساپ">
            💬
        </a>
    </div>
    <button class="back-to-top" id="backToTop" title="بازگشت به بالا">
        ↑
    </button>
    <script>
        // Back to top functionality
        window.addEventListener('scroll', function() {
            const backToTop = document.getElementById('backToTop');
            if (window.pageYOffset > 300) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
        });
        
        document.getElementById('backToTop').addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
    <?php
}
add_action('wp_footer', 'add_floating_contacts');

// Add Persian date support
function arontara_persian_date($format = 'Y/m/d', $timestamp = null) {
    if (!$timestamp) {
        $timestamp = time();
    }
    
    $persian_months = array(
        'فروردین', 'اردیبهشت', 'خرداد', 'تیر', 'مرداد', 'شهریور',
        'مهر', 'آبان', 'آذر', 'دی', 'بهمن', 'اسفند'
    );
    
    // Simple Persian date conversion (basic implementation)
    $year = jdate('Y', $timestamp);
    $month = jdate('n', $timestamp) - 1;
    $day = jdate('j', $timestamp);
    
    return $day . ' ' . $persian_months[$month] . ' ' . $year;
}

// Function to get jdate (requires Persian date library or simple conversion)
function jdate($format, $timestamp = null) {
    if (!$timestamp) {
        $timestamp = time();
    }
    
    // This is a simplified version. For full Persian date support,
    // you would need a complete Persian calendar library
    $date = date($format, $timestamp);
    return $date;
}

// Add theme version to admin footer
function arontara_admin_footer_version() {
    return 'قالب آرون تارا نسخه 1.0.0';
}
add_filter('admin_footer_text', 'arontara_admin_footer_version');

// Log contact form submissions for debugging
function arontara_log_contact_submission($name, $email, $message) {
    if (WP_DEBUG && WP_DEBUG_LOG) {
        error_log("Contact form submission - Name: $name, Email: $email, Message length: " . strlen($message));
    }
}

// Add custom rewrite rules for product pages
add_action('init', 'arontara_add_product_rewrite_rules');

function arontara_add_product_rewrite_rules() {
    add_rewrite_rule(
        '^product/([^/]+)/([^/]+)/?',
        'index.php?product_category=$matches[1]&product_id=$matches[2]',
        'top'
    );
}

// Add query vars for product pages
add_filter('query_vars', 'arontara_add_product_query_vars');

function arontara_add_product_query_vars($vars) {
    $vars[] = 'product_category';
    $vars[] = 'product_id';
    return $vars;
}

// Template redirect for product pages
function arontara_template_redirect() {
    $category = get_query_var('product_category');
    $product_id = get_query_var('product_id');
    
    if ($category && $product_id) {
        // Set query vars for the template
        set_query_var('category', $category);
        set_query_var('product_id', $product_id);
        
        // Load the single product template
        include(get_template_directory() . '/single-product.php');
        exit;
    }
}
add_action('template_redirect', 'arontara_template_redirect');

// Flush rewrite rules on theme activation
add_action('after_switch_theme', 'arontara_flush_product_rewrite_rules');

function arontara_flush_product_rewrite_rules() {
    arontara_add_product_rewrite_rules();
    flush_rewrite_rules();
}

?>