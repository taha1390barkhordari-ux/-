/**
 * Aron Tara Modern Theme JavaScript
 * Enhanced with modern interactions and animations
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all components
    initializeSlider();
    initializeProducts();
    initializeScrollAnimations();
    initializeSmoothScrolling();
    initializeHeader();
    initializeParticles();
    initializeCounters();
    initializeContactForm();
    
    // Hide loading animation
    setTimeout(() => {
        const loading = document.getElementById('loading');
        if (loading) {
            loading.style.opacity = '0';
            setTimeout(() => {
                loading.style.display = 'none';
            }, 500);
        }
    }, 1000);
});

// Modern Hero Slider with enhanced animations
function initializeSlider() {
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.slider-dot');
    
    if (!slides.length) return;
    
    function showSlide(index) {
        // Remove active class from all slides and dots
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));
        
        // Add active class to current slide and dot
        slides[index].classList.add('active');
        if (dots[index]) dots[index].classList.add('active');
    }
    
    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }
    
    function prevSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
    }
    
    // Auto advance slides
    let slideInterval = setInterval(nextSlide, 6000);
    
    // Dot navigation
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentSlide = index;
            showSlide(currentSlide);
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, 2500);
        });
    });
    
    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowRight') nextSlide();
        if (e.key === 'ArrowLeft') prevSlide();
    });
    
    // Pause on hover
    const sliderContainer = document.querySelector('.hero-slider');
    if (sliderContainer) {
        sliderContainer.addEventListener('mouseenter', () => clearInterval(slideInterval));
        sliderContainer.addEventListener('mouseleave', () => {
            slideInterval = setInterval(nextSlide, 6000);
        });
    }
}

// Enhanced Products System with better transitions
function initializeProducts() {
    const products = {
        mechanical: [
            { name: 'بیرینگ های غلتکی', desc: 'تامین و تعمیر انواع بیرینگ های صنعتی', img: getThemeUrl() + '/images/bearing.jpg', link: getHomeUrl() + '/product/mechanical/bearing/' },
            { name: 'پمپ های هیدرولیک', desc: 'پمپ های هیدرولیک و لوازم یدکی', img: getThemeUrl() + '/images/hydraulic-pump.jpg', link: getHomeUrl() + '/product/mechanical/hydraulic-pump/' },
            { name: 'موتورهای هیدرولیک', desc: 'موتورهای هیدرولیک و قطعات جانبی', img: getThemeUrl() + '/images/hydraulic-motor.jpg', link: getHomeUrl() + '/product/mechanical/hydraulic-motor/' },
            { name: 'فن های صنعتی', desc: 'انواع فن های صنعتی و تهویه', img: getThemeUrl() + '/images/industrial-fan.jpg', link: getHomeUrl() + '/product/mechanical/industrial-fan/' },
            { name: 'جک های هیدرولیک', desc: 'جک های هیدرولیک و لوازم یدکی', img: getThemeUrl() + '/images/hydraulic-jack.jpg', link: getHomeUrl() + '/product/mechanical/hydraulic-jack/' },
            { name: 'کوپلینگ های هیدرولیک', desc: 'کوپلینگ ها و اتصالات هیدرولیک', img: getThemeUrl() + '/images/coupling.jpg', link: getHomeUrl() + '/product/mechanical/coupling/' },
            { name: 'مبدل های حرارتی', desc: 'مبدل های حرارتی تیوب و پلیت', img: getThemeUrl() + '/images/heat-exchanger.jpg', link: getHomeUrl() + '/product/mechanical/heat-exchanger/' },
            { name: 'فیلترهای هیدرولیک', desc: 'فیلترهای صنعتی و تعویضی', img: getThemeUrl() + '/images/hydraulic-filter.jpg', link: getHomeUrl() + '/product/mechanical/hydraulic-filter/' }
        ],
        electrical: [
            { name: 'الکترو موتورها', desc: 'موتورهای الکتریکی سه فاز', img: getThemeUrl() + '/images/electric-motor.jpg', link: getHomeUrl() + '/product/electrical/electric-motor/' },
            { name: 'کنتاکتورها', desc: 'کنتاکتورهای برقی صنعتی', img: getThemeUrl() + '/images/contactor.jpg', link: getHomeUrl() + '/product/electrical/contactor/' },
            { name: 'کارت های الکترونیکی', desc: 'بردهای الکترونیکی صنعتی', img: getThemeUrl() + '/images/electronic-board.jpg', link: getHomeUrl() + '/product/electrical/electronic-board/' },
            { name: 'ویبرومتر', desc: 'دستگاه های اندازه گیری ارتعاش', img: getThemeUrl() + '/images/vibrometer.jpg', link: getHomeUrl() + '/product/electrical/vibrometer/' },
            { name: 'سنسورهای صنعتی', desc: 'انواع سنسورهای اتوماسیون', img: getThemeUrl() + '/images/sensor.jpg', link: getHomeUrl() + '/product/electrical/sensor/' },
            { name: 'ترانسفورماتور', desc: 'ترانسفورماتورهای قدرت', img: getThemeUrl() + '/images/transformer.jpg', link: getHomeUrl() + '/product/electrical/transformer/' },
            { name: 'گیربکس الکتریکی', desc: 'گیربکس های کاهنده دور', img: getThemeUrl() + '/images/gearbox.jpg', link: getHomeUrl() + '/product/electrical/gearbox/' }
        ],
        instruments: [
            { name: 'حرارت سنج ها', desc: 'ترمومترهای صنعتی دیجیتال', img: getThemeUrl() + '/images/thermometer.jpg', link: getHomeUrl() + '/product/instruments/thermometer/' },
            { name: 'فشارسنج ها', desc: 'مانومترهای دقیق صنعتی', img: getThemeUrl() + '/images/pressure-gauge.jpg', link: getHomeUrl() + '/product/instruments/pressure-gauge/' },
            { name: 'سطح سنج ها', desc: 'ترانسمیترهای سطح مایعات', img: getThemeUrl() + '/images/level-meter.jpg', link: getHomeUrl() + '/product/instruments/level-meter/' },
            { name: 'شیرهای کنترلی', desc: 'شیرهای اتوماتیک کنترل فرآیند', img: getThemeUrl() + '/images/control-valve.jpg', link: getHomeUrl() + '/product/instruments/control-valve/' },
            { name: 'پرشر سوئیچ', desc: 'سوئیچ های فشار صنعتی', img: getThemeUrl() + '/images/pressure-switch.jpg', link: getHomeUrl() + '/product/instruments/pressure-switch/' },
            { name: 'لول ترانسمیتر', desc: 'فرستنده های سطح مایع', img: getThemeUrl() + '/images/level-transmitter.jpg', link: getHomeUrl() + '/product/instruments/level-transmitter/' },
            { name: 'رله های حفاظتی', desc: 'رله های کنترل و حفاظت', img: getThemeUrl() + '/images/relay.jpg', link: getHomeUrl() + '/product/instruments/relay/' }
        ],
        laboratory: [
            { name: 'اسپکتروفتومتر', desc: 'دستگاه طیف سنجی UV-Vis', img: getThemeUrl() + '/images/spectrophotometer.jpg', link: getHomeUrl() + '/product/laboratory/spectrophotometer/' },
            { name: 'کدورت سنج', desc: 'اندازه گیری کدورت آب', img: getThemeUrl() + '/images/turbidity-meter.jpg', link: getHomeUrl() + '/product/laboratory/turbidity-meter/' },
            { name: 'BOD متر', desc: 'اندازه گیری اکسیژن خواهی بیولوژیک', img: getThemeUrl() + '/images/bod-meter.jpg', link: getHomeUrl() + '/product/laboratory/bod-meter/' },
            { name: 'راکتور COD', desc: 'دستگاه هضم COD', img: getThemeUrl() + '/images/cod-reactor.jpg', link: getHomeUrl() + '/product/laboratory/cod-reactor/' },
            { name: 'pH متر', desc: 'اندازه گیری pH و اسیدیته', img: getThemeUrl() + '/images/ph-meter.jpg', link: getHomeUrl() + '/product/laboratory/ph-meter/' },
            { name: 'EC متر', desc: 'اندازه گیری هدایت الکتریکی', img: getThemeUrl() + '/images/ec-meter.jpg', link: getHomeUrl() + '/product/laboratory/ec-meter/' },
            { name: 'اکسیژن متر', desc: 'اندازه گیری اکسیژن محلول', img: getThemeUrl() + '/images/oxygen-meter.jpg', link: getHomeUrl() + '/product/laboratory/oxygen-meter/' },
            { name: 'TOC آنالایزر', desc: 'اندازه گیری کربن آلی کل', img: getThemeUrl() + '/images/toc-analyzer.jpg', link: getHomeUrl() + '/product/laboratory/toc-analyzer/' }
        ],
        chemicals: [
            { name: 'فلوکولانت آنیونی', desc: 'پلی الکترولیت برای تصفیه آب', img: getThemeUrl() + '/images/anionic-flocculant.jpg', link: getHomeUrl() + '/product/chemicals/anionic-flocculant/' },
            { name: 'فلوکولانت کاتیونی', desc: 'پلی الکترولیت مثبت الشحنه', img: getThemeUrl() + '/images/cationic-flocculant.jpg', link: getHomeUrl() + '/product/chemicals/cationic-flocculant/' },
            { name: 'پتانسیم امیل اگزانتات (PAX)', desc: 'منعقد کننده آب', img: getThemeUrl() + '/images/pax.jpg', link: getHomeUrl() + '/product/chemicals/pax/' },
            { name: 'متیل ایزوبوتیل کربونیل (MIBC)', desc: 'کف کننده فرآیند فلوتاسیون', img: getThemeUrl() + '/images/mibc.jpg', link: getHomeUrl() + '/product/chemicals/mibc/' },
            { name: 'تیتانیوم دی اکسید', desc: 'رنگدانه سفید صنعتی', img: getThemeUrl() + '/images/titanium-dioxide.jpg', link: getHomeUrl() + '/product/chemicals/titanium-dioxide/' },
            { name: 'رنگ ساختمانی', desc: 'رنگ های ساختمانی با کیفیت', img: getThemeUrl() + '/images/building-paint.jpg', link: getHomeUrl() + '/product/chemicals/building-paint/' },
            { name: 'رنگ صنعتی', desc: 'رنگ های مقاوم صنعتی', img: getThemeUrl() + '/images/industrial-paint.jpg', link: getHomeUrl() + '/product/chemicals/industrial-paint/' },
            { name: 'دایلوئنت', desc: 'حلال های صنعتی', img: getThemeUrl() + '/images/diluent.jpg', link: getHomeUrl() + '/product/chemicals/diluent/' }
        ]
    };
    
    const tabButtons = document.querySelectorAll('.tab-button');
    const productsContainer = document.getElementById('products-container');
    
    if (!productsContainer) return;

    function showProducts(category) {
        const categoryProducts = products[category];
        if (!categoryProducts) return;
        
        // Add fade out effect
        productsContainer.classList.add('fade-out');
        
        setTimeout(() => {
            productsContainer.innerHTML = '';
            
            categoryProducts.forEach((product, index) => {
                const productCard = document.createElement('div');
                productCard.className = 'product-card';
                productCard.style.animationDelay = `${index * 0.1}s`;
                
                productCard.innerHTML = `
                    <div class="product-image">
                        <i class="fas fa-${getProductIcon(product.name)}" style="font-size: 4rem; color: var(--primary-blue); display: flex; align-items: center; justify-content: center; height: 100%;"></i>
                    </div>
                    <div class="product-info">
                        <div class="product-title">${product.name}</div>
                        <div class="product-description">${product.desc}</div>
                        <a href="${product.link}" class="product-btn">مشاهده جزئیات</a>
                    </div>
                `;
                
                productsContainer.appendChild(productCard);
            });
            
            // Remove fade out and add fade in
            productsContainer.classList.remove('fade-out');
            productsContainer.classList.add('fade-in');
            
            setTimeout(() => {
                productsContainer.classList.remove('fade-in');
            }, 300);
        }, 150);
    }
    
    // Tab button functionality
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

// Enhanced Scroll Animations
function initializeScrollAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                
                // Trigger counter animation if element has counter
                if (entry.target.querySelector('.counter')) {
                    animateCounters(entry.target);
                }
            }
        });
    }, observerOptions);
    
    // Observe all fade-in elements
    document.querySelectorAll('.fade-in').forEach(el => {
        observer.observe(el);
    });
    
    // Stagger animations for grid items
    document.querySelectorAll('.services-grid .service-card, .products-grid .product-card').forEach((card, index) => {
        card.style.animationDelay = `${index * 0.1}s`;
    });
}

// Modern Smooth Scrolling with easing
function initializeSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            
            if (target) {
                const headerHeight = document.querySelector('.glass-header').offsetHeight;
                const targetPosition = target.offsetTop - headerHeight - 20;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
                
                // Add highlighting effect
                target.style.boxShadow = '0 0 20px rgba(99, 102, 241, 0.3)';
                setTimeout(() => {
                    target.style.boxShadow = '';
                }, 2000);
            }
        });
    });
}

// Dynamic Header with scroll effects
function initializeHeader() {
    const header = document.querySelector('.glass-header');
    if (!header) return;
    
    let lastScrollY = window.scrollY;
    let ticking = false;
    
    function updateHeader() {
        const scrollY = window.scrollY;
        
        if (scrollY > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
        
        // Hide/show header based on scroll direction
        if (scrollY > lastScrollY && scrollY > 500) {
            header.style.transform = 'translateY(-100%)';
        } else {
            header.style.transform = 'translateY(0)';
        }
        
        lastScrollY = scrollY;
        ticking = false;
    }
    
    function requestTick() {
        if (!ticking) {
            requestAnimationFrame(updateHeader);
            ticking = true;
        }
    }
    
    window.addEventListener('scroll', requestTick);
}

// Particle Background Effect
function initializeParticles() {
    const hero = document.querySelector('.hero-slider');
    if (!hero) return;
    
    const canvas = document.createElement('canvas');
    canvas.className = 'particle-canvas';
    hero.appendChild(canvas);
    
    const ctx = canvas.getContext('2d');
    
    function resizeCanvas() {
        canvas.width = hero.offsetWidth;
        canvas.height = hero.offsetHeight;
    }
    
    resizeCanvas();
    window.addEventListener('resize', resizeCanvas);
    
    const particles = [];
    const particleCount = 50;
    
    class Particle {
        constructor() {
            this.x = Math.random() * canvas.width;
            this.y = Math.random() * canvas.height;
            this.vx = (Math.random() - 0.5) * 0.5;
            this.vy = (Math.random() - 0.5) * 0.5;
            this.size = Math.random() * 2 + 1;
            this.opacity = Math.random() * 0.5 + 0.2;
        }
        
        update() {
            this.x += this.vx;
            this.y += this.vy;
            
            if (this.x < 0 || this.x > canvas.width) this.vx *= -1;
            if (this.y < 0 || this.y > canvas.height) this.vy *= -1;
        }
        
        draw() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fillStyle = `rgba(99, 102, 241, ${this.opacity})`;
            ctx.fill();
        }
    }
    
    // Create particles
    for (let i = 0; i < particleCount; i++) {
        particles.push(new Particle());
    }
    
    function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        
        particles.forEach(particle => {
            particle.update();
            particle.draw();
        });
        
        // Draw connections between nearby particles
        for (let i = 0; i < particles.length; i++) {
            for (let j = i + 1; j < particles.length; j++) {
                const dx = particles[i].x - particles[j].x;
                const dy = particles[i].y - particles[j].y;
                const distance = Math.sqrt(dx * dx + dy * dy);
                
                if (distance < 100) {
                    ctx.beginPath();
                    ctx.moveTo(particles[i].x, particles[i].y);
                    ctx.lineTo(particles[j].x, particles[j].y);
                    ctx.strokeStyle = `rgba(139, 92, 246, ${0.2 - distance / 500})`;
                    ctx.lineWidth = 1;
                    ctx.stroke();
                }
            }
        }
        
        requestAnimationFrame(animate);
    }
    
    animate();
}

// Animated Counter
function initializeCounters() {
    window.animateCounters = function(container) {
        const counters = container.querySelectorAll('.counter');
        
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target'));
            const duration = 2000; // 2 seconds
            const increment = target / (duration / 16); // 60fps
            let current = 0;
            
            const updateCounter = () => {
                current += increment;
                if (current < target) {
                    counter.textContent = Math.floor(current);
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target;
                }
            };
            
            updateCounter();
        });
    };
}

// Enhanced Contact Form
function initializeContactForm() {
    const form = document.getElementById('contactForm');
    if (!form) return;
    
    // Add loading state to form
    form.addEventListener('submit', function(e) {
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn.textContent;
        
        submitBtn.textContent = 'در حال ارسال...';
        submitBtn.disabled = true;
        
        // Reset after 3 seconds if no response
        setTimeout(() => {
            submitBtn.textContent = originalText;
            submitBtn.disabled = false;
        }, 3000);
    });
    
    // Add real-time validation
    const inputs = form.querySelectorAll('input, textarea');
    inputs.forEach(input => {
        input.addEventListener('blur', validateInput);
        input.addEventListener('input', clearError);
    });
    
    function validateInput(e) {
        const input = e.target;
        const value = input.value.trim();
        
        // Remove existing error state
        input.classList.remove('error');
        
        // Validate based on input type
        if (input.hasAttribute('required') && !value) {
            showInputError(input, 'این فیلد الزامی است');
        } else if (input.type === 'email' && value && !isValidEmail(value)) {
            showInputError(input, 'فرمت ایمیل صحیح نیست');
        }
    }
    
    function clearError(e) {
        e.target.classList.remove('error');
    }
    
    function showInputError(input, message) {
        input.classList.add('error');
        showNotification(message, 'error');
    }
    
    function isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }
}

// Notification System
function showNotification(message, type = 'success') {
    const notification = document.createElement('div');
    notification.className = `notification ${type}`;
    
    notification.innerHTML = `
        <div class="notification-content">
            <span class="notification-message">${message}</span>
            <button class="notification-close">&times;</button>
        </div>
    `;
    
    document.body.appendChild(notification);
    
    // Show notification
    setTimeout(() => notification.classList.add('show'), 100);
    
    // Auto hide after 5 seconds
    const autoHide = setTimeout(() => hideNotification(notification), 5000);
    
    // Close button functionality
    notification.querySelector('.notification-close').addEventListener('click', () => {
        clearTimeout(autoHide);
        hideNotification(notification);
    });
    
    function hideNotification(notif) {
        notif.classList.remove('show');
        setTimeout(() => notif.remove(), 300);
    }
}

// Utility functions
function getThemeUrl() {
    // This would be replaced with actual theme URL in WordPress
    return window.themeUrl || '';
}

function getHomeUrl() {
    // This would be replaced with actual home URL in WordPress
    return window.homeUrl || '';
}

// Export for WordPress integration
if (typeof window !== 'undefined') {
    window.AronTaraTheme = {
        initializeSlider,
        initializeProducts,
        showNotification
    };
}