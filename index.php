<?php
/**
 * The main template file for Aron Tara 3D Theme
 * 
 * @package AronTara3D
 */

get_header(); ?>

<!-- Loading Animation -->
<div class="loading" id="loading">
    <div class="loader"></div>
</div>

<!-- Hero Slider Section -->
<section class="hero-slider" id="hero">
    <div class="slide active" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/slider1.jpg');">
        <div class="slide-content">
            <h1>شرکت سهامی خاص آرون تارا</h1>
            <p>تامین کننده تجهیزات مکانیک، الکتریک، الکترونیک و مواد شیمیایی</p>
            <a href="#services" class="cta-button">خدمات ما</a>
        </div>
    </div>
    <div class="slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/slider2.jpg');">
        <div class="slide-content">
            <h1>تخصص در مواد شیمیایی</h1>
            <p>پیشرو در تامین فلوکولانت، PAX و MIBC</p>
            <a href="#products" class="cta-button">محصولات</a>
        </div>
    </div>
    <div class="slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/slider3.jpg');">
        <div class="slide-content">
            <h1>همکاری با بزرگترین شرکت‌ها</h1>
            <p>افتخار همکاری با فولاد زرند ایرانیان، مس سرچشمه و بسیاری دیگر</p>
            <a href="#about" class="cta-button">درباره ما</a>
        </div>
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
                <div class="service-icon">🏭</div>
                <h3>شرکت فولاد زرند ایرانیان</h3>
                <p>همکاری مستمر در تامین مواد شیمیایی</p>
            </div>
            <div class="service-card">
                <div class="service-icon">⚒️</div>
                <h3>شرکت فولاد سیرجان ایرانیان</h3>
                <p>تامین تجهیزات مکانیکی و الکتریکی</p>
            </div>
            <div class="service-card">
                <div class="service-icon">🔶</div>
                <h3>شرکت ملی صنایع مس ایران</h3>
                <p>تخصص در تامین مواد شیمیایی معدنی</p>
            </div>
            <div class="service-card">
                <div class="service-icon">⛏️</div>
                <h3>شرکت سنگ آهن مرکزی ایران</h3>
                <p>تامین ابزار دقیق و تجهیزات</p>
            </div>
            <div class="service-card">
                <div class="service-icon">⚡</div>
                <h3>شرکت برق منطقه‌ای کرمان</h3>
                <p>تجهیزات برقی و الکترونیکی</p>
            </div>
            <div class="service-card">
                <div class="service-icon">🏗️</div>
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
                <div class="service-icon">⚙️</div>
                <h3>تجهیزات مکانیکی</h3>
                <p>بیرینگ‌ها، پمپ‌های هیدرولیک، جک‌های هیدرولیکی، مبدل‌های حرارتی و کوپلینگ‌ها</p>
            </div>
            <div class="service-card">
                <div class="service-icon">🔌</div>
                <h3>تجهیزات برقی</h3>
                <p>الکترو موتورها، کنتاکتورها، کارت‌های الکترونیکی، ویبرومتر و سنسورها</p>
            </div>
            <div class="service-card">
                <div class="service-icon">📊</div>
                <h3>ابزار دقیق</h3>
                <p>حرارت‌سنج‌ها، فشارسنج‌ها، سطح‌سنج‌ها، شیرهای کنترلی و ترانسمیترها</p>
            </div>
            <div class="service-card">
                <div class="service-icon">🧪</div>
                <h3>تجهیزات آزمایشگاهی</h3>
                <p>اسپکتروفتومتر، کدورت‌سنج، BOD متر، راکتور COD، pH متر و EC متر</p>
            </div>
            <div class="service-card">
                <div class="service-icon">⚗️</div>
                <h3>مواد شیمیایی</h3>
                <p>فلوکولانت، PAX، دایلوئنت، MIBC، تیتانیوم دی‌اکسید و رنگ‌های صنعتی</p>
            </div>
            <div class="service-card">
                <div class="service-icon">🔧</div>
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
                <form id="contactForm" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
                    <input type="hidden" name="action" value="contact_form_submit">
                    <?php wp_nonce_field('contact_form_nonce', 'contact_nonce'); ?>
                    
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
                    <div class="info-icon">👤</div>
                    <div>
                        <strong>مدیرعامل:</strong><br>
                        خانم سمیه منعمی<br>
                        <a href="tel:09106168590">091061268590</a>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">📍</div>
                    <div>
                        <strong>آدرس:</strong><br>
                        کرمان خیابان امام جمعه کوچه شماره 18 پلاک 47<br>
                        کد پستی: 7619635359
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">📞</div>
                    <div>
                        <strong>تلفن:</strong><br>
                        <a href="tel:034-32476351">034-32476351-2</a>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">📠</div>
                    <div>
                        <strong>فکس:</strong><br>
                        034-32473605
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">🏢</div>
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

<?php get_footer(); ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Hide loading animation
    setTimeout(() => {
        document.getElementById('loading').style.display = 'none';
    }, 1000);
    
    // Initialize slider
    initSlider();
    
    // Initialize products
    initProducts();
    
    // Initialize scroll animations
    initScrollAnimations();
    
    // Initialize smooth scrolling
    initSmoothScrolling();
});

function initSlider() {
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    
    function nextSlide() {
        slides[currentSlide].classList.remove('active');
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].classList.add('active');
    }
    
    setInterval(nextSlide, 5000);
}

function initProducts() {
    const products = {
        mechanical: [
            { name: 'بیرینگ های غلتکی', desc: 'تامین و تعمیر انواع بیرینگ های صنعتی', img: '<?php echo get_template_directory_uri(); ?>/images/bearing.jpg' },
            { name: 'پمپ های هیدرولیک', desc: 'پمپ های هیدرولیک و لوازم یدکی', img: '<?php echo get_template_directory_uri(); ?>/images/hydraulic-pump.jpg' },
            { name: 'موتورهای هیدرولیک', desc: 'موتورهای هیدرولیک و قطعات جانبی', img: '<?php echo get_template_directory_uri(); ?>/images/hydraulic-motor.jpg' },
            { name: 'فن های صنعتی', desc: 'انواع فن های صنعتی و تهویه', img: '<?php echo get_template_directory_uri(); ?>/images/industrial-fan.jpg' },
            { name: 'جک های هیدرولیک', desc: 'جک های هیدرولیک و لوازم یدکی', img: '<?php echo get_template_directory_uri(); ?>/images/hydraulic-jack.jpg' },
            { name: 'کوپلینگ های هیدرولیک', desc: 'کوپلینگ ها و اتصالات هیدرولیک', img: '<?php echo get_template_directory_uri(); ?>/images/coupling.jpg' },
            { name: 'مبدل های حرارتی', desc: 'مبدل های حرارتی تیوب و پلیت', img: '<?php echo get_template_directory_uri(); ?>/images/heat-exchanger.jpg' },
            { name: 'فیلترهای هیدرولیک', desc: 'فیلترهای صنعتی و تعویضی', img: '<?php echo get_template_directory_uri(); ?>/images/hydraulic-filter.jpg' }
        ],
        electrical: [
            { name: 'الکترو موتورها', desc: 'موتورهای الکتریکی سه فاز', img: '<?php echo get_template_directory_uri(); ?>/images/electric-motor.jpg' },
            { name: 'کنتاکتورها', desc: 'کنتاکتورهای برقی صنعتی', img: '<?php echo get_template_directory_uri(); ?>/images/contactor.jpg' },
            { name: 'کارت های الکترونیکی', desc: 'بردهای الکترونیکی صنعتی', img: '<?php echo get_template_directory_uri(); ?>/images/electronic-board.jpg' },
            { name: 'ویبرومتر', desc: 'دستگاه های اندازه گیری ارتعاش', img: '<?php echo get_template_directory_uri(); ?>/images/vibrometer.jpg' },
            { name: 'سنسورهای صنعتی', desc: 'انواع سنسورهای اتوماسیون', img: '<?php echo get_template_directory_uri(); ?>/images/sensor.jpg' },
            { name: 'ترانسفورماتور', desc: 'ترانسفورماتورهای قدرت', img: '<?php echo get_template_directory_uri(); ?>/images/transformer.jpg' },
            { name: 'گیربکس الکتریکی', desc: 'گیربکس های کاهنده دور', img: '<?php echo get_template_directory_uri(); ?>/images/gearbox.jpg' }
        ],
        instruments: [
            { name: 'حرارت سنج ها', desc: 'ترمومترهای صنعتی دیجیتال', img: '<?php echo get_template_directory_uri(); ?>/images/thermometer.jpg' },
            { name: 'فشارسنج ها', desc: 'مانومترهای دقیق صنعتی', img: '<?php echo get_template_directory_uri(); ?>/images/pressure-gauge.jpg' },
            { name: 'سطح سنج ها', desc: 'ترانسمیترهای سطح مایعات', img: '<?php echo get_template_directory_uri(); ?>/images/level-meter.jpg' },
            { name: 'شیرهای کنترلی', desc: 'شیرهای اتوماتیک کنترل فرآیند', img: '<?php echo get_template_directory_uri(); ?>/images/control-valve.jpg' },
            { name: 'پرشر سوئیچ', desc: 'سوئیچ های فشار صنعتی', img: '<?php echo get_template_directory_uri(); ?>/images/pressure-switch.jpg' },
            { name: 'لول ترانسمیتر', desc: 'فرستنده های سطح مایع', img: '<?php echo get_template_directory_uri(); ?>/images/level-transmitter.jpg' },
            { name: 'رله های حفاظتی', desc: 'رله های کنترل و حفاظت', img: '<?php echo get_template_directory_uri(); ?>/images/relay.jpg' }
        ],
        laboratory: [
            { name: 'اسپکتروفتومتر', desc: 'دستگاه طیف سنجی UV-Vis', img: '<?php echo get_template_directory_uri(); ?>/images/spectrophotometer.jpg' },
            { name: 'کدورت سنج', desc: 'اندازه گیری کدورت آب', img: '<?php echo get_template_directory_uri(); ?>/images/turbidity-meter.jpg' },
            { name: 'BOD متر', desc: 'اندازه گیری اکسیژن خواهی بیولوژیک', img: '<?php echo get_template_directory_uri(); ?>/images/bod-meter.jpg' },
            { name: 'راکتور COD', desc: 'دستگاه هضم COD', img: '<?php echo get_template_directory_uri(); ?>/images/cod-reactor.jpg' },
            { name: 'pH متر', desc: 'اندازه گیری pH و اسیدیته', img: '<?php echo get_template_directory_uri(); ?>/images/ph-meter.jpg' },
            { name: 'EC متر', desc: 'اندازه گیری هدایت الکتریکی', img: '<?php echo get_template_directory_uri(); ?>/images/ec-meter.jpg' },
            { name: 'اکسیژن متر', desc: 'اندازه گیری اکسیژن محلول', img: '<?php echo get_template_directory_uri(); ?>/images/oxygen-meter.jpg' },
            { name: 'TOC آنالایزر', desc: 'اندازه گیری کربن آلی کل', img: '<?php echo get_template_directory_uri(); ?>/images/toc-analyzer.jpg' }
        ],
        chemicals: [
            { name: 'فلوکولانت آنیونی', desc: 'پلی الکترولیت برای تصفیه آب', img: '<?php echo get_template_directory_uri(); ?>/images/anionic-flocculant.jpg' },
            { name: 'فلوکولانت کاتیونی', desc: 'پلی الکترولیت مثبت الشحنه', img: '<?php echo get_template_directory_uri(); ?>/images/cationic-flocculant.jpg' },
            { name: 'پتانسیم امیل اگزانتات (PAX)', desc: 'منعقد کننده آب', img: '<?php echo get_template_directory_uri(); ?>/images/pax.jpg' },
            { name: 'متیل ایزوبوتیل کربونیل (MIBC)', desc: 'کف کننده فرآیند فلوتاسیون', img: '<?php echo get_template_directory_uri(); ?>/images/mibc.jpg' },
            { name: 'تیتانیوم دی اکسید', desc: 'رنگدانه سفید صنعتی', img: '<?php echo get_template_directory_uri(); ?>/images/titanium-dioxide.jpg' },
            { name: 'رنگ ساختمانی', desc: 'رنگ های ساختمانی با کیفیت', img: '<?php echo get_template_directory_uri(); ?>/images/building-paint.jpg' },
            { name: 'رنگ صنعتی', desc: 'رنگ های مقاوم صنعتی', img: '<?php echo get_template_directory_uri(); ?>/images/industrial-paint.jpg' },
            { name: 'دایلوئنت', desc: 'حلال های صنعتی', img: '<?php echo get_template_directory_uri(); ?>/images/diluent.jpg' }
        ]
    };
    
    const tabButtons = document.querySelectorAll('.tab-button');
    const productsContainer = document.getElementById('products-container');
    
    function showProducts(category) {
        const categoryProducts = products[category];
        productsContainer.innerHTML = '';
        
        categoryProducts.forEach(product => {
            const productCard = document.createElement('div');
            productCard.className = 'product-card';
            productCard.innerHTML = `
                <div class="product-image" style="background-image: url('${product.img}')"></div>
                <div class="product-info">
                    <div class="product-title">${product.name}</div>
                    <div class="product-description">${product.desc}</div>
                    <a href="${product.link}" class="product-btn">مشاهده جزئیات</a>
                </div>
            `;
            productsContainer.appendChild(productCard);
        });
    }
    
    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            tabButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            showProducts(button.dataset.category);
        });
    });
    
    // Show initial products
    showProducts('mechanical');
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

function initSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}
</script>