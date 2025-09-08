<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="pageTitle">محصول - آرون تارا</title>
    <meta name="description" content="مشاهده جزئیات محصول در شرکت آرون تارا">
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <header class="glass-header">
        <div class="container">
            <div class="header-content">
                <div class="logo">آرون تارا</div>
                <nav>
                    <ul class="nav-menu">
                        <li><a href="index.php">خانه</a></li>
                        <li><a href="index.php#about">درباره ما</a></li>
                        <li><a href="index.php#services">خدمات</a></li>
                        <li><a href="index.php#products" class="active">محصولات</a></li>
                        <li><a href="index.php#contact">تماس با ما</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Product Hero -->
    <section class="product-hero">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.php">خانه</a>
                <span>/</span>
                <a href="index.php#products">محصولات</a>
                <span>/</span>
                <span id="breadcrumbCategory">دسته‌بندی</span>
                <span>/</span>
                <span id="breadcrumbProduct">نام محصول</span>
            </div>
            
            <div class="product-header">
                <h1 class="product-title" id="productTitle">نام محصول</h1>
                <div class="product-category" id="productCategory">دسته‌بندی محصول</div>
            </div>
        </div>
    </section>

    <!-- Product Details -->
    <section class="product-details">
        <div class="container">
            <div class="product-content">
                <div class="product-gallery">
                    <div class="main-image">
                        <div class="product-icon">
                            <i id="mainProductIcon" class="fas fa-industry"></i>
                        </div>
                        <div class="image-overlay"></div>
                    </div>
                    
                    <div class="gallery-thumbs">
                        <div class="thumb-image active" onclick="changeIcon('fa-industry')">
                            <i class="fas fa-industry"></i>
                        </div>
                        <div class="thumb-image" onclick="changeIcon('fa-cog')">
                            <i class="fas fa-cog"></i>
                        </div>
                        <div class="thumb-image" onclick="changeIcon('fa-tools')">
                            <i class="fas fa-tools"></i>
                        </div>
                        <div class="thumb-image" onclick="changeIcon('fa-bolt')">
                            <i class="fas fa-bolt"></i>
                        </div>
                    </div>
                </div>

                <div class="product-info">
                    <div class="product-description">
                        <h2>توضیحات محصول</h2>
                        <p id="productDescription">این محصول با کیفیت بالا و مطابق با استانداردهای بین‌المللی تولید شده است.</p>
                    </div>

                    <div class="product-features">
                        <h3>ویژگی‌های محصول</h3>
                        <ul id="productFeatures">
                            <li>کیفیت بالا و مقاوم</li>
                            <li>مطابق با استانداردهای بین‌المللی</li>
                            <li>گارانتی معتبر</li>
                            <li>پشتیبانی فنی</li>
                        </ul>
                    </div>

                    <div class="contact-section">
                        <h3>استعلام قیمت</h3>
                        <div class="contact-buttons">
                            <a href="#" id="whatsappBtn" class="contact-btn phone-btn" target="_blank">
                                <i class="fab fa-whatsapp"></i>
                                پیام در واتساپ
                            </a>
                            <a href="tel:09106168590" class="contact-btn whatsapp-btn">
                                <i class="fas fa-phone"></i>
                                تماس مستقیم
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Specs -->
    <section class="product-specs">
        <div class="container">
            <h2>مشخصات فنی</h2>
            <div class="specs-grid" id="specsGrid">
                <div class="spec-item">
                    <strong>برند:</strong>
                    <span>متنوع (برندهای معتبر)</span>
                </div>
                <div class="spec-item">
                    <strong>گارانتی:</strong>
                    <span>طبق شرایط فروشنده</span>
                </div>
                <div class="spec-item">
                    <strong>وضعیت:</strong>
                    <span>موجود</span>
                </div>
                <div class="spec-item">
                    <strong>کیفیت:</strong>
                    <span>درجه یک</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Applications -->
    <section class="product-applications">
        <div class="container">
            <h2>کاربردها</h2>
            <div class="applications-grid">
                <div class="application-item">
                    <span class="checkmark">✓</span>
                    صنایع پتروشیمی
                </div>
                <div class="application-item">
                    <span class="checkmark">✓</span>
                    صنایع فولاد و آهن
                </div>
                <div class="application-item">
                    <span class="checkmark">✓</span>
                    صنایع برق و الکترونیک
                </div>
                <div class="application-item">
                    <span class="checkmark">✓</span>
                    صنایع آب و فاضلاب
                </div>
                <div class="application-item">
                    <span class="checkmark">✓</span>
                    صنایع معدنی
                </div>
                <div class="application-item">
                    <span class="checkmark">✓</span>
                    صنایع غذایی
                </div>
            </div>
        </div>
    </section>

    <!-- Related Products -->
    <section class="related-products">
        <div class="container">
            <h2>محصولات مرتبط</h2>
            <div class="related-grid" id="relatedGrid">
                <!-- محصولات مرتبط از JavaScript بارگذاری می‌شوند -->
            </div>
        </div>
    </section>

    <!-- Floating Contact -->
    <div class="floating-contact">
        <a href="#" id="floatingWhatsapp" class="contact-btn whatsapp" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

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

    <script>
        // Product data
        const productData = {
            mechanical: {
                'bearing': { name: 'بیرینگ های غلتکی', icon: 'cog' },
                'hydraulic-pump': { name: 'پمپ های هیدرولیک', icon: 'tint' },
                'hydraulic-motor': { name: 'موتورهای هیدرولیک', icon: 'engine' },
                'industrial-fan': { name: 'فن های صنعتی', icon: 'fan' },
                'hydraulic-jack': { name: 'جک های هیدرولیک', icon: 'wrench' },
                'coupling': { name: 'کوپلینگ های هیدرولیک', icon: 'link' },
                'heat-exchanger': { name: 'مبدل های حرارتی', icon: 'fire' },
                'hydraulic-filter': { name: 'فیلترهای هیدرولیک', icon: 'filter' }
            },
            electrical: {
                'electric-motor': { name: 'الکترو موتورها', icon: 'bolt' },
                'contactor': { name: 'کنتاکتورها', icon: 'plug' },
                'electronic-board': { name: 'کارت های الکترونیکی', icon: 'microchip' },
                'vibrometer': { name: 'ویبرومتر', icon: 'wave-square' },
                'sensor': { name: 'سنسورهای صنعتی', icon: 'satellite-dish' },
                'transformer': { name: 'ترانسفورماتور', icon: 'battery-full' },
                'gearbox': { name: 'گیربکس الکتریکی', icon: 'cogs' }
            },
            instruments: {
                'thermometer': { name: 'حرارت سنج ها', icon: 'thermometer-half' },
                'pressure-gauge': { name: 'فشارسنج ها', icon: 'gauge-high' },
                'level-meter': { name: 'سطح سنج ها', icon: 'level-up-alt' },
                'control-valve': { name: 'شیرهای کنترلی', icon: 'valve' },
                'pressure-switch': { name: 'پرشر سوئیچ', icon: 'toggle-on' },
                'level-transmitter': { name: 'لول ترانسمیتر', icon: 'broadcast-tower' },
                'relay': { name: 'رله های حفاظتی', icon: 'shield-alt' }
            },
            laboratory: {
                'spectrophotometer': { name: 'اسپکتروفتومتر', icon: 'search' },
                'turbidity-meter': { name: 'کدورت سنج', icon: 'eye' },
                'bod-meter': { name: 'BOD متر', icon: 'flask' },
                'cod-reactor': { name: 'راکتور COD', icon: 'vial' },
                'ph-meter': { name: 'pH متر', icon: 'balance-scale' },
                'ec-meter': { name: 'EC متر', icon: 'bolt' },
                'oxygen-meter': { name: 'اکسیژن متر', icon: 'lungs' },
                'toc-analyzer': { name: 'TOC آنالایزر', icon: 'atom' }
            },
            chemicals: {
                'anionic-flocculant': { name: 'فلوکولانت آنیونی', icon: 'tint' },
                'cationic-flocculant': { name: 'فلوکولانت کاتیونی', icon: 'fill-drip' },
                'pax': { name: 'پتانسیم امیل اگزانتات (PAX)', icon: 'capsules' },
                'mibc': { name: 'متیل ایزوبوتیل کربونیل (MIBC)', icon: 'spray-can' },
                'titanium-dioxide': { name: 'تیتانیوم دی اکسید', icon: 'palette' },
                'building-paint': { name: 'رنگ ساختمانی', icon: 'paint-brush' },
                'industrial-paint': { name: 'رنگ صنعتی', icon: 'paint-roller' },
                'diluent': { name: 'دایلوئنت', icon: 'fill' }
            }
        };

        // Categories in Persian
        const categoryNames = {
            'mechanical': 'تجهیزات مکانیکی',
            'electrical': 'تجهیزات برقی', 
            'instruments': 'ابزار دقیق',
            'laboratory': 'تجهیزات آزمایشگاهی',
            'chemicals': 'مواد شیمیایی'
        };

        // Load product on page load
        document.addEventListener('DOMContentLoaded', function() {
            loadProduct();
            loadRelatedProducts();
        });

        function getUrlParams() {
            const params = new URLSearchParams(window.location.search);
            return {
                category: params.get('category'),
                product: params.get('product')
            };
        }

        function loadProduct() {
            const params = getUrlParams();
            const category = params.category;
            const productKey = params.product;

            if (!category || !productKey || !productData[category] || !productData[category][productKey]) {
                // Default product if not found
                document.getElementById('productTitle').textContent = 'محصول یافت نشد';
                document.getElementById('breadcrumbCategory').textContent = 'نامشخص';
                document.getElementById('breadcrumbProduct').textContent = 'محصول یافت نشد';
                return;
            }

            const product = productData[category][productKey];
            const categoryName = categoryNames[category];

            // Set page title
            document.getElementById('pageTitle').textContent = `${product.name} - آرون تارا`;
            document.getElementById('productTitle').textContent = product.name;
            document.getElementById('productCategory').textContent = categoryName;
            document.getElementById('breadcrumbCategory').textContent = categoryName;
            document.getElementById('breadcrumbProduct').textContent = product.name;

            // Set main icon
            document.getElementById('mainProductIcon').className = `fas fa-${product.icon}`;

            // Set WhatsApp links
            const whatsappMessage = `سلام، برای استعلام قیمت ${product.name} تماس گرفتم`;
            const whatsappUrl = `https://wa.me/989106168590?text=${encodeURIComponent(whatsappMessage)}`;
            document.getElementById('whatsappBtn').href = whatsappUrl;
            document.getElementById('floatingWhatsapp').href = whatsappUrl;

            // Set product description
            document.getElementById('productDescription').innerHTML = `
                <p>محصول <strong>${product.name}</strong> یکی از محصولات پرکاربرد و با کیفیت شرکت آرون تارا است. با سال‌ها تجربه در زمینه تأمین تجهیزات صنعتی، این محصول را به عنوان یکی از بهترین گزینه‌های موجود در بازار معرفی می‌کنیم.</p>
                <p>این محصول با استفاده از بهترین مواد اولیه و تکنولوژی‌های روز دنیا تولید شده و دارای تمامی استانداردهای بین‌المللی می‌باشد.</p>
            `;
        }

        function changeIcon(iconClass) {
            document.getElementById('mainProductIcon').className = `fas fa-${iconClass}`;
            
            // Update active thumb
            document.querySelectorAll('.thumb-image').forEach(thumb => {
                thumb.classList.remove('active');
            });
            event.target.closest('.thumb-image').classList.add('active');
        }

        function loadRelatedProducts() {
            const params = getUrlParams();
            const currentCategory = params.category;
            
            if (!currentCategory || !productData[currentCategory]) return;
            
            const relatedGrid = document.getElementById('relatedGrid');
            const products = Object.entries(productData[currentCategory]).slice(0, 3);
            
            relatedGrid.innerHTML = products.map(([key, product]) => `
                <div class="related-product-card">
                    <div class="related-image">
                        <i class="fas fa-${product.icon}"></i>
                    </div>
                    <div class="related-info">
                        <h4>${product.name}</h4>
                        <p>محصول با کیفیت و مقاوم برای استفاده‌های صنعتی</p>
                        <a href="single-product.php?category=${currentCategory}&product=${key}" class="related-btn">
                            مشاهده جزئیات
                        </a>
                    </div>
                </div>
            `).join('');
        }
    </script>
</body>
</html>