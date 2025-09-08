<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>آرون تارا - تجهیزات مهندسی و صنعتی</title>
    <meta name="description" content="آرون تارا ارائه دهنده تجهیزات مهندسی و صنعتی با کیفیت">
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
</head>
<body>
    <!-- Loading Animation -->
    <div class="loading" id="loading">
        <div class="loader"></div>
    </div>

    <!-- Header -->
    <header class="glass-header">
        <div class="container">
            <div class="header-content">
                <div class="logo">آرون تارا</div>
                <nav>
                    <ul class="nav-menu">
                        <li><a href="#hero" class="active">خانه</a></li>
                        <li><a href="#about">درباره ما</a></li>
                        <li><a href="#services">خدمات</a></li>
                        <li><a href="#products">محصولات</a></li>
                        <li><a href="#contact">تماس با ما</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Slider Section -->
    <section class="hero-slider" id="hero">
        <div class="slide active">
            <div class="slide-content">
                <h1>شرکت سهامی خاص آرون تارا</h1>
                <p>تامین کننده تجهیزات مکانیک، الکتریک، الکترونیک و مواد شیمیایی</p>
                <a href="#services" class="cta-button">خدمات ما</a>
            </div>
        </div>
        
        <div class="slide">
            <div class="slide-content">
                <h1>تخصص در مواد شیمیایی</h1>
                <p>پیشرو در تامین فلوکولانت، PAX و MIBC</p>
                <a href="#products" class="cta-button">محصولات</a>
            </div>
        </div>
        
        <div class="slide">
            <div class="slide-content">
                <h1>همکاری با بزرگترین شرکت‌ها</h1>
                <p>افتخار همکاری با فولاد زرند ایرانیان، مس سرچشمه و بسیاری دیگر</p>
                <a href="#about" class="cta-button">درباره ما</a>
            </div>
        </div>
        
        <!-- Slider Navigation -->
        <div class="slider-nav">
            <span class="slider-dot active" data-slide="0"></span>
            <span class="slider-dot" data-slide="1"></span>
            <span class="slider-dot" data-slide="2"></span>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section fade-in" id="about">
        <div class="container">
            <h2 class="section-title">درباره شرکت آرون تارا</h2>
            <div class="about-content">
                <div class="about-text">
                    <h3>شرکت سهامی خاص آرون تارا</h3>
                    <p><strong>شماره ثبت:</strong> 17575</p>
                    <p><strong>شناسه ملی:</strong> 14010013177</p>
                    <p><strong>تاریخ تأسیس:</strong> 20/02/1400</p>
                    <p><strong>مدیرعامل:</strong> خانم سمیه منعمی</p>
                    <br>
                    <p>شرکت آرون تارا از سال 1400 در زمینه کلیه امور بازرگانی و واردات فعالیت می‌کند. حوزه تخصصی ما تامین قطعات مکانیک، الکتریک، الکترونیک، ابزار دقیق و مواد شیمیایی و تجهیزات آزمایشگاهی است.</p>
                </div>
                <div class="company-info">
                    <h3>حوزه تخصصی فعالیت</h3>
                    <ul>
                        <li>پلی آکریل آمید یا پلی الکترولیت (فلوکولانت آنیونی یا کاتیونی)</li>
                        <li>پتانسیم امیل اگزانتات (PAX)</li>
                        <li>متیل ایزوبوتیل کربونیل (MIBC)</li>
                        <li>تجهیزات مکانیکی و الکتریکی</li>
                        <li>ابزار دقیق و تجهیزات آزمایشگاهی</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section class="services-section fade-in">
        <div class="container">
            <h2 class="section-title">شرکای تجاری ما</h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-industry"></i></div>
                    <h3>شرکت فولاد زرند ایرانیان</h3>
                    <p>همکاری مستمر در تامین مواد شیمیایی</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-hammer"></i></div>
                    <h3>شرکت فولاد سیرجان ایرانیان</h3>
                    <p>تامین تجهیزات مکانیکی و الکتریکی</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-gem"></i></div>
                    <h3>شرکت ملی صنایع مس ایران</h3>
                    <p>تخصص در تامین مواد شیمیایی معدنی</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-mountain"></i></div>
                    <h3>شرکت سنگ آهن مرکزی ایران</h3>
                    <p>تامین ابزار دقیق و تجهیزات</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-bolt"></i></div>
                    <h3>شرکت برق منطقه‌ای کرمان</h3>
                    <p>تجهیزات برقی و الکترونیکی</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-building"></i></div>
                    <h3>شرکت سیمان ممتازان</h3>
                    <p>مواد شیمیایی صنعتی</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section fade-in" id="services">
        <div class="container">
            <h2 class="section-title">خدمات ما</h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-cog"></i></div>
                    <h3>تجهیزات مکانیکی</h3>
                    <p>بیرینگ‌ها، پمپ‌های هیدرولیک، جک‌های هیدرولیکی، مبدل‌های حرارتی و کوپلینگ‌ها</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-plug"></i></div>
                    <h3>تجهیزات برقی</h3>
                    <p>الکترو موتورها، کنتاکتورها، کارت‌های الکترونیکی، ویبرومتر و سنسورها</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-tachometer-alt"></i></div>
                    <h3>ابزار دقیق</h3>
                    <p>حرارت‌سنج‌ها، فشارسنج‌ها، سطح‌سنج‌ها، شیرهای کنترلی و ترانسمیترها</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-flask"></i></div>
                    <h3>تجهیزات آزمایشگاهی</h3>
                    <p>اسپکتروفتومتر، کدورت‌سنج، BOD متر، راکتور COD، pH متر و EC متر</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-vial"></i></div>
                    <h3>مواد شیمیایی</h3>
                    <p>فلوکولانت، PAX، دایلوئنت، MIBC، تیتانیوم دی‌اکسید و رنگ‌های صنعتی</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-tools"></i></div>
                    <h3>خدمات پس از فروش</h3>
                    <p>نصب، راه‌اندازی، تعمیرات و نگهداری تجهیزات</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="products-section fade-in" id="products">
        <div class="container">
            <h2 class="section-title">محصولات ما</h2>
            <div class="products-tabs">
                <button class="tab-button active" data-category="mechanical">تجهیزات مکانیکی</button>
                <button class="tab-button" data-category="electrical">تجهیزات برقی</button>
                <button class="tab-button" data-category="instruments">ابزار دقیق</button>
                <button class="tab-button" data-category="laboratory">تجهیزات آزمایشگاهی</button>
                <button class="tab-button" data-category="chemicals">مواد شیمیایی</button>
            </div>
            
            <div id="products-container" class="products-grid">
                <!-- Products will be loaded here by JavaScript -->
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section fade-in" id="contact">
        <div class="container">
            <h2 class="section-title">تماس با ما</h2>
            <div class="contact-content">
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">نام و نام خانوادگی</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">ایمیل</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">تلفن تماس</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                        
                        <div class="form-group">
                            <label for="message">پیام</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        
                        <button type="submit" class="cta-button">ارسال پیام</button>
                    </form>
                </div>
                
                <div class="contact-info">
                    <h3>اطلاعات تماس</h3>
                    
                    <div class="info-item">
                        <div class="info-icon"><i class="fas fa-user"></i></div>
                        <div>
                            <strong>مدیرعامل:</strong><br>
                            خانم سمیه منعمی<br>
                            <a href="tel:09106168590">09106168590</a>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <strong>آدرس:</strong><br>
                            کرمان خیابان امام جمعه کوچه شماره 18 پلاک 47<br>
                            کد پستی: 7619635359
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon"><i class="fas fa-phone"></i></div>
                        <div>
                            <strong>تلفن:</strong><br>
                            <a href="tel:034-32476351">034-32476351-2</a>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon"><i class="fas fa-fax"></i></div>
                        <div>
                            <strong>فکس:</strong><br>
                            034-32473605
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon"><i class="fas fa-building"></i></div>
                        <div>
                            <strong>اطلاعات شرکت:</strong><br>
                            شماره ثبت: 17575<br>
                            شناسه ملی: 14010013177
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Floating Contact Buttons -->
    <div class="floating-contact">
        <a href="tel:09106168590" class="contact-btn phone">
            <i class="fas fa-phone"></i>
        </a>
        <a href="https://wa.me/989106168590" class="contact-btn whatsapp" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <!-- Back to Top Button -->
    <button class="back-to-top" id="backToTop">
        <i class="fas fa-chevron-up"></i>
    </button>

    <!-- Footer -->
    <footer class="glass-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4>شرکت آرون تارا</h4>
                    <p>تامین کننده معتبر تجهیزات صنعتی و مواد شیمیایی</p>
                    <div class="social-links">
                        <a href="https://wa.me/989106168590" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        <a href="tel:09106168590"><i class="fas fa-phone"></i></a>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h4>خدمات ما</h4>
                    <ul>
                        <li>تجهیزات مکانیکی</li>
                        <li>تجهیزات برقی</li>
                        <li>مواد شیمیایی</li>
                        <li>ابزار دقیق</li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>تماس با ما</h4>
                    <p><i class="fas fa-phone"></i> 034-32476351-2</p>
                    <p><i class="fas fa-mobile-alt"></i> 09106168590</p>
                    <p><i class="fas fa-map-marker-alt"></i> کرمان، خیابان امام جمعه</p>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2024 شرکت آرون تارا - تمامی حقوق محفوظ است</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="js/main.js"></script>
</body>
</html>