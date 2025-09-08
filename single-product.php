<?php get_header(); ?>

<div class="product-hero-section">
    <div class="container">
        <div class="breadcrumb-nav">
            <a href="<?php echo home_url(); ?>">خانه</a>
            <span class="separator">/</span>
            <a href="#products">محصولات</a>
            <span class="separator">/</span>
            <span class="current-page" id="breadcrumbProduct"></span>
        </div>
    </div>
</div>

<main class="product-main">
    <div class="container">
        <div class="product-content">
            <div class="product-gallery">
                <div class="main-image">
                    <div class="product-icon-display">
                        <i id="mainProductIcon" class="fas fa-industry"></i>
                    </div>
                </div>
                <div class="product-thumbnails">
                    <div class="thumb-icon active" onclick="changeMainIcon(this)">
                        <i class="fas fa-industry"></i>
                    </div>
                    <div class="thumb-icon" onclick="changeMainIcon(this)">
                        <i class="fas fa-cog"></i>
                    </div>
                    <div class="thumb-icon" onclick="changeMainIcon(this)">
                        <i class="fas fa-wrench"></i>
                    </div>
                    <div class="thumb-icon" onclick="changeMainIcon(this)">
                        <i class="fas fa-bolt"></i>
                    </div>
                </div>
            </div>

            <div class="product-info">
                <h1 class="product-title" id="productTitle">
                    <!-- عنوان محصول از JavaScript بارگذاری می‌شود -->
                </h1>
                
                <div class="product-category">
                    <span class="category-badge" id="productCategory">
                        <!-- دسته‌بندی از JavaScript بارگذاری می‌شود -->
                    </span>
                </div>

                <div class="product-description" id="productDescription">
                    <!-- توضیحات از JavaScript بارگذاری می‌شود -->
                </div>

                <div class="product-features">
                    <h3>ویژگی‌های محصول:</h3>
                    <ul id="productFeatures">
                        <!-- ویژگی‌ها از JavaScript بارگذاری می‌شود -->
                    </ul>
                </div>

                <div class="product-actions">
                    <div class="price-inquiry">
                        <p class="price-text">برای استعلام قیمت تماس بگیرید</p>
                        <div class="contact-buttons">
                            <a href="#" id="whatsappLink" class="whatsapp-btn" target="_blank">
                                <i class="fab fa-whatsapp"></i>
                                استعلام قیمت در واتساپ
                            </a>
                            <a href="tel:09106168590" class="call-btn">
                                <i class="fas fa-phone"></i>
                                تماس مستقیم
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-tabs">
            <div class="tab-navigation">
                <button class="tab-btn active" onclick="showTab('description')">توضیحات</button>
                <button class="tab-btn" onclick="showTab('specifications')">مشخصات فنی</button>
                <button class="tab-btn" onclick="showTab('applications')">کاربردها</button>
            </div>

            <div class="tab-content">
                <div class="tab-panel active" id="description">
                    <h3>توضیحات کامل محصول</h3>
                    <div id="fullDescription">
                        <!-- توضیحات کامل از JavaScript بارگذاری می‌شود -->
                    </div>
                </div>

                <div class="tab-panel" id="specifications">
                    <h3>مشخصات فنی</h3>
                    <div class="specs-grid" id="productSpecs">
                        <!-- مشخصات فنی از JavaScript بارگذاری می‌شود -->
                    </div>
                </div>

                <div class="tab-panel" id="applications">
                    <h3>کاربردها و استفاده‌ها</h3>
                    <div class="applications-grid" id="productApplications">
                        <!-- کاربردها از JavaScript بارگذاری می‌شود -->
                    </div>
                </div>
            </div>
        </div>

        <div class="related-products">
            <h3>محصولات مرتبط</h3>
            <div class="products-slider" id="relatedProducts">
                <!-- محصولات مرتبط اینجا نمایش داده می‌شود -->
            </div>
        </div>
    </div>
</main>

<div class="floating-contact">
    <a href="#" id="floatingWhatsapp" class="floating-whatsapp" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
</div>

<style>
/* رنگ‌های زیبای مدرن برای صفحه محصول */
:root {
    --electric-blue: #3b82f6;
    --vibrant-purple: #8b5cf6;
    --mint-green: #10b981;
    --coral-pink: #f472b6;
    --sunny-yellow: #fbbf24;
    --ocean-teal: #14b8a6;
    --gradient-hero: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --gradient-card: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    --gradient-success: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    --gradient-warm: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
    --gradient-sunset: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
}

.product-hero-section {
    background: var(--gradient-hero);
    padding: 2rem 0;
    margin-bottom: 2rem;
    position: relative;
    overflow: hidden;
}

.product-hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, rgba(255,255,255,0.1) 25%, transparent 25%), 
                linear-gradient(-45deg, rgba(255,255,255,0.1) 25%, transparent 25%), 
                linear-gradient(45deg, transparent 75%, rgba(255,255,255,0.1) 75%), 
                linear-gradient(-45deg, transparent 75%, rgba(255,255,255,0.1) 75%);
    background-size: 30px 30px;
    opacity: 0.3;
    animation: movePattern 20s linear infinite;
}

@keyframes movePattern {
    0% { transform: translateX(0); }
    100% { transform: translateX(60px); }
}

.breadcrumb-nav {
    color: white;
    font-size: 0.95rem;
    font-weight: 500;
    z-index: 2;
    position: relative;
}

.breadcrumb-nav a {
    color: rgba(255,255,255,0.9);
    text-decoration: none;
    transition: all 0.3s ease;
    padding: 0.2rem 0.5rem;
    border-radius: 5px;
}

.breadcrumb-nav a:hover {
    color: white;
    background: rgba(255,255,255,0.1);
}

.separator {
    margin: 0 0.7rem;
    opacity: 0.7;
    font-weight: bold;
}

.current-page {
    font-weight: 700;
    color: #fbbf24;
}

.product-main {
    padding: 3rem 0;
    background: linear-gradient(135deg, #f8fafc 0%, #e0e7ff 50%, #fdf2f8 100%);
    min-height: 80vh;
}

.product-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    margin-bottom: 4rem;
}

.product-gallery {
    position: sticky;
    top: 2rem;
    height: fit-content;
}

.main-image {
    border-radius: 25px;
    overflow: hidden;
    box-shadow: 0 25px 50px rgba(59, 130, 246, 0.15);
    margin-bottom: 1.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 450px;
    background: var(--gradient-success);
    position: relative;
}

.main-image::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(circle at 30% 70%, rgba(255,255,255,0.3) 0%, transparent 50%);
    z-index: 1;
}

.product-icon-display {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    z-index: 2;
    position: relative;
}

.product-icon-display i {
    font-size: 10rem !important;
    color: white;
    text-shadow: 0 0 30px rgba(0,0,0,0.3);
    filter: drop-shadow(0 10px 20px rgba(0,0,0,0.2));
    animation: iconFloat 3s ease-in-out infinite;
}

@keyframes iconFloat {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-10px) rotate(2deg); }
}

.product-thumbnails {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

.thumb-icon {
    width: 90px;
    height: 90px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 20px;
    cursor: pointer;
    transition: all 0.3s ease;
    background: var(--gradient-card);
    border: 3px solid transparent;
    box-shadow: 0 8px 20px rgba(240, 147, 251, 0.2);
}

.thumb-icon i {
    font-size: 2.5rem;
    color: white;
    text-shadow: 0 2px 10px rgba(0,0,0,0.3);
}

.thumb-icon:hover,
.thumb-icon.active {
    transform: translateY(-5px) scale(1.1);
    border-color: var(--sunny-yellow);
    box-shadow: 0 15px 35px rgba(240, 147, 251, 0.3);
}

.product-title {
    font-size: 2.8rem;
    background: var(--gradient-hero);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 1.5rem;
    font-weight: 800;
    line-height: 1.2;
}

.category-badge {
    display: inline-block;
    background: var(--gradient-warm);
    color: white;
    padding: 0.8rem 1.5rem;
    border-radius: 30px;
    font-size: 1rem;
    font-weight: 700;
    margin-bottom: 2rem;
    box-shadow: 0 8px 20px rgba(67, 233, 123, 0.3);
    text-shadow: 0 1px 3px rgba(0,0,0,0.2);
}

.product-description {
    background: rgba(255,255,255,0.9);
    backdrop-filter: blur(10px);
    padding: 2rem;
    border-radius: 20px;
    margin-bottom: 2rem;
    border: 1px solid rgba(59, 130, 246, 0.2);
    box-shadow: 0 15px 35px rgba(59, 130, 246, 0.1);
    position: relative;
    overflow: hidden;
}

.product-description::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 5px;
    height: 100%;
    background: var(--gradient-sunset);
}

.product-features {
    margin-bottom: 2rem;
}

.product-features h3 {
    color: var(--vibrant-purple);
    margin-bottom: 1.5rem;
    font-size: 1.5rem;
    font-weight: 700;
}

.product-features ul {
    list-style: none;
    padding: 0;
    background: rgba(255,255,255,0.7);
    border-radius: 15px;
    padding: 1.5rem;
    backdrop-filter: blur(10px);
}

.product-features li {
    padding: 0.8rem 0;
    border-bottom: 1px solid rgba(59, 130, 246, 0.1);
    position: relative;
    padding-right: 2rem;
    font-weight: 500;
    color: #1e293b;
}

.product-features li:before {
    content: '✨';
    position: absolute;
    right: 0;
    font-size: 1.2rem;
    animation: sparkle 2s ease-in-out infinite;
}

@keyframes sparkle {
    0%, 100% { transform: rotate(0deg) scale(1); }
    50% { transform: rotate(180deg) scale(1.1); }
}

.product-actions {
    background: var(--gradient-sunset);
    padding: 2.5rem;
    border-radius: 25px;
    text-align: center;
    box-shadow: 0 20px 40px rgba(250, 112, 154, 0.2);
    position: relative;
    overflow: hidden;
}

.product-actions::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
    animation: rotate360 10s linear infinite;
}

@keyframes rotate360 {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.price-text {
    font-size: 1.3rem;
    color: white;
    margin-bottom: 2rem;
    font-weight: 700;
    text-shadow: 0 2px 5px rgba(0,0,0,0.2);
    z-index: 2;
    position: relative;
}

.contact-buttons {
    display: flex;
    gap: 1.5rem;
    flex-wrap: wrap;
    justify-content: center;
    z-index: 2;
    position: relative;
}

.whatsapp-btn, .call-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.8rem;
    padding: 1rem 2rem;
    border-radius: 30px;
    text-decoration: none;
    font-weight: 700;
    transition: all 0.4s ease;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    font-size: 1.1rem;
    position: relative;
    overflow: hidden;
}

.whatsapp-btn {
    background: linear-gradient(135deg, #25D366 0%, #20B954 100%);
    color: white;
}

.whatsapp-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    transition: left 0.6s ease;
}

.whatsapp-btn:hover::before {
    left: 100%;
}

.whatsapp-btn:hover {
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 15px 35px rgba(37, 211, 102, 0.4);
}

.call-btn {
    background: var(--gradient-hero);
    color: white;
}

.call-btn:hover {
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 15px 35px rgba(102, 126, 234, 0.4);
}

.product-tabs {
    margin-bottom: 4rem;
    background: rgba(255,255,255,0.8);
    border-radius: 25px;
    backdrop-filter: blur(15px);
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}

.tab-navigation {
    display: flex;
    gap: 0;
    background: rgba(59, 130, 246, 0.1);
    padding: 0.5rem;
}

.tab-btn {
    background: none;
    border: none;
    padding: 1.2rem 2rem;
    cursor: pointer;
    font-weight: 700;
    color: var(--vibrant-purple);
    border-radius: 15px;
    transition: all 0.3s ease;
    position: relative;
    flex: 1;
    font-size: 1.1rem;
}

.tab-btn.active {
    background: var(--gradient-success);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(74, 222, 254, 0.3);
}

.tab-btn:hover:not(.active) {
    background: rgba(139, 92, 246, 0.1);
    transform: translateY(-1px);
}

.tab-panel {
    display: none;
    padding: 3rem;
    animation: fadeInUp 0.5s ease;
}

.tab-panel.active {
    display: block;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.specs-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1.5rem;
}

.spec-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1.5rem;
    background: var(--gradient-warm);
    border-radius: 15px;
    color: white;
    box-shadow: 0 8px 20px rgba(67, 233, 123, 0.2);
    transition: transform 0.3s ease;
}

.spec-item:hover {
    transform: translateY(-3px);
}

.spec-label {
    font-weight: 700;
}

.spec-value {
    font-weight: 600;
    opacity: 0.9;
}

.applications-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1rem;
}

.application-item {
    background: var(--gradient-card);
    padding: 1.5rem;
    border-radius: 15px;
    color: white;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 1rem;
    box-shadow: 0 8px 20px rgba(240, 147, 251, 0.2);
    transition: all 0.3s ease;
}

.application-item:hover {
    transform: translateY(-3px) scale(1.02);
}

.application-item::before {
    content: '⚙️';
    font-size: 1.5rem;
}

.related-products {
    background: rgba(255,255,255,0.9);
    padding: 3rem;
    border-radius: 25px;
    backdrop-filter: blur(15px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}

.related-products h3 {
    text-align: center;
    background: var(--gradient-hero);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 2rem;
    font-size: 2.2rem;
    font-weight: 800;
}

.products-slider {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 2rem;
}

.related-product-card {
    background: rgba(255,255,255,0.9);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    transition: all 0.4s ease;
    border: 2px solid transparent;
    backdrop-filter: blur(10px);
}

.related-product-card:hover {
    transform: translateY(-8px) scale(1.02);
    border-color: var(--electric-blue);
    box-shadow: 0 25px 50px rgba(59, 130, 246, 0.2);
}

.related-product-icon {
    height: 200px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--gradient-success);
    position: relative;
    overflow: hidden;
}

.related-product-icon::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(circle at 70% 30%, rgba(255,255,255,0.3) 0%, transparent 60%);
}

.related-product-icon i {
    font-size: 4rem;
    color: white;
    z-index: 2;
    position: relative;
    text-shadow: 0 5px 15px rgba(0,0,0,0.3);
}

.related-product-info {
    padding: 2rem;
}

.related-product-info h4 {
    color: var(--vibrant-purple);
    margin-bottom: 1rem;
    font-size: 1.3rem;
    font-weight: 700;
}

.related-product-info p {
    color: #64748b;
    font-size: 1rem;
    margin-bottom: 1.5rem;
    line-height: 1.6;
}

.related-product-link {
    display: inline-flex;
    align-items: center;
    gap: 0.8rem;
    background: var(--gradient-sunset);
    color: white;
    padding: 0.8rem 1.5rem;
    border-radius: 25px;
    text-decoration: none;
    font-size: 1rem;
    font-weight: 700;
    transition: all 0.3s ease;
    box-shadow: 0 5px 15px rgba(250, 112, 154, 0.3);
}

.related-product-link:hover {
    transform: translateX(-5px);
    box-shadow: 0 8px 20px rgba(250, 112, 154, 0.4);
}

.floating-contact {
    position: fixed;
    bottom: 2rem;
    left: 2rem;
    z-index: 1000;
}

.floating-whatsapp {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, #25D366 0%, #20B954 100%);
    color: white;
    border-radius: 50%;
    text-decoration: none;
    font-size: 1.8rem;
    box-shadow: 0 10px 30px rgba(37, 211, 102, 0.4);
    animation: floatingPulse 3s ease-in-out infinite;
    transition: all 0.3s ease;
}

.floating-whatsapp:hover {
    transform: scale(1.1);
    box-shadow: 0 15px 40px rgba(37, 211, 102, 0.5);
}

@keyframes floatingPulse {
    0%, 100% { 
        transform: scale(1);
        box-shadow: 0 10px 30px rgba(37, 211, 102, 0.4), 0 0 0 0 rgba(37, 211, 102, 0.7);
    }
    50% { 
        transform: scale(1.05);
        box-shadow: 0 15px 35px rgba(37, 211, 102, 0.5), 0 0 0 20px rgba(37, 211, 102, 0);
    }
}

/* Responsive Design */
@media (max-width: 768px) {
    .product-content {
        grid-template-columns: 1fr;
        gap: 3rem;
    }
    
    .product-title {
        font-size: 2.2rem;
    }
    
    .contact-buttons {
        flex-direction: column;
        gap: 1rem;
    }
    
    .tab-navigation {
        flex-wrap: wrap;
        gap: 0.5rem;
    }
    
    .tab-btn {
        flex: none;
        min-width: 150px;
    }
    
    .specs-grid,
    .applications-grid {
        grid-template-columns: 1fr;
    }
    
    .floating-contact {
        bottom: 1rem;
        left: 1rem;
    }
    
    .floating-whatsapp {
        width: 60px;
        height: 60px;
        font-size: 1.5rem;
    }
    
    .product-icon-display i {
        font-size: 6rem !important;
    }
    
    .thumb-icon {
        width: 70px;
        height: 70px;
    }
    
    .thumb-icon i {
        font-size: 2rem;
    }
}
</style>

<script>
// آیکون‌های محصولات برای نمایش
const productIcons = {
    'بیرینگ های غلتکی': 'fa-cog',
    'پمپ های هیدرولیک': 'fa-tint',
    'موتورهای هیدرولیک': 'fa-engine',
    'فن های صنعتی': 'fa-fan',
    'جک های هیدرولیک': 'fa-wrench',
    'کوپلینگ های هیدرولیک': 'fa-link',
    'مبدل های حرارتی': 'fa-fire',
    'فیلترهای هیدرولیک': 'fa-filter',
    'الکترو موتورها': 'fa-bolt',
    'کنتاکتورها': 'fa-plug',
    'کارت های الکترونیکی': 'fa-microchip',
    'ویبرومتر': 'fa-wave-square',
    'سنسورهای صنعتی': 'fa-satellite-dish',
    'ترانسفورماتور': 'fa-battery-full',
    'گیربکس الکتریکی': 'fa-cogs',
    'حرارت سنج ها': 'fa-thermometer-half',
    'فشارسنج ها': 'fa-gauge-high',
    'سطح سنج ها': 'fa-level-up-alt',
    'شیرهای کنترلی': 'fa-valve',
    'پرشر سوئیچ': 'fa-toggle-on',
    'لول ترانسمیتر': 'fa-broadcast-tower',
    'رله های حفاظتی': 'fa-shield-alt',
    'اسپکتروفتومتر': 'fa-search',
    'کدورت سنج': 'fa-eye',
    'BOD متر': 'fa-flask',
    'راکتور COD': 'fa-vial',
    'pH متر': 'fa-balance-scale',
    'EC متر': 'fa-bolt',
    'اکسیژن متر': 'fa-lungs',
    'TOC آنالایزر': 'fa-atom',
    'فلوکولانت آنیونی': 'fa-tint',
    'فلوکولانت کاتیونی': 'fa-fill-drip',
    'پتانسیم امیل اگزانتات (PAX)': 'fa-capsules',
    'متیل ایزوبوتیل کربونیل (MIBC)': 'fa-spray-can',
    'تیتانیوم دی اکسید': 'fa-palette',
    'رنگ ساختمانی': 'fa-paint-brush',
    'رنگ صنعتی': 'fa-paint-roller',
    'دایلوئنت': 'fa-fill'
};

// تابع برای تغییر آیکون اصلی
function changeMainIcon(element) {
    const icon = element.querySelector('i');
    const iconClass = icon.className;
    
    document.getElementById('mainProductIcon').className = iconClass;
    
    // حذف active از همه thumb ها
    document.querySelectorAll('.thumb-icon').forEach(thumb => {
        thumb.classList.remove('active');
    });
    
    // اضافه کردن active به thumb انتخاب شده
    element.classList.add('active');
}

// تابع برای تغییر تب‌ها
function showTab(tabName) {
    // پنهان کردن تمام تب‌ها
    document.querySelectorAll('.tab-panel').forEach(panel => {
        panel.classList.remove('active');
    });
    
    // حذف active از تمام دکمه‌ها
    document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    
    // نمایش تب انتخابی
    document.getElementById(tabName).classList.add('active');
    
    // اضافه کردن active به دکمه کلیک شده
    event.target.classList.add('active');
}

// بارگذاری اطلاعات محصول از URL
document.addEventListener('DOMContentLoaded', function() {
    loadProductData();
    loadRelatedProducts();
});

function loadProductData() {
    // گرفتن اطلاعات از URL
    const path = window.location.pathname;
    const pathParts = path.split('/').filter(part => part !== '');
    
    let categoryName = '';
    let productName = '';
    
    // استخراج نام دسته‌بندی و محصول از URL
    if (pathParts.length >= 3 && pathParts[0] === 'product') {
        categoryName = decodeURIComponent(pathParts[1]);
        productName = decodeURIComponent(pathParts[2]);
    }
    
    // اگر اطلاعات از URL گرفته نشد، از PHP استفاده کن
    if (!productName) {
        productName = "<?php echo urldecode(get_query_var('product_name')); ?>";
        categoryName = "<?php echo urldecode(get_query_var('category_name')); ?>";
    }
    
    // تنظیم عنوان و breadcrumb
    document.getElementById('productTitle').textContent = productName;
    document.getElementById('breadcrumbProduct').textContent = productName;
    document.getElementById('productCategory').textContent = categoryName;
    
    // تنظیم آیکون محصول
    const iconClass = productIcons[productName] || 'fa-industry';
    document.getElementById('mainProductIcon').className = `fas ${iconClass}`;
    
    // تنظیم لینک واتساپ
    const whatsappMessage = `سلام، می‌خوام درباره محصول ${productName} اطلاعات بیشتر بگیرم`;
    const whatsappUrl = `https://wa.me/989106168590?text=${encodeURIComponent(whatsappMessage)}`;
    
    document.getElementById('whatsappLink').href = whatsappUrl;
    document.getElementById('floatingWhatsapp').href = whatsappUrl;
    
    // تنظیم توضیحات محصول
    document.getElementById('productDescription').innerHTML = `
        <p>این محصول با کیفیت بالا و مطابق با استانداردهای بین‌المللی تولید شده است. برای دریافت اطلاعات کامل و مشاوره رایگان با ما تماس بگیرید.</p>
    `;
    
    // تنظیم ویژگی‌ها
    document.getElementById('productFeatures').innerHTML = `
        <li>کیفیت بالا و مقاوم</li>
        <li>مطابق با استانداردهای بین‌المللی</li>
        <li>گارانتی معتبر</li>
        <li>پشتیبانی فنی 24 ساعته</li>
        <li>ارسال سریع در سراسر کشور</li>
        <li>قیمت رقابتی</li>
    `;
    
    // تنظیم توضیحات کامل
    document.getElementById('fullDescription').innerHTML = `
        <p>محصول <strong>${productName}</strong> یکی از محصولات پرکاربرد و با کیفیت شرکت آرون تارا است. با سال‌ها تجربه در زمینه تأمین تجهیزات صنعتی، این محصول را به عنوان یکی از بهترین گزینه‌های موجود در بازار معرفی می‌کنیم.</p>
        <p>این محصول با استفاده از بهترین مواد اولیه و تکنولوژی‌های روز دنیا تولید شده و دارای تمامی استانداردهای بین‌المللی می‌باشد.</p>
        <p>کیفیت بالا، قیمت مناسب و خدمات پس از فروش عالی از مزایای انتخاب این محصول است. برای مشاوره و راهنمایی بیشتر می‌توانید با تیم فروش ما در تماس باشید.</p>
    `;
    
    // تنظیم مشخصات فنی
    document.getElementById('productSpecs').innerHTML = `
        <div class="spec-item">
            <span class="spec-label">برند:</span>
            <span class="spec-value">متنوع (برندهای معتبر)</span>
        </div>
        <div class="spec-item">
            <span class="spec-label">کشور سازنده:</span>
            <span class="spec-value">متنوع</span>
        </div>
        <div class="spec-item">
            <span class="spec-label">گارانتی:</span>
            <span class="spec-value">طبق شرایط فروشنده</span>
        </div>
        <div class="spec-item">
            <span class="spec-label">وضعیت:</span>
            <span class="spec-value">موجود</span>
        </div>
        <div class="spec-item">
            <span class="spec-label">دسته‌بندی:</span>
            <span class="spec-value">${categoryName}</span>
        </div>
        <div class="spec-item">
            <span class="spec-label">کیفیت:</span>
            <span class="spec-value">درجه یک</span>
        </div>
    `;
    
    // تنظیم کاربردها
    document.getElementById('productApplications').innerHTML = `
        <div class="application-item">صنایع پتروشیمی</div>
        <div class="application-item">صنایع فولاد و آهن</div>
        <div class="application-item">صنایع برق و الکترونیک</div>
        <div class="application-item">صنایع آب و فاضلاب</div>
        <div class="application-item">صنایع معدنی</div>
        <div class="application-item">صنایع غذایی</div>
        <div class="application-item">صنایع دارویی</div>
        <div class="application-item">صنایع نساجی</div>
    `;
}

function loadRelatedProducts() {
    const relatedContainer = document.getElementById('relatedProducts');
    
    // محصولات مرتبط نمونه
    const relatedProducts = [
        { name: 'بیرینگ های غلتکی', desc: 'تامین و تعمیر انواع بیرینگ', icon: 'fa-cog', link: '/product/mechanical/bearing/' },
        { name: 'پمپ های هیدرولیک', desc: 'پمپ های هیدرولیک و لوازم یدکی', icon: 'fa-tint', link: '/product/mechanical/hydraulic-pump/' },
        { name: 'الکترو موتورها', desc: 'موتورهای الکتریکی سه فاز', icon: 'fa-bolt', link: '/product/electrical/electric-motor/' }
    ];
    
    relatedContainer.innerHTML = relatedProducts.map(product => `
        <div class="related-product-card">
            <div class="related-product-icon">
                <i class="fas ${product.icon}"></i>
            </div>
            <div class="related-product-info">
                <h4>${product.name}</h4>
                <p>${product.desc}</p>
                <a href="${product.link}" class="related-product-link">
                    <i class="fas fa-arrow-left"></i>
                    مشاهده محصول
                </a>
            </div>
        </div>
    `).join('');
}
</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<?php get_footer(); ?>