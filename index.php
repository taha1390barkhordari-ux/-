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
            { name: 'بیرینگ های غلتکی', desc: 'تامین و تعمیر انواع بیرینگ های صنعتی', img: 'https://images.unsplash.com/photo-1581092918484-8313cb9fe2c3?w=400', link: '<?php echo home_url("/product/mechanical/bearing/"); ?>' },
            { name: 'پمپ های هیدرولیک', desc: 'پمپ های هیدرولیک و لوازم یدکی', img: 'https://images.unsplash.com/photo-1581092795360-fd1ca04f0952?w=400', link: '<?php echo home_url("/product/mechanical/hydraulic-pump/"); ?>' },
            { name: 'موتورهای هیدرولیک', desc: 'موتورهای هیدرولیک و قطعات جانبی', img: 'https://images.unsplash.com/photo-1588702547919-26089e690ecc?w=400', link: '<?php echo home_url("/product/mechanical/hydraulic-motor/"); ?>' },
            { name: 'فن های صنعتی', desc: 'انواع فن های صنعتی و تهویه', img: 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400', link: '<?php echo home_url("/product/mechanical/industrial-fan/"); ?>' },
            { name: 'جک های هیدرولیک', desc: 'جک های هیدرولیک و لوازم یدکی', img: 'https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=400', link: '<?php echo home_url("/product/mechanical/hydraulic-jack/"); ?>' },
            { name: 'کوپلینگ های هیدرولیک', desc: 'کوپلینگ ها و اتصالات هیدرولیک', img: 'https://images.unsplash.com/photo-1565106430482-8f6e74349ca1?w=400', link: '<?php echo home_url("/product/mechanical/coupling/"); ?>' },
            { name: 'مبدل های حرارتی', desc: 'مبدل های حرارتی تیوب و پلیت', img: 'https://images.unsplash.com/photo-1582560869861-766136ce5c1c?w=400', link: '<?php echo home_url("/product/mechanical/heat-exchanger/"); ?>' },
            { name: 'فیلترهای هیدرولیک', desc: 'فیلترهای صنعتی و تعویضی', img: 'https://images.unsplash.com/photo-1519003722824-194d4455a60c?w=400', link: '<?php echo home_url("/product/mechanical/hydraulic-filter/"); ?>' }
        ],
        electrical: [
            { name: 'الکترو موتورها', desc: 'موتورهای الکتریکی سه فاز', img: 'https://images.unsplash.com/photo-1621905252507-b35492cc74b4?w=400', link: '<?php echo home_url("/product/electrical/electric-motor/"); ?>' },
            { name: 'کنتاکتورها', desc: 'کنتاکتورهای برقی صنعتی', img: 'https://images.unsplash.com/photo-1556075798-4825dfaaf498?w=400', link: '<?php echo home_url("/product/electrical/contactor/"); ?>' },
            { name: 'کارت های الکترونیکی', desc: 'بردهای الکترونیکی صنعتی', img: 'https://images.unsplash.com/photo-1518709268805-4e9042af2176?w=400', link: '<?php echo home_url("/product/electrical/electronic-board/"); ?>' },
            { name: 'ویبرومتر', desc: 'دستگاه های اندازه گیری ارتعاش', img: 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?w=400', link: '<?php echo home_url("/product/electrical/vibrometer/"); ?>' },
            { name: 'سنسورهای صنعتی', desc: 'انواع سنسورهای اتوماسیون', img: 'https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=400', link: '<?php echo home_url("/product/electrical/sensor/"); ?>' },
            { name: 'ترانسفورماتور', desc: 'ترانسفورماتورهای قدرت', img: 'https://images.unsplash.com/photo-1565106430482-8f6e74349ca1?w=400', link: '<?php echo home_url("/product/electrical/transformer/"); ?>' },
            { name: 'گیربکس الکتریکی', desc: 'گیربکس های کاهنده دور', img: 'https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=400', link: '<?php echo home_url("/product/electrical/gearbox/"); ?>' }
        ],
        instruments: [
            { name: 'حرارت سنج ها', desc: 'ترمومترهای صنعتی دیجیتال', img: 'https://images.unsplash.com/photo-1584464491033-06628f3a6b7b?w=400', link: '<?php echo home_url("/product/instruments/thermometer/"); ?>' },
            { name: 'فشارسنج ها', desc: 'مانومترهای دقیق صنعتی', img: 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=400', link: '<?php echo home_url("/product/instruments/pressure-gauge/"); ?>' },
            { name: 'سطح سنج ها', desc: 'ترانسمیترهای سطح مایعات', img: 'https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=400', link: '<?php echo home_url("/product/instruments/level-meter/"); ?>' },
            { name: 'شیرهای کنترلی', desc: 'شیرهای اتوماتیک کنترل فرآیند', img: 'https://images.unsplash.com/photo-1581591524425-c7e0978865fc?w=400', link: '<?php echo home_url("/product/instruments/control-valve/"); ?>' },
            { name: 'پرشر سوئیچ', desc: 'سوئیچ های فشار صنعتی', img: 'https://images.unsplash.com/photo-1559049297-692c2a30fb82?w=400', link: '<?php echo home_url("/product/instruments/pressure-switch/"); ?>' },
            { name: 'لول ترانسمیتر', desc: 'فرستنده های سطح مایع', img: 'https://images.unsplash.com/photo-1584464491033-06628f3a6b7b?w=400', link: '<?php echo home_url("/product/instruments/level-transmitter/"); ?>' },
            { name: 'رله های حفاظتی', desc: 'رله های کنترل و حفاظت', img: 'https://images.unsplash.com/photo-1518709268805-4e9042af2176?w=400', link: '<?php echo home_url("/product/instruments/relay/"); ?>' }
        ],
        laboratory: [
            { name: 'اسپکتروفتومتر', desc: 'دستگاه طیف سنجی UV-Vis', img: '<?php echo get_template_directory_uri(); ?>/images/spectrophotometer.jpg', link: '<?php echo home_url("/product/laboratory/spectrophotometer/"); ?>' },
            { name: 'کدورت سنج', desc: 'اندازه گیری کدورت آب', img: '<?php echo get_template_directory_uri(); ?>/images/turbidity-meter.jpg', link: '<?php echo home_url("/product/laboratory/turbidity-meter/"); ?>' },
            { name: 'BOD متر', desc: 'اندازه گیری اکسیژن خواهی بیولوژیک', img: '<?php echo get_template_directory_uri(); ?>/images/bod-meter.jpg', link: '<?php echo home_url("/product/laboratory/bod-meter/"); ?>' },
            { name: 'راکتور COD', desc: 'دستگاه هضم COD', img: '<?php echo get_template_directory_uri(); ?>/images/cod-reactor.jpg', link: '<?php echo home_url("/product/laboratory/cod-reactor/"); ?>' },
            { name: 'pH متر', desc: 'اندازه گیری pH و اسیدیته', img: '<?php echo get_template_directory_uri(); ?>/images/ph-meter.jpg', link: '<?php echo home_url("/product/laboratory/ph-meter/"); ?>' },
            { name: 'EC متر', desc: 'اندازه گیری هدایت الکتریکی', img: '<?php echo get_template_directory_uri(); ?>/images/ec-meter.jpg', link: '<?php echo home_url("/product/laboratory/ec-meter/"); ?>' },
            { name: 'اکسیژن متر', desc: 'اندازه گیری اکسیژن محلول', img: '<?php echo get_template_directory_uri(); ?>/images/oxygen-meter.jpg', link: '<?php echo home_url("/product/laboratory/oxygen-meter/"); ?>' },
            { name: 'TOC آنالایزر', desc: 'اندازه گیری کربن آلی کل', img: '<?php echo get_template_directory_uri(); ?>/images/toc-analyzer.jpg', link: '<?php echo home_url("/product/laboratory/toc-analyzer/"); ?>' }
        ],
        chemicals: [
            { name: 'فلوکولانت آنیونی', desc: 'پلی الکترولیت برای تصفیه آب', img: '<?php echo get_template_directory_uri(); ?>/images/anionic-flocculant.jpg', link: '<?php echo home_url("/product/chemicals/anionic-flocculant/"); ?>' },
            { name: 'فلوکولانت کاتیونی', desc: 'پلی الکترولیت مثبت الشحنه', img: '<?php echo get_template_directory_uri(); ?>/images/cationic-flocculant.jpg', link: '<?php echo home_url("/product/chemicals/cationic-flocculant/"); ?>' },
            { name: 'پتانسیم امیل اگزانتات (PAX)', desc: 'منعقد کننده آب', img: '<?php echo get_template_directory_uri(); ?>/images/pax.jpg', link: '<?php echo home_url("/product/chemicals/pax/"); ?>' },
            { name: 'متیل ایزوبوتیل کربونیل (MIBC)', desc: 'کف کننده فرآیند فلوتاسیون', img: '<?php echo get_template_directory_uri(); ?>/images/mibc.jpg', link: '<?php echo home_url("/product/chemicals/mibc/"); ?>' },
            { name: 'تیتانیوم دی اکسید', desc: 'رنگدانه سفید صنعتی', img: '<?php echo get_template_directory_uri(); ?>/images/titanium-dioxide.jpg', link: '<?php echo home_url("/product/chemicals/titanium-dioxide/"); ?>' },
            { name: 'رنگ ساختمانی', desc: 'رنگ های ساختمانی با کیفیت', img: '<?php echo get_template_directory_uri(); ?>/images/building-paint.jpg', link: '<?php echo home_url("/product/chemicals/building-paint/"); ?>' },
            { name: 'رنگ صنعتی', desc: 'رنگ های مقاوم صنعتی', img: '<?php echo get_template_directory_uri(); ?>/images/industrial-paint.jpg', link: '<?php echo home_url("/product/chemicals/industrial-paint/"); ?>' },
            { name: 'دایلوئنت', desc: 'حلال های صنعتی', img: '<?php echo get_template_directory_uri(); ?>/images/diluent.jpg', link: '<?php echo home_url("/product/chemicals/diluent/"); ?>' }
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