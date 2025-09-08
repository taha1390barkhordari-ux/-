<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="rtl">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="شرکت سهامی خاص آرون تارا - تامین کننده تجهیزات مکانیک، الکتریک، الکترونیک و مواد شیمیایی">
    <meta name="keywords" content="آرون تارا، فلوکولانت، PAX، MIBC، تجهیزات مکانیک، مواد شیمیایی، کرمان">
    <meta name="author" content="شرکت سهامی خاص آرون تارا">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="شرکت سهامی خاص آرون تارا">
    <meta property="og:description" content="تامین کننده تجهیزات مکانیک، الکتریک، الکترونیک و مواد شیمیایی">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo home_url(); ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/logo.jpg">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="شرکت سهامی خاص آرون تارا">
    <meta name="twitter:description" content="تامین کننده تجهیزات مکانیک، الکتریک، الکترونیک و مواد شیمیایی">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">
    
    <!-- Preload Critical Resources -->
    <link rel="preload" href="https://cdn.fontcdn.ir/Font/Persian/IRANSansX/IRANSansX.css" as="style">
    
    <!-- Schema.org structured data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "شرکت سهامی خاص آرون تارا",
        "alternateName": "Aron Tara",
        "url": "<?php echo home_url(); ?>",
        "logo": "<?php echo get_template_directory_uri(); ?>/images/logo.jpg",
        "description": "تامین کننده تجهیزات مکانیک، الکتریک، الکترونیک و مواد شیمیایی",
        "foundingDate": "2021-05-10",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "خیابان امام جمعه کوچه شماره 18 پلاک 47",
            "addressLocality": "کرمان",
            "addressCountry": "IR",
            "postalCode": "7619635359"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+98-34-32476351",
            "contactType": "customer service",
            "areaServed": "IR",
            "availableLanguage": "Persian"
        },
        "sameAs": [
            "https://instagram.com/arontara",
            "https://linkedin.com/company/arontara"
        ]
    }
    </script>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Glass Header -->
<header class="glass-header" id="header">
    <div class="header-content">
        <div class="logo">
            <a href="<?php echo home_url(); ?>" style="color: inherit; text-decoration: none;">
                آرون تارا
            </a>
        </div>
        
        <nav class="main-nav">
            <?php 
            $menu_args = array(
                'theme_location' => 'primary',
                'menu_class' => 'nav-menu',
                'container' => false,
                'fallback_cb' => 'default_menu'
            );
            
            if (has_nav_menu('primary')) {
                wp_nav_menu($menu_args);
            } else {
                default_menu();
            }
            ?>
        </nav>
        
        <!-- Mobile Menu Toggle -->
        <div class="mobile-menu-toggle" id="mobileMenuToggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</header>

<?php
function default_menu() {
    echo '<ul class="nav-menu">';
    echo '<li><a href="#hero">خانه</a></li>';
    echo '<li><a href="#about">درباره ما</a></li>';
    echo '<li><a href="#services">خدمات</a></li>';
    echo '<li><a href="#products">محصولات</a></li>';
    echo '<li><a href="#contact">تماس</a></li>';
    echo '</ul>';
}
?>

<style>
/* Mobile Menu Styles */
.mobile-menu-toggle {
    display: none;
    flex-direction: column;
    cursor: pointer;
    padding: 0.5rem;
}

.mobile-menu-toggle span {
    width: 25px;
    height: 3px;
    background: white;
    margin: 3px 0;
    transition: 0.3s;
    border-radius: 2px;
}

.mobile-menu-toggle.active span:nth-child(1) {
    transform: rotate(-45deg) translate(-5px, 6px);
}

.mobile-menu-toggle.active span:nth-child(2) {
    opacity: 0;
}

.mobile-menu-toggle.active span:nth-child(3) {
    transform: rotate(45deg) translate(-5px, -6px);
}

@media (max-width: 768px) {
    .mobile-menu-toggle {
        display: flex;
    }
    
    .main-nav {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.95);
        backdrop-filter: blur(10px);
        transform: translateY(-20px);
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        border-radius: 0 0 20px 20px;
        border: 1px solid rgba(76, 175, 80, 0.3);
        border-top: none;
    }
    
    .main-nav.active {
        transform: translateY(0);
        opacity: 1;
        visibility: visible;
    }
    
    .nav-menu {
        flex-direction: column;
        padding: 1rem;
        gap: 0;
    }
    
    .nav-menu li {
        margin: 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .nav-menu li:last-child {
        border-bottom: none;
    }
    
    .nav-menu a {
        display: block;
        padding: 1rem;
        text-align: center;
        border-radius: 10px;
        margin: 0.25rem 0;
    }
    
    .header-content {
        position: relative;
    }
}

/* Sticky Header Effect */
.glass-header.scrolled {
    background: rgba(0, 0, 0, 0.9);
    backdrop-filter: blur(15px);
    border-bottom-color: rgba(76, 175, 80, 0.5);
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
}

/* Header Animation */
.glass-header {
    transform: translateY(0);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.glass-header.hide {
    transform: translateY(-100%);
}

/* Logo Animation */
.logo a {
    display: inline-block;
    transition: all 0.3s ease;
}

.logo a:hover {
    transform: scale(1.1);
    text-shadow: 0 0 30px rgba(76, 175, 80, 0.8);
}

/* Navigation Enhancement */
.nav-menu {
    position: relative;
}

.nav-menu::before {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, #4CAF50, transparent);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.nav-menu:hover::before {
    opacity: 1;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('header');
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const mainNav = document.querySelector('.main-nav');
    let lastScrollTop = 0;
    
    // Sticky header on scroll
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
        
        // Hide/show header on scroll
        if (scrollTop > lastScrollTop && scrollTop > 200) {
            header.classList.add('hide');
        } else {
            header.classList.remove('hide');
        }
        
        lastScrollTop = scrollTop;
    });
    
    // Mobile menu toggle
    if (mobileMenuToggle && mainNav) {
        mobileMenuToggle.addEventListener('click', function() {
            this.classList.toggle('active');
            mainNav.classList.toggle('active');
        });
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!header.contains(e.target)) {
                mobileMenuToggle.classList.remove('active');
                mainNav.classList.remove('active');
            }
        });
        
        // Close mobile menu when clicking on menu items
        const menuLinks = mainNav.querySelectorAll('a');
        menuLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileMenuToggle.classList.remove('active');
                mainNav.classList.remove('active');
            });
        });
    }
});
</script>