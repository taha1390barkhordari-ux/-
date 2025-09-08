<?php get_header(); ?>

<div class="product-hero-section">
    <div class="container">
        <div class="breadcrumb-nav">
            <a href="<?php echo home_url(); ?>">خانه</a>
            <span class="separator">/</span>
            <a href="#products">محصولات</a>
            <span class="separator">/</span>
            <span class="current-page"><?php echo get_query_var('product_name'); ?></span>
        </div>
    </div>
</div>

<main class="product-main">
    <div class="container">
        <div class="product-content">
            <div class="product-gallery">
                <div class="main-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/product-placeholder.jpg" 
                         alt="<?php echo get_query_var('product_name'); ?>" 
                         id="mainProductImage">
                </div>
                <div class="product-thumbnails">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/product-placeholder.jpg" 
                         alt="نمای 1" 
                         onclick="changeMainImage(this.src)">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/product-placeholder.jpg" 
                         alt="نمای 2" 
                         onclick="changeMainImage(this.src)">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/product-placeholder.jpg" 
                         alt="نمای 3" 
                         onclick="changeMainImage(this.src)">
                </div>
            </div>

            <div class="product-info">
                <h1 class="product-title" id="productTitle">
                    <?php echo urldecode(get_query_var('product_name')); ?>
                </h1>
                
                <div class="product-category">
                    <span class="category-badge" id="productCategory">
                        <?php echo urldecode(get_query_var('category_name')); ?>
                    </span>
                </div>

                <div class="product-description" id="productDescription">
                    <p>این محصول با کیفیت بالا و مطابق با استانداردهای بین‌المللی تولید شده است. برای دریافت اطلاعات کامل و مشاوره رایگان با ما تماس بگیرید.</p>
                </div>

                <div class="product-features">
                    <h3>ویژگی‌های محصول:</h3>
                    <ul id="productFeatures">
                        <li>کیفیت بالا و مقاوم</li>
                        <li>مطابق با استانداردهای بین‌المللی</li>
                        <li>گارانتی معتبر</li>
                        <li>پشتیبانی فنی</li>
                        <li>ارسال سریع</li>
                    </ul>
                </div>

                <div class="product-actions">
                    <div class="price-inquiry">
                        <p class="price-text">برای استعلام قیمت تماس بگیرید</p>
                        <div class="contact-buttons">
                            <a href="https://wa.me/989106168590?text=سلام، می‌خوام درباره محصول <?php echo urldecode(get_query_var('product_name')); ?> اطلاعات بیشتر بگیرم" 
                               class="whatsapp-btn" 
                               target="_blank">
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
                    <p id="fullDescription">
                        این محصول یکی از محصولات پرکاربرد و با کیفیت شرکت بازرگانی پارس ایده آل است. با سال‌ها تجربه در زمینه تأمین تجهیزات صنعتی، این محصول را به عنوان یکی از بهترین گزینه‌های موجود در بازار معرفی می‌کنیم.
                    </p>
                    <p>
                        کیفیت بالا، قیمت مناسب و خدمات پس از فروش عالی از مزایای انتخاب این محصول است. برای مشاوره و راهنمایی بیشتر می‌توانید با تیم فروش ما در تماس باشید.
                    </p>
                </div>

                <div class="tab-panel" id="specifications">
                    <h3>مشخصات فنی</h3>
                    <div class="specs-grid" id="productSpecs">
                        <div class="spec-item">
                            <span class="spec-label">برند:</span>
                            <span class="spec-value">متنوع</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">کشور سازنده:</span>
                            <span class="spec-value">متنوع</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">گارانتی:</span>
                            <span class="spec-value">طبق شرایط</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">وضعیت:</span>
                            <span class="spec-value">موجود</span>
                        </div>
                    </div>
                </div>

                <div class="tab-panel" id="applications">
                    <h3>کاربردها و استفاده‌ها</h3>
                    <ul id="productApplications">
                        <li>صنایع پتروشیمی</li>
                        <li>صنایع فولاد</li>
                        <li>صنایع برق</li>
                        <li>صنایع آب و فاضلاب</li>
                        <li>صنایع معدنی</li>
                    </ul>
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
    <a href="https://wa.me/989106168590?text=سلام، سوال درباره محصول <?php echo urldecode(get_query_var('product_name')); ?> دارم" 
       class="floating-whatsapp" 
       target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
</div>

<style>
/* رنگ‌های زیبا برای صفحه محصول */
:root {
    --primary-blue: #4A90E2;
    --secondary-teal: #50C3A5;
    --accent-purple: #9B59B6;
    --warm-orange: #F39C12;
    --success-green: #27AE60;
    --deep-navy: #2C3E50;
    --light-gray: #F8F9FA;
    --medium-gray: #6C757D;
    --gradient-1: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --gradient-2: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    --gradient-3: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    --gradient-4: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
}

.product-hero-section {
    background: var(--gradient-1);
    padding: 2rem 0;
    margin-bottom: 2rem;
}

.breadcrumb-nav {
    color: white;
    font-size: 0.9rem;
}

.breadcrumb-nav a {
    color: rgba(255,255,255,0.8);
    text-decoration: none;
    transition: color 0.3s ease;
}

.breadcrumb-nav a:hover {
    color: white;
}

.separator {
    margin: 0 0.5rem;
    opacity: 0.6;
}

.current-page {
    font-weight: 600;
}

.product-main {
    padding: 2rem 0;
}

.product-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 3rem;
    margin-bottom: 3rem;
}

.product-gallery {
    position: sticky;
    top: 2rem;
    height: fit-content;
}

.main-image {
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 15px 35px rgba(74, 144, 226, 0.2);
    margin-bottom: 1rem;
}

.main-image img {
    width: 100%;
    height: 400px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.main-image img:hover {
    transform: scale(1.05);
}

.product-thumbnails {
    display: flex;
    gap: 0.5rem;
    justify-content: center;
}

.product-thumbnails img {
    width: 80px;
    height: 80px;
    object-fit: cover;
    border-radius: 10px;
    cursor: pointer;
    border: 2px solid transparent;
    transition: all 0.3s ease;
}

.product-thumbnails img:hover {
    border-color: var(--primary-blue);
    transform: translateY(-2px);
}

.product-title {
    font-size: 2.2rem;
    color: var(--deep-navy);
    margin-bottom: 1rem;
    font-weight: 700;
}

.category-badge {
    display: inline-block;
    background: var(--gradient-3);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 25px;
    font-size: 0.9rem;
    font-weight: 600;
    margin-bottom: 1.5rem;
}

.product-description {
    background: linear-gradient(135deg, #f8f9ff 0%, #e8f4fd 100%);
    padding: 1.5rem;
    border-radius: 15px;
    margin-bottom: 2rem;
    border-right: 4px solid var(--primary-blue);
}

.product-features {
    margin-bottom: 2rem;
}

.product-features h3 {
    color: var(--accent-purple);
    margin-bottom: 1rem;
    font-size: 1.3rem;
}

.product-features ul {
    list-style: none;
    padding: 0;
}

.product-features li {
    padding: 0.5rem 0;
    border-bottom: 1px solid rgba(74, 144, 226, 0.1);
    position: relative;
    padding-right: 1.5rem;
}

.product-features li:before {
    content: '✓';
    position: absolute;
    right: 0;
    color: var(--success-green);
    font-weight: bold;
}

.product-actions {
    background: var(--gradient-4);
    padding: 2rem;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 15px 35px rgba(67, 233, 123, 0.2);
}

.price-text {
    font-size: 1.1rem;
    color: var(--deep-navy);
    margin-bottom: 1.5rem;
    font-weight: 600;
}

.contact-buttons {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    justify-content: center;
}

.whatsapp-btn, .call-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.8rem 1.5rem;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
}

.whatsapp-btn {
    background: linear-gradient(135deg, #25D366 0%, #20B954 100%);
    color: white;
}

.whatsapp-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 25px rgba(37, 211, 102, 0.3);
}

.call-btn {
    background: var(--gradient-2);
    color: white;
}

.call-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 25px rgba(240, 147, 251, 0.3);
}

.product-tabs {
    margin-bottom: 3rem;
}

.tab-navigation {
    display: flex;
    gap: 0.5rem;
    margin-bottom: 2rem;
    border-bottom: 2px solid var(--light-gray);
}

.tab-btn {
    background: none;
    border: none;
    padding: 1rem 1.5rem;
    cursor: pointer;
    font-weight: 600;
    color: var(--medium-gray);
    border-radius: 10px 10px 0 0;
    transition: all 0.3s ease;
    position: relative;
}

.tab-btn.active {
    color: var(--primary-blue);
    background: var(--light-gray);
}

.tab-btn:hover {
    background: rgba(74, 144, 226, 0.1);
}

.tab-panel {
    display: none;
    padding: 2rem;
    background: white;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
}

.tab-panel.active {
    display: block;
}

.specs-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1rem;
}

.spec-item {
    display: flex;
    justify-content: space-between;
    padding: 1rem;
    background: linear-gradient(135deg, #f8f9ff 0%, #e8f4fd 100%);
    border-radius: 10px;
    border-right: 3px solid var(--secondary-teal);
}

.spec-label {
    font-weight: 600;
    color: var(--deep-navy);
}

.spec-value {
    color: var(--medium-gray);
}

.related-products h3 {
    text-align: center;
    color: var(--accent-purple);
    margin-bottom: 2rem;
    font-size: 1.8rem;
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
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #25D366 0%, #20B954 100%);
    color: white;
    border-radius: 50%;
    text-decoration: none;
    font-size: 1.5rem;
    box-shadow: 0 8px 25px rgba(37, 211, 102, 0.3);
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.1); }
    100% { transform: scale(1); }
}

/* Responsive Design */
@media (max-width: 768px) {
    .product-content {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .product-title {
        font-size: 1.8rem;
    }
    
    .contact-buttons {
        flex-direction: column;
    }
    
    .tab-navigation {
        overflow-x: auto;
        white-space: nowrap;
    }
    
    .specs-grid {
        grid-template-columns: 1fr;
    }
    
    .floating-contact {
        bottom: 1rem;
        left: 1rem;
    }
}
</style>

<script>
// تابع برای تغییر تصویر اصلی
function changeMainImage(src) {
    document.getElementById('mainProductImage').src = src;
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

// بارگذاری اطلاعات محصول از JavaScript
document.addEventListener('DOMContentLoaded', function() {
    loadProductData();
    loadRelatedProducts();
});

function loadProductData() {
    // اطلاعات محصول از main.js بارگذاری می‌شود
    const productName = "<?php echo get_query_var('product_name'); ?>";
    const categoryName = "<?php echo get_query_var('category_name'); ?>";
    
    // اینجا می‌توانید اطلاعات دقیق‌تر محصول را از پایگاه داده یا فایل JavaScript بارگذاری کنید
}

function loadRelatedProducts() {
    const relatedContainer = document.getElementById('relatedProducts');
    // محصولات مرتبط را اینجا بارگذاری می‌کنیم
}
</script>

<?php get_footer(); ?>