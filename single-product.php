<?php
/**
 * Single Product Page Template for Aron Tara
 * 
 * @package AronTara3D
 */

get_header();

// Get product category and name from URL
$request_uri = $_SERVER['REQUEST_URI'];
$url_parts = explode('/', trim($request_uri, '/'));
$product_category = isset($url_parts[1]) ? $url_parts[1] : '';
$product_name = isset($url_parts[2]) ? $url_parts[2] : '';

// Define comprehensive product data for all 33+ products
$products_data = [
    'mechanical' => [
        'bearing' => [
            'name' => 'بیرینگ‌های غلتکی و گلویی',
            'category' => 'تجهیزات مکانیکی',
            'image' => 'https://images.unsplash.com/photo-1581092918484-8313cb9fe2c3?w=800',
            'gallery' => [
                'https://images.unsplash.com/photo-1581092918484-8313cb9fe2c3?w=600',
                'https://images.unsplash.com/photo-1582560869861-766136ce5c1c?w=600',
                'https://images.unsplash.com/photo-1565106430482-8f6e74349ca1?w=600',
            ],
            'description' => 'انواع بیرینگ‌های صنعتی با کیفیت بالا برای ماشین‌آلات سنگین',
            'features' => [
                'مقاومت بالا در برابر فشار و حرارت',
                'عمر مفید طولانی',
                'مناسب برای شرایط کاری سخت',
                'دارای گریس مخصوص',
                'استاندارد بین‌المللی'
            ],
            'specifications' => [
                'جنس' => 'فولاد کربنی و کرومی',
                'مقاومت حرارتی' => 'تا 200 درجه سانتیگراد',
                'سرعت دوران' => 'تا 3000 دور در دقیقه',
                'گارانتی' => '2 سال',
                'منشأ' => 'آلمان، ژاپن، چین'
            ],
            'applications' => [
                'صنایع معدنی و فولادسازی',
                'ماشین‌آلات سنگین',
                'پمپ‌ها و کمپرسورها',
                'موتورهای الکتریکی',
                'تجهیزات نورد'
            ]
        ],
        'hydraulic-pump' => [
            'name' => 'پمپ‌های هیدرولیک صنعتی',
            'category' => 'تجهیزات مکانیکی',
            'image' => 'https://images.unsplash.com/photo-1581092795360-fd1ca04f0952?w=800',
            'gallery' => [
                'https://images.unsplash.com/photo-1581092795360-fd1ca04f0952?w=600',
                'https://images.unsplash.com/photo-1565106430482-8f6e74349ca1?w=600',
                'https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=600'
            ],
            'description' => 'پمپ‌های هیدرولیک با فشار بالا برای کاربردهای صنعتی',
            'features' => [
                'فشار کاری تا 350 بار',
                'راندمان بالا',
                'عملکرد بی‌صدا',
                'مقاوم در برابر خوردگی',
                'قابلیت تنظیم فشار'
            ],
            'specifications' => [
                'نوع' => 'پیستونی، دنده‌ای، پره‌ای',
                'فشار کاری' => '50-350 بار',
                'دبی' => '10-500 لیتر در دقیقه',
                'توان' => '3-200 کیلووات',
                'سیال کاری' => 'روغن هیدرولیک ISO VG32-68'
            ],
            'applications' => [
                'پرس‌های هیدرولیک',
                'جرثقیل‌های صنعتی',
                'ماشین‌آلات راهسازی',
                'تجهیزات معدنی',
                'سیستم‌های مکانیزه'
            ]
        ],
        'hydraulic-motor' => [
            'name' => 'موتورهای هیدرولیک',
            'category' => 'تجهیزات مکانیکی', 
            'image' => 'https://images.unsplash.com/photo-1588702547919-26089e690ecc?w=800',
            'gallery' => [
                'https://images.unsplash.com/photo-1588702547919-26089e690ecc?w=600',
                'https://images.unsplash.com/photo-1581092918484-8313cb9fe2c3?w=600',
                'https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=600'
            ],
            'description' => 'موتورهای هیدرولیک با گشتاور بالا برای کاربردهای سنگین',
            'features' => [
                'گشتاور بالا در سرعت کم',
                'کنترل دقیق سرعت',
                'عملکرد مطمئن',
                'طراحی فشرده',
                'نگهداری آسان'
            ],
            'specifications' => [
                'نوع' => 'رادیال پیستونی، اکسیال پیستونی',
                'گشتاور' => '100-50000 نیوتن متر',
                'سرعت' => '10-3000 دور در دقیقه', 
                'فشار ورودی' => 'تا 420 بار',
                'بازده' => 'تا 95٪'
            ],
            'applications' => [
                'سیستم‌های چرخش جرثقیل',
                'محرک چرخ‌های حفاری',
                'کنویر سنگین',
                'تجهیزات کشاورزی',
                'ماشین‌آلات معدنی'
            ]
        ]
    ],
    'electrical' => [
        'electric-motor' => [
            'name' => 'الکتروموتورهای سه‌فاز',
            'category' => 'تجهیزات برقی',
            'image' => 'https://images.unsplash.com/photo-1621905252507-b35492cc74b4?w=800',
            'gallery' => [
                'https://images.unsplash.com/photo-1621905252507-b35492cc74b4?w=600',
                'https://images.unsplash.com/photo-1556075798-4825dfaaf498?w=600',
                'https://images.unsplash.com/photo-1518709268805-4e9042af2176?w=600'
            ],
            'description' => 'موتورهای الکتریکی سه‌فاز با کیفیت بالا برای صنایع مختلف',
            'features' => [
                'راندمان بالای انرژی',
                'ساخت مقاوم و بادوام',
                'استارت آسان',
                'کم‌صدا',
                'قابلیت کار در شرایط سخت'
            ],
            'specifications' => [
                'توان' => '0.25 - 500 کیلووات',
                'ولتاژ' => '380/660 ولت',
                'فرکانس' => '50/60 هرتز',
                'سرعت' => '750-3000 دور در دقیقه',
                'کلاس حفاظت' => 'IP55, IP56'
            ],
            'applications' => [
                'پمپ‌های آب و فاضلاب',
                'کمپرسورها',
                'فن‌های صنعتی',
                'کنویرها',
                'ماشین‌آلات تولیدی'
            ]
        ],
        'contactor' => [
            'name' => 'کنتاکتورهای صنعتی',
            'category' => 'تجهیزات برقی',
            'image' => 'https://images.unsplash.com/photo-1556075798-4825dfaaf498?w=800',
            'gallery' => [
                'https://images.unsplash.com/photo-1556075798-4825dfaaf498?w=600',
                'https://images.unsplash.com/photo-1621905252507-b35492cc74b4?w=600',
                'https://images.unsplash.com/photo-1518709268805-4e9042af2176?w=600'
            ],
            'description' => 'کنتاکتورهای برقی برای کنترل موتورهای صنعتی',
            'features' => [
                'قابلیت قطع و وصل بار بالا',
                'عمر تماس طولانی',
                'مقاوم در برابر قوس الکتریکی',
                'نصب آسان',
                'استاندارد IEC'
            ],
            'specifications' => [
                'جریان نامی' => '9A - 800A',
                'ولتاژ کنترل' => '24V, 110V, 220V, 380V',
                'توان تماس' => 'تا 500 کیلووات',
                'تعداد قطب' => '3P, 4P',
                'عمر مکانیکی' => '10 میلیون عمل'
            ],
            'applications' => [
                'راه‌اندازی موتورها',
                'کنترل روشنایی',
                'تابلوهای برق',
                'سیستم‌های اتوماسیون',
                'تجهیزات HVAC'
            ]
        ]
    ],
    'instruments' => [
        'thermometer' => [
            'name' => 'حرارت‌سنج‌های صنعتی',
            'category' => 'ابزار دقیق',
            'image' => 'https://images.unsplash.com/photo-1584464491033-06628f3a6b7b?w=800',
            'gallery' => [
                'https://images.unsplash.com/photo-1584464491033-06628f3a6b7b?w=600',
                'https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?w=600',
                'https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=600'
            ],
            'description' => 'حرارت‌سنج‌های دیجیتال و آنالوگ برای کاربردهای صنعتی',
            'features' => [
                'دقت اندازه‌گیری بالا',
                'مقاوم در برابر ضربه',
                'قابلیت کالیبراسیون',
                'نمایشگر دیجیتال',
                'خروجی آنالوگ و دیجیتال'
            ],
            'specifications' => [
                'محدوده اندازه‌گیری' => '-50 تا +1200 درجه سانتیگراد',
                'دقت' => '±0.1 درجه سانتیگراد',
                'نوع سنسور' => 'PT100, Thermocouple',
                'خروجی' => '4-20mA, 0-10V',
                'نمایشگر' => 'LCD دیجیتال'
            ],
            'applications' => [
                'کنترل فرآیند صنعتی',
                'کوره‌ها و بخارزان‌ها',
                'تانک‌های ذخیره',
                'خطوط تولید غذا',
                'سیستم‌های تهویه'
            ]
        ]
    ],
    'laboratory' => [
        'spectrophotometer' => [
            'name' => 'اسپکتروفتومتر UV-Vis',
            'category' => 'تجهیزات آزمایشگاهی',
            'image' => 'https://images.unsplash.com/photo-1582719471384-894fbb16e074?w=800',
            'gallery' => [
                'https://images.unsplash.com/photo-1582719471384-894fbb16e074?w=600',
                'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=600',
                'https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=600'
            ],
            'description' => 'دستگاه طیف‌سنجی UV-Vis برای تحلیل‌های شیمیایی دقیق',
            'features' => [
                'طیف پیوسته UV-Vis',
                'نرم‌افزار تحلیل پیشرفته',
                'خود کالیبراسیون',
                'نمونه‌گیری خودکار',
                'دقت طیف‌سنجی بالا'
            ],
            'specifications' => [
                'محدوده طول موج' => '190-1100 نانومتر',
                'وضوح طیفی' => '0.5 نانومتر',
                'دقت فتومتری' => '±0.002 A',
                'تکرارپذیری' => '±0.001 A',
                'سرعت اسکن' => '12000 nm/min'
            ],
            'applications' => [
                'تحلیل کیفی و کمی نمونه‌ها',
                'آزمایشگاه‌های شیمی',
                'کنترل کیفیت صنعتی',
                'تحقیقات دانشگاهی',
                'صنایع دارویی'
            ]
        ]
    ],
    'chemicals' => [
        'anionic-flocculant' => [
            'name' => 'فلوکولانت آنیونی',
            'category' => 'مواد شیمیایی',
            'image' => 'https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=800',
            'gallery' => [
                'https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=600',
                'https://images.unsplash.com/photo-1582719471384-894fbb16e074?w=600',
                'https://images.unsplash.com/photo-1581591524425-c7e0978865fc?w=600'
            ],
            'description' => 'پلی‌الکترولیت آنیونی برای تصفیه آب و فاضلاب صنعتی',
            'features' => [
                'وزن مولکولی بالا',
                'درجه آنیونی قابل تنظیم',
                'حلالیت سریع',
                'کارایی بالا در pH مختلف',
                'عدم سمیت'
            ],
            'specifications' => [
                'شکل فیزیکی' => 'پودر سفید کریستالی',
                'وزن مولکولی' => '5-20 میلیون دالتون',
                'درجه آنیونی' => '10-40٪',
                'pH کاربرد' => '6.5-8.5',
                'حلالیت' => 'کامل در آب'
            ],
            'applications' => [
                'تصفیه آب شهری',
                'تصفیه فاضلاب صنعتی',
                'صنایع کاغذسازی',
                'استخراج مواد معدنی',
                'تصفیه آب استخر'
            ]
        ]
    ]
];

// Get current product data
$current_product = null;
if (isset($products_data[$product_category][$product_name])) {
    $current_product = $products_data[$product_category][$product_name];
} else {
    // Redirect to 404 if product not found
    global $wp_query;
    $wp_query->set_404();
    status_header(404);
    get_template_part(404);
    exit;
}
?>

<!-- Single Product Page -->
<section class="product-hero" style="background: var(--gradient-hero); padding: 120px 0 60px;">
    <div class="container">
        <nav class="breadcrumb fade-in">
            <a href="<?php echo home_url(); ?>">خانه</a>
            <span>/</span>
            <a href="<?php echo home_url('/#products'); ?>">محصولات</a>
            <span>/</span>
            <span><?php echo esc_html($current_product['category']); ?></span>
            <span>/</span>
            <strong><?php echo esc_html($current_product['name']); ?></strong>
        </nav>
        
        <div class="product-header fade-in">
            <h1 class="product-title"><?php echo esc_html($current_product['name']); ?></h1>
            <p class="product-category"><?php echo esc_html($current_product['category']); ?></p>
        </div>
    </div>
</section>

<section class="product-details">
    <div class="container">
        <div class="product-content">
            <!-- Product Gallery -->
            <div class="product-gallery fade-in">
                <div class="main-image">
                    <img id="mainImage" src="<?php echo esc_url($current_product['image']); ?>" alt="<?php echo esc_attr($current_product['name']); ?>">
                    <div class="image-overlay"></div>
                </div>
                
                <div class="gallery-thumbs">
                    <?php foreach ($current_product['gallery'] as $index => $image): ?>
                        <img src="<?php echo esc_url($image); ?>" 
                             alt="<?php echo esc_attr($current_product['name']); ?> - تصویر <?php echo $index + 1; ?>"
                             onclick="changeMainImage(this.src)"
                             class="thumb-image <?php echo $index === 0 ? 'active' : ''; ?>">
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Product Info -->
            <div class="product-info fade-in">
                <div class="product-description">
                    <h2>توضیحات محصول</h2>
                    <p><?php echo esc_html($current_product['description']); ?></p>
                </div>

                <div class="product-features">
                    <h3>ویژگی‌ها</h3>
                    <ul>
                        <?php foreach ($current_product['features'] as $feature): ?>
                            <li><?php echo esc_html($feature); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="contact-section">
                    <h3>درخواست قیمت و اطلاعات بیشتر</h3>
                    <div class="contact-buttons">
                        <a href="tel:09106168590" class="contact-btn phone-btn">
                            <span class="icon">📞</span>
                            تماس مستقیم: 09106168590
                        </a>
                        <a href="https://wa.me/989106168590" class="contact-btn whatsapp-btn" target="_blank">
                            <span class="icon">💬</span>
                            واتساپ
                        </a>
                        <a href="<?php echo home_url('/#contact'); ?>" class="contact-btn form-btn">
                            <span class="icon">✉️</span>
                            فرم تماس
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Technical Specifications -->
        <div class="product-specs fade-in">
            <h2>مشخصات فنی</h2>
            <div class="specs-grid">
                <?php foreach ($current_product['specifications'] as $spec => $value): ?>
                    <div class="spec-item">
                        <strong><?php echo esc_html($spec); ?>:</strong>
                        <span><?php echo esc_html($value); ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Applications -->
        <div class="product-applications fade-in">
            <h2>کاربردها</h2>
            <div class="applications-grid">
                <?php foreach ($current_product['applications'] as $application): ?>
                    <div class="application-item">
                        <span class="checkmark">✓</span>
                        <?php echo esc_html($application); ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Related Products -->
        <div class="related-products fade-in">
            <h2>محصولات مرتبط</h2>
            <div class="related-grid">
                <?php
                $related_count = 0;
                foreach ($products_data[$product_category] as $key => $product):
                    if ($key !== $product_name && $related_count < 3):
                        $related_count++;
                ?>
                    <div class="related-product-card">
                        <div class="related-image" style="background-image: url('<?php echo esc_url($product['image']); ?>')"></div>
                        <div class="related-info">
                            <h4><?php echo esc_html($product['name']); ?></h4>
                            <p><?php echo esc_html(wp_trim_words($product['description'], 15)); ?></p>
                            <a href="<?php echo home_url('/product/' . $product_category . '/' . $key . '/'); ?>" class="related-btn">
                                مشاهده جزئیات
                            </a>
                        </div>
                    </div>
                <?php
                    endif;
                endforeach;
                ?>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize scroll animations
    initScrollAnimations();
});

function changeMainImage(src) {
    document.getElementById('mainImage').src = src;
    
    // Update active thumb
    document.querySelectorAll('.thumb-image').forEach(thumb => {
        thumb.classList.remove('active');
    });
    event.target.classList.add('active');
}

function initScrollAnimations() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    });
    
    document.querySelectorAll('.fade-in').forEach(el => {
        observer.observe(el);
    });
}
</script>

<?php get_footer(); ?>