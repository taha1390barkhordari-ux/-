/**
 * Aron Tara 3D Theme JavaScript
 * Enhanced 3D animations and interactions
 */

(function($) {
    'use strict';
    
    // Wait for document ready
    $(document).ready(function() {
        initializeTheme();
    });
    
    function initializeTheme() {
        // Initialize all components
        initSlider3D();
        initScrollAnimations();
        initProductTabs();
        init3DCards();
        initParticleBackground();
        initContactForm();
        initMobileMenu();
        initSmoothScroll();
        initParallaxEffects();
        initTypingAnimation();
    }
    
    // 3D Slider with enhanced effects
    function initSlider3D() {
        let currentSlide = 0;
        const slides = $('.slide');
        const totalSlides = slides.length;
        
        if (totalSlides === 0) return;
        
        function nextSlide() {
            // Current slide out
            slides.eq(currentSlide)
                .removeClass('active')
                .addClass('slide-out');
            
            // Next slide
            currentSlide = (currentSlide + 1) % totalSlides;
            
            // Animate to next slide
            setTimeout(() => {
                slides.removeClass('slide-out');
                slides.eq(currentSlide).addClass('active');
            }, 500);
        }
        
        function prevSlide() {
            slides.eq(currentSlide)
                .removeClass('active')
                .addClass('slide-out-reverse');
            
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            
            setTimeout(() => {
                slides.removeClass('slide-out-reverse');
                slides.eq(currentSlide).addClass('active');
            }, 500);
        }
        
        // Auto slide
        setInterval(nextSlide, 6000);
        
        // Add navigation dots
        const sliderNav = $('<div class="slider-nav"></div>');
        for (let i = 0; i < totalSlides; i++) {
            const dot = $(`<span class="slider-dot ${i === 0 ? 'active' : ''}" data-slide="${i}"></span>`);
            sliderNav.append(dot);
        }
        $('.hero-slider').append(sliderNav);
        
        // Dot navigation
        $(document).on('click', '.slider-dot', function() {
            const targetSlide = $(this).data('slide');
            if (targetSlide !== currentSlide) {
                slides.eq(currentSlide).removeClass('active');
                currentSlide = targetSlide;
                slides.eq(currentSlide).addClass('active');
                
                $('.slider-dot').removeClass('active');
                $(this).addClass('active');
            }
        });
        
        // Touch/swipe support
        let startX = 0;
        let endX = 0;
        
        $('.hero-slider').on('touchstart', function(e) {
            startX = e.touches[0].clientX;
        });
        
        $('.hero-slider').on('touchend', function(e) {
            endX = e.changedTouches[0].clientX;
            const diff = startX - endX;
            
            if (Math.abs(diff) > 50) { // Minimum swipe distance
                if (diff > 0) {
                    nextSlide();
                } else {
                    prevSlide();
                }
            }
        });
    }
    
    // Enhanced scroll animations
    function initScrollAnimations() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                    
                    // Add staggered animation for children
                    const children = entry.target.querySelectorAll('.service-card, .product-card, .info-item');
                    children.forEach((child, index) => {
                        setTimeout(() => {
                            child.style.animationDelay = `${index * 0.1}s`;
                            child.classList.add('animate-in');
                        }, index * 100);
                    });
                }
            });
        }, observerOptions);
        
        // Observe all animated elements
        document.querySelectorAll('.fade-in, .service-card, .product-card').forEach(el => {
            observer.observe(el);
        });
        
        // Counter animation
        animateCounters();
    }
    
    // Product tabs with 3D transitions
    function initProductTabs() {
        const products = {
            mechanical: [
                { name: 'بیرینگ های غلتکی', desc: 'تامین و تعمیر انواع بیرینگ های صنعتی از برندهای معتبر جهان', img: 'images/bearing.jpg', brands: 'FAG, SKF, TIMKEN' },
                { name: 'پمپ های هیدرولیک', desc: 'پمپ های هیدرولیک با کیفیت و قطعات یدکی اورجینال', img: 'images/hydraulic-pump.jpg', brands: 'Rexroth, Parker, HYDAC' },
                { name: 'موتورهای هیدرولیک', desc: 'موتورهای هیدرولیک قدرتمند برای کاربردهای صنعتی', img: 'images/hydraulic-motor.jpg', brands: 'Bosch, Rexroth, DANFOSS' },
                { name: 'فن های صنعتی', desc: 'انواع فن های صنعتی برای تهویه و خنک سازی', img: 'images/industrial-fan.jpg', brands: 'Atlas Copco, Industrial Fans' },
                { name: 'جک های هیدرولیک', desc: 'جک های هیدرولیک با ظرفیت های مختلف', img: 'images/hydraulic-jack.jpg', brands: 'ENERPAC, Parker' },
                { name: 'کوپلینگ های هیدرولیک', desc: 'کوپلینگ ها و اتصالات هیدرولیک مقاوم', img: 'images/coupling.jpg', brands: 'Parker, HYDAC' },
                { name: 'مبدل های حرارتی', desc: 'مبدل های حرارتی تیوب و پلیت با راندمان بالا', img: 'images/heat-exchanger.jpg', brands: 'HAGGLUND, Industrial Heat Exchangers' },
                { name: 'فیلترهای هیدرولیک', desc: 'فیلترهای هیدرولیک برای حفاظت از سیستم', img: 'images/hydraulic-filter.jpg', brands: 'Donaldson, INTERNORMEN, MAHLE' }
            ],
            electrical: [
                { name: 'الکترو موتورها', desc: 'موتورهای الکتریکی سه فاز با کارایی بالا', img: 'images/electric-motor.jpg', brands: 'Siemens, ABB, WEG' },
                { name: 'کنتاکتورها', desc: 'کنتاکتورهای برقی مقاوم و قابل اعتماد', img: 'images/contactor.jpg', brands: 'Siemens, Schneider, LS' },
                { name: 'کارت های الکترونیکی', desc: 'بردهای الکترونیکی و کنترلرهای هوشمند', img: 'images/electronic-board.jpg', brands: 'Siemens, ABB, Custom Boards' },
                { name: 'ویبرومتر', desc: 'دستگاه های اندازه گیری ارتعاش و تشخیص عیب', img: 'images/vibrometer.jpg', brands: 'Meggit, Vibration Specialists' },
                { name: 'سنسورهای صنعتی', desc: 'انواع سنسورهای هوشمند برای اتوماسیون', img: 'images/sensor.jpg', brands: 'Sick, AUTONICS, Honeywell' },
                { name: 'ترانسفورماتور', desc: 'ترانسفورماتورهای قدرت با ولتاژهای مختلف', img: 'images/transformer.jpg', brands: 'ABB, Siemens, Local Manufacturers' },
                { name: 'گیربکس الکتریکی', desc: 'گیربکس های کاهنده دور برای موتورها', img: 'images/gearbox.jpg', brands: 'Flender, VEM, TECO' }
            ],
            instruments: [
                { name: 'حرارت سنج ها', desc: 'ترمومترهای دیجیتال و آنالوگ دقیق', img: 'images/thermometer.jpg', brands: 'Honeywell, WIKA, Fluke' },
                { name: 'فشارسنج ها', desc: 'مانومترهای فشار برای کاربردهای مختلف', img: 'images/pressure-gauge.jpg', brands: 'WIKA, Rosemount, KIMO' },
                { name: 'سطح سنج ها', desc: 'ترانسمیترهای سطح مایعات با دقت بالا', img: 'images/level-meter.jpg', brands: 'Rosemount, WIKA, Honeywell' },
                { name: 'شیرهای کنترلی', desc: 'شیرهای اتوماتیک کنترل فرآیند صنعتی', img: 'images/control-valve.jpg', brands: 'Fisher, Metso, Danfoss' },
                { name: 'پرشر سوئیچ', desc: 'سوئیچ های فشار برای کنترل و حفاظت', img: 'images/pressure-switch.jpg', brands: 'Danfoss, WIKA, GPU' },
                { name: 'لول ترانسمیتر', desc: 'فرستنده های سطح با تکنولوژی پیشرفته', img: 'images/level-transmitter.jpg', brands: 'Rosemount, Honeywell, WIKA' },
                { name: 'رله های حفاظتی', desc: 'رله های کنترل و حفاظت سیستم های برقی', img: 'images/relay.jpg', brands: 'Siemens, ABB, Schneider' }
            ],
            laboratory: [
                { name: 'اسپکتروفتومتر', desc: 'دستگاه طیف سنجی UV-Vis برای آنالیز دقیق', img: 'images/spectrophotometer.jpg', brands: 'Laboratory Equipment' },
                { name: 'کدورت سنج', desc: 'اندازه گیری کدورت آب و محلول های مختلف', img: 'images/turbidity-meter.jpg', brands: 'Water Analysis Equipment' },
                { name: 'BOD متر', desc: 'اندازه گیری اکسیژن خواهی بیولوژیک آب', img: 'images/bod-meter.jpg', brands: 'Environmental Testing' },
                { name: 'راکتور COD', desc: 'دستگاه هضم نمونه برای آنالیز COD', img: 'images/cod-reactor.jpg', brands: 'Water Quality Testing' },
                { name: 'pH متر', desc: 'اندازه گیری دقیق pH و اسیدیته محلول ها', img: 'images/ph-meter.jpg', brands: 'Analytical Instruments' },
                { name: 'EC متر', desc: 'اندازه گیری هدایت الکتریکی محلول ها', img: 'images/ec-meter.jpg', brands: 'Conductivity Meters' },
                { name: 'اکسیژن متر', desc: 'اندازه گیری اکسیژن محلول در آب', img: 'images/oxygen-meter.jpg', brands: 'Dissolved Oxygen Meters' },
                { name: 'TOC آنالایزر', desc: 'تجزیه و تحلیل کربن آلی کل', img: 'images/toc-analyzer.jpg', brands: 'TOC Analysis Equipment' }
            ],
            chemicals: [
                { name: 'فلوکولانت آنیونی', desc: 'پلی الکترولیت آنیونی برای تصفیه آب و فاضلاب', img: 'images/anionic-flocculant.jpg', brands: 'Specialty Chemicals' },
                { name: 'فلوکولانت کاتیونی', desc: 'پلی الکترولیت کاتیونی با بار مثبت', img: 'images/cationic-flocculant.jpg', brands: 'Water Treatment Chemicals' },
                { name: 'پتانسیم امیل اگزانتات (PAX)', desc: 'منعقد کننده قدرتمند برای تصفیه آب', img: 'images/pax.jpg', brands: 'Coagulation Chemicals' },
                { name: 'متیل ایزوبوتیل کربونیل (MIBC)', desc: 'کف کننده برای فرآیند فلوتاسیون معادن', img: 'images/mibc.jpg', brands: 'Mining Chemicals' },
                { name: 'تیتانیوم دی اکسید', desc: 'رنگدانه سفید با پوشش دهی عالی', img: 'images/titanium-dioxide.jpg', brands: 'Pigments & Coatings' },
                { name: 'رنگ ساختمانی', desc: 'رنگ های ساختمانی مقاوم و باکیفیت', img: 'images/building-paint.jpg', brands: 'Architectural Coatings' },
                { name: 'رنگ صنعتی', desc: 'رنگ های ضد خوردگی و مقاوم صنعتی', img: 'images/industrial-paint.jpg', brands: 'Industrial Coatings' },
                { name: 'دایلوئنت', desc: 'حلال های صنعتی با خلوص بالا', img: 'images/diluent.jpg', brands: 'Solvents & Thinners' }
            ]
        };
        
        function showProducts(category) {
            const container = $('#products-container');
            const categoryProducts = products[category] || [];
            
            // Fade out
            container.addClass('fade-out');
            
            setTimeout(() => {
                container.empty();
                
                categoryProducts.forEach((product, index) => {
                    const productCard = $(`
                        <div class="product-card" style="animation-delay: ${index * 0.1}s">
                            <div class="product-image" style="background-image: url('${getImageUrl(product.img)}')">
                                <div class="product-overlay">
                                    <div class="product-brands">${product.brands}</div>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-title">${product.name}</div>
                                <div class="product-description">${product.desc}</div>
                                <div class="product-action">
                                    <button class="product-btn">درخواست قیمت</button>
                                </div>
                            </div>
                        </div>
                    `);
                    container.append(productCard);
                });
                
                container.removeClass('fade-out').addClass('fade-in');
            }, 300);
        }
        
        function getImageUrl(imagePath) {
            // Return a placeholder or default image if actual image doesn't exist
            return `https://via.placeholder.com/300x200/4CAF50/ffffff?text=${encodeURIComponent('محصول')}`;
        }
        
        // Tab switching
        $(document).on('click', '.tab-button', function() {
            const category = $(this).data('category');
            
            $('.tab-button').removeClass('active');
            $(this).addClass('active');
            
            showProducts(category);
        });
        
        // Initialize with first category
        if ($('.products-section').length) {
            showProducts('mechanical');
        }
    }
    
    // 3D Card effects
    function init3DCards() {
        $('.service-card, .product-card').each(function() {
            const card = $(this)[0];
            
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                
                const rotateX = (y - centerY) / 10;
                const rotateY = (centerX - x) / 10;
                
                card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateZ(10px)`;
            });
            
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) translateZ(0)';
            });
        });
    }
    
    // Particle background
    function initParticleBackground() {
        if (!$('.hero-slider').length) return;
        
        const canvas = $('<canvas class="particle-canvas"></canvas>');
        $('.hero-slider').prepend(canvas);
        
        const ctx = canvas[0].getContext('2d');
        let particles = [];
        
        function resizeCanvas() {
            canvas[0].width = window.innerWidth;
            canvas[0].height = window.innerHeight;
        }
        
        resizeCanvas();
        $(window).resize(resizeCanvas);
        
        // Create particles
        for (let i = 0; i < 50; i++) {
            particles.push({
                x: Math.random() * canvas[0].width,
                y: Math.random() * canvas[0].height,
                vx: (Math.random() - 0.5) * 0.5,
                vy: (Math.random() - 0.5) * 0.5,
                radius: Math.random() * 2 + 1,
                alpha: Math.random() * 0.5 + 0.2
            });
        }
        
        function animateParticles() {
            ctx.clearRect(0, 0, canvas[0].width, canvas[0].height);
            
            particles.forEach(particle => {
                particle.x += particle.vx;
                particle.y += particle.vy;
                
                // Wrap around edges
                if (particle.x < 0) particle.x = canvas[0].width;
                if (particle.x > canvas[0].width) particle.x = 0;
                if (particle.y < 0) particle.y = canvas[0].height;
                if (particle.y > canvas[0].height) particle.y = 0;
                
                // Draw particle
                ctx.beginPath();
                ctx.arc(particle.x, particle.y, particle.radius, 0, Math.PI * 2);
                ctx.fillStyle = `rgba(76, 175, 80, ${particle.alpha})`;
                ctx.fill();
            });
            
            // Draw connections
            particles.forEach((particle, i) => {
                particles.slice(i + 1).forEach(otherParticle => {
                    const dx = particle.x - otherParticle.x;
                    const dy = particle.y - otherParticle.y;
                    const distance = Math.sqrt(dx * dx + dy * dy);
                    
                    if (distance < 100) {
                        ctx.beginPath();
                        ctx.moveTo(particle.x, particle.y);
                        ctx.lineTo(otherParticle.x, otherParticle.y);
                        ctx.strokeStyle = `rgba(76, 175, 80, ${0.3 - distance / 300})`;
                        ctx.lineWidth = 1;
                        ctx.stroke();
                    }
                });
            });
            
            requestAnimationFrame(animateParticles);
        }
        
        animateParticles();
    }
    
    // Contact form enhancement
    function initContactForm() {
        $('#contactForm').on('submit', function(e) {
            e.preventDefault();
            
            const form = $(this);
            const submitBtn = form.find('button[type="submit"]');
            const originalText = submitBtn.text();
            
            // Validate form
            let isValid = true;
            form.find('input[required], textarea[required]').each(function() {
                if (!$(this).val().trim()) {
                    isValid = false;
                    $(this).addClass('error');
                } else {
                    $(this).removeClass('error');
                }
            });
            
            if (!isValid) {
                showNotification('لطفاً تمام فیلدهای مورد نیاز را پر کنید', 'error');
                return;
            }
            
            // Disable submit button and show loading
            submitBtn.prop('disabled', true).text('در حال ارسال...');
            
            // Submit form
            $.post(form.attr('action'), form.serialize())
                .done(function(response) {
                    showNotification('پیام شما با موفقیت ارسال شد', 'success');
                    form[0].reset();
                })
                .fail(function() {
                    showNotification('خطا در ارسال پیام. لطفاً دوباره تلاش کنید', 'error');
                })
                .always(function() {
                    submitBtn.prop('disabled', false).text(originalText);
                });
        });
        
        // Add real-time validation
        $('#contactForm input, #contactForm textarea').on('blur', function() {
            if ($(this).attr('required') && !$(this).val().trim()) {
                $(this).addClass('error');
            } else {
                $(this).removeClass('error');
            }
        });
    }
    
    // Mobile menu
    function initMobileMenu() {
        $('.mobile-menu-toggle').on('click', function() {
            $(this).toggleClass('active');
            $('.main-nav').toggleClass('active');
        });
        
        // Close menu when clicking outside
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.glass-header').length) {
                $('.mobile-menu-toggle').removeClass('active');
                $('.main-nav').removeClass('active');
            }
        });
    }
    
    // Smooth scroll
    function initSmoothScroll() {
        $('a[href^="#"]').on('click', function(e) {
            e.preventDefault();
            
            const target = $(this.getAttribute('href'));
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 80
                }, 800, 'easeInOutQuart');
            }
        });
    }
    
    // Parallax effects
    function initParallaxEffects() {
        $(window).on('scroll', function() {
            const scrolled = $(this).scrollTop();
            const rate = scrolled * -0.5;
            
            $('.parallax').css('transform', `translateY(${rate}px)`);
        });
    }
    
    // Typing animation for hero text
    function initTypingAnimation() {
        const texts = [
            'تامین کننده تجهیزات مکانیک',
            'متخصص مواد شیمیایی',
            'ارائه دهنده تجهیزات آزمایشگاهی'
        ];
        
        let textIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        const typeSpeed = 100;
        const deleteSpeed = 50;
        const pauseTime = 1000;
        
        function typeText() {
            const currentText = texts[textIndex];
            const typewriter = $('.typewriter');
            
            if (!typewriter.length) return;
            
            if (isDeleting) {
                typewriter.text(currentText.substring(0, charIndex - 1));
                charIndex--;
                
                if (charIndex === 0) {
                    isDeleting = false;
                    textIndex = (textIndex + 1) % texts.length;
                    setTimeout(typeText, typeSpeed);
                } else {
                    setTimeout(typeText, deleteSpeed);
                }
            } else {
                typewriter.text(currentText.substring(0, charIndex + 1));
                charIndex++;
                
                if (charIndex === currentText.length) {
                    isDeleting = true;
                    setTimeout(typeText, pauseTime);
                } else {
                    setTimeout(typeText, typeSpeed);
                }
            }
        }
        
        if ($('.typewriter').length) {
            typeText();
        }
    }
    
    // Counter animation
    function animateCounters() {
        $('.counter').each(function() {
            const $this = $(this);
            const countTo = $this.attr('data-count');
            
            $({ countNum: $this.text() }).animate({
                countNum: countTo
            }, {
                duration: 2000,
                easing: 'swing',
                step: function() {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                    $this.text(this.countNum);
                }
            });
        });
    }
    
    // Notification system
    function showNotification(message, type = 'info') {
        const notification = $(`
            <div class="notification ${type}">
                <div class="notification-content">
                    <span class="notification-message">${message}</span>
                    <button class="notification-close">&times;</button>
                </div>
            </div>
        `);
        
        $('body').append(notification);
        
        // Show notification
        setTimeout(() => notification.addClass('show'), 100);
        
        // Auto hide after 5 seconds
        setTimeout(() => {
            notification.removeClass('show');
            setTimeout(() => notification.remove(), 300);
        }, 5000);
        
        // Close button
        notification.find('.notification-close').on('click', function() {
            notification.removeClass('show');
            setTimeout(() => notification.remove(), 300);
        });
    }
    
    // Initialize loading screen
    function hideLoadingScreen() {
        setTimeout(() => {
            $('#loading').fadeOut(500);
        }, 1000);
    }
    
    // Custom easing function
    $.easing.easeInOutQuart = function(x, t, b, c, d) {
        if ((t /= d / 2) < 1) return c / 2 * t * t * t * t + b;
        return -c / 2 * ((t -= 2) * t * t * t - 2) + b;
    };
    
    // Performance optimization
    let ticking = false;
    
    function updateScrollEffects() {
        // Update scroll-based animations here
        ticking = false;
    }
    
    function requestTick() {
        if (!ticking) {
            requestAnimationFrame(updateScrollEffects);
            ticking = true;
        }
    }
    
    $(window).on('scroll', requestTick);
    
    // Initialize theme when DOM is ready
    hideLoadingScreen();

})(jQuery);