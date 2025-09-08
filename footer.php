<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <!-- Company Info -->
            <div class="footer-section">
                <h3>شرکت آرون تارا</h3>
                <p><strong>شرکت سهامی خاص آرون تارا</strong></p>
                <p>شماره ثبت: 17575</p>
                <p>شناسه ملی: 14010013177</p>
                <p>تأسیس: 20/02/1400</p>
                <p>مدیرعامل: خانم سمیه منعمی</p>
            </div>
            
            <!-- Contact Info -->
            <div class="footer-section">
                <h3>اطلاعات تماس</h3>
                <p>📍 کرمان، خیابان امام جمعه، کوچه 18، پلاک 47</p>
                <p>📮 کد پستی: 7619635359</p>
                <p>📞 تلفن: <a href="tel:034-32476351">034-32476351-2</a></p>
                <p>📠 فکس: 034-32473605</p>
                <p>📱 مدیرعامل: <a href="tel:091061268590">091061268590</a></p>
            </div>
            
            <!-- Services -->
            <div class="footer-section">
                <h3>خدمات ما</h3>
                <ul>
                    <li><a href="#products">تجهیزات مکانیکی</a></li>
                    <li><a href="#products">تجهیزات برقی</a></li>
                    <li><a href="#products">ابزار دقیق</a></li>
                    <li><a href="#products">تجهیزات آزمایشگاهی</a></li>
                    <li><a href="#products">مواد شیمیایی</a></li>
                </ul>
            </div>
            
            <!-- Quick Links -->
            <div class="footer-section">
                <h3>دسترسی سریع</h3>
                <ul>
                    <li><a href="#about">درباره ما</a></li>
                    <li><a href="#services">خدمات</a></li>
                    <li><a href="#products">محصولات</a></li>
                    <li><a href="#contact">تماس با ما</a></li>
                </ul>
                
                <!-- Social Media -->
                <div class="social-links">
                    <a href="#" aria-label="اینستاگرام" target="_blank" rel="noopener">📷</a>
                    <a href="#" aria-label="لینکدین" target="_blank" rel="noopener">💼</a>
                    <a href="#" aria-label="تلگرام" target="_blank" rel="noopener">✈️</a>
                    <a href="mailto:info@arontara.com" aria-label="ایمیل">✉️</a>
                </div>
            </div>
        </div>
        
        <!-- Partners Section -->
        <div class="footer-partners">
            <h3>شرکای تجاری ما</h3>
            <div class="partners-list">
                <span>شرکت فولاد زرند ایرانیان</span>
                <span>شرکت فولاد سیرجان ایرانیان</span>
                <span>شرکت ملی صنایع مس ایران</span>
                <span>شرکت سنگ آهن مرکزی ایران</span>
                <span>شرکت معادن زغالسنگ کرمان</span>
                <span>شرکت بابک مس ایرانیان</span>
                <span>شرکت برق منطقه‌ای کرمان</span>
                <span>شرکت سیمان ممتازان</span>
            </div>
        </div>
        
        <!-- Copyright -->
        <div class="copyright">
            <p>&copy; <?php echo date('Y'); ?> شرکت سهامی خاص آرون تارا. تمامی حقوق محفوظ است.</p>
            <p>طراحی و توسعه با ❤️ توسط تیم فنی آرون تارا</p>
        </div>
    </div>
</footer>

<!-- Back to Top Button -->
<button id="backToTop" class="back-to-top" aria-label="بازگشت به بالا">
    ⬆️
</button>

<!-- Contact Modal -->
<div id="contactModal" class="contact-modal">
    <div class="modal-content">
        <div class="modal-header">
            <h3>تماس سریع</h3>
            <button class="modal-close" id="modalClose">&times;</button>
        </div>
        <div class="modal-body">
            <form id="quickContactForm">
                <div class="form-group">
                    <input type="text" name="quick_name" placeholder="نام و نام خانوادگی" required>
                </div>
                <div class="form-group">
                    <input type="tel" name="quick_phone" placeholder="شماره تماس" required>
                </div>
                <div class="form-group">
                    <textarea name="quick_message" placeholder="پیام شما" rows="3" required></textarea>
                </div>
                <button type="submit" class="cta-button">ارسال پیام</button>
            </form>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

<style>
/* Footer Partners */
.footer-partners {
    margin: 3rem 0 2rem;
    padding: 2rem;
    background: rgba(76, 175, 80, 0.1);
    border-radius: 20px;
    border: 1px solid rgba(76, 175, 80, 0.2);
}

.footer-partners h3 {
    text-align: center;
    margin-bottom: 1.5rem;
    color: #4CAF50;
    font-size: 1.5rem;
}

.partners-list {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    justify-content: center;
}

.partners-list span {
    background: rgba(255, 255, 255, 0.1);
    padding: 0.5rem 1rem;
    border-radius: 25px;
    font-size: 0.9rem;
    border: 1px solid rgba(76, 175, 80, 0.3);
    transition: all 0.3s ease;
}

.partners-list span:hover {
    background: rgba(76, 175, 80, 0.2);
    transform: translateY(-2px);
}

/* Footer Sections */
.footer-section ul {
    list-style: none;
    padding: 0;
}

.footer-section ul li {
    margin-bottom: 0.5rem;
}

.footer-section ul li a {
    color: #cccccc;
    text-decoration: none;
    padding: 0.25rem 0;
    display: inline-block;
    transition: all 0.3s ease;
    position: relative;
}

.footer-section ul li a::before {
    content: '◀ ';
    color: #4CAF50;
    opacity: 0;
    transform: translateX(10px);
    transition: all 0.3s ease;
}

.footer-section ul li a:hover::before {
    opacity: 1;
    transform: translateX(0);
}

.footer-section ul li a:hover {
    color: #4CAF50;
    padding-right: 1rem;
}

/* Back to Top Button */
.back-to-top {
    position: fixed;
    bottom: 30px;
    left: 30px;
    width: 50px;
    height: 50px;
    background: linear-gradient(45deg, #4CAF50, #45a049);
    border: none;
    border-radius: 50%;
    color: white;
    font-size: 1.5rem;
    cursor: pointer;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
    z-index: 1000;
    box-shadow: 0 5px 15px rgba(76, 175, 80, 0.4);
}

.back-to-top.visible {
    opacity: 1;
    visibility: visible;
}

.back-to-top:hover {
    transform: translateY(-3px) scale(1.1);
    box-shadow: 0 8px 25px rgba(76, 175, 80, 0.6);
}

/* Contact Modal */
.contact-modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
    backdrop-filter: blur(10px);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 10000;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
}

.contact-modal.active {
    opacity: 1;
    visibility: visible;
}

.modal-content {
    background: linear-gradient(135deg, #2c2c2c, #1a1a1a);
    border-radius: 20px;
    border: 1px solid rgba(76, 175, 80, 0.3);
    min-width: 400px;
    max-width: 90vw;
    max-height: 90vh;
    overflow: hidden;
    transform: scale(0.8) translateY(50px);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.contact-modal.active .modal-content {
    transform: scale(1) translateY(0);
}

.modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1.5rem;
    border-bottom: 1px solid rgba(76, 175, 80, 0.2);
    background: rgba(76, 175, 80, 0.1);
}

.modal-header h3 {
    margin: 0;
    color: #4CAF50;
}

.modal-close {
    background: none;
    border: none;
    color: #4CAF50;
    font-size: 1.5rem;
    cursor: pointer;
    padding: 0.5rem;
    border-radius: 50%;
    transition: all 0.3s ease;
}

.modal-close:hover {
    background: rgba(76, 175, 80, 0.2);
    transform: rotate(90deg);
}

.modal-body {
    padding: 2rem;
}

/* Responsive Footer */
@media (max-width: 768px) {
    .footer-content {
        grid-template-columns: 1fr;
        text-align: center;
    }
    
    .partners-list {
        flex-direction: column;
        align-items: center;
    }
    
    .partners-list span {
        width: 100%;
        text-align: center;
    }
    
    .back-to-top {
        bottom: 20px;
        left: 20px;
        width: 45px;
        height: 45px;
    }
    
    .modal-content {
        min-width: 350px;
        margin: 1rem;
    }
}

/* Footer Animation */
.footer {
    position: relative;
    overflow: hidden;
}

.footer::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, #4CAF50, transparent);
    animation: footerLine 3s linear infinite;
}

@keyframes footerLine {
    0% {
        left: -100%;
    }
    100% {
        left: 100%;
    }
}

/* Loading States */
.footer-section {
    opacity: 0;
    transform: translateY(20px);
    animation: footerFadeIn 0.6s ease forwards;
}

.footer-section:nth-child(1) { animation-delay: 0.1s; }
.footer-section:nth-child(2) { animation-delay: 0.2s; }
.footer-section:nth-child(3) { animation-delay: 0.3s; }
.footer-section:nth-child(4) { animation-delay: 0.4s; }

@keyframes footerFadeIn {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Back to Top Button
    const backToTop = document.getElementById('backToTop');
    
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            backToTop.classList.add('visible');
        } else {
            backToTop.classList.remove('visible');
        }
    });
    
    backToTop.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    
    // Contact Modal
    const contactModal = document.getElementById('contactModal');
    const modalClose = document.getElementById('modalClose');
    const quickContactForm = document.getElementById('quickContactForm');
    
    // Open modal with Ctrl+M or when clicking floating contact button
    document.addEventListener('keydown', function(e) {
        if (e.ctrlKey && e.key === 'm') {
            e.preventDefault();
            contactModal.classList.add('active');
        }
        if (e.key === 'Escape') {
            contactModal.classList.remove('active');
        }
    });
    
    // Close modal
    modalClose.addEventListener('click', function() {
        contactModal.classList.remove('active');
    });
    
    contactModal.addEventListener('click', function(e) {
        if (e.target === contactModal) {
            contactModal.classList.remove('active');
        }
    });
    
    // Quick contact form
    quickContactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        const name = formData.get('quick_name');
        const phone = formData.get('quick_phone');
        const message = formData.get('quick_message');
        
        // Simulate form submission
        const submitBtn = this.querySelector('.cta-button');
        const originalText = submitBtn.textContent;
        
        submitBtn.textContent = 'در حال ارسال...';
        submitBtn.disabled = true;
        
        setTimeout(() => {
            submitBtn.textContent = 'ارسال شد ✓';
            submitBtn.style.background = '#4CAF50';
            
            setTimeout(() => {
                contactModal.classList.remove('active');
                this.reset();
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
                submitBtn.style.background = '';
            }, 2000);
        }, 1500);
    });
    
    // Social media hover effects
    const socialLinks = document.querySelectorAll('.social-links a');
    socialLinks.forEach(link => {
        link.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.2) rotate(10deg)';
        });
        
        link.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1) rotate(0deg)';
        });
    });
    
    // Footer sections animation on scroll
    const footerSections = document.querySelectorAll('.footer-section');
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const footerObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animationPlayState = 'running';
            }
        });
    }, observerOptions);
    
    footerSections.forEach(section => {
        section.style.animationPlayState = 'paused';
        footerObserver.observe(section);
    });
    
    // Partner names animation
    const partnerSpans = document.querySelectorAll('.partners-list span');
    partnerSpans.forEach((span, index) => {
        span.style.animationDelay = `${index * 0.1}s`;
    });
    
    // Add floating contact button
    const floatingContact = document.createElement('button');
    floatingContact.innerHTML = '💬';
    floatingContact.className = 'floating-contact';
    floatingContact.setAttribute('aria-label', 'تماس سریع');
    floatingContact.style.cssText = `
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 60px;
        height: 60px;
        background: linear-gradient(45deg, #4CAF50, #45a049);
        border: none;
        border-radius: 50%;
        color: white;
        font-size: 1.5rem;
        cursor: pointer;
        z-index: 999;
        box-shadow: 0 5px 15px rgba(76, 175, 80, 0.4);
        transition: all 0.3s ease;
        animation: float 3s ease-in-out infinite;
    `;
    
    floatingContact.addEventListener('click', function() {
        contactModal.classList.add('active');
    });
    
    floatingContact.addEventListener('mouseenter', function() {
        this.style.transform = 'scale(1.1)';
        this.style.boxShadow = '0 8px 25px rgba(76, 175, 80, 0.6)';
    });
    
    floatingContact.addEventListener('mouseleave', function() {
        this.style.transform = 'scale(1)';
        this.style.boxShadow = '0 5px 15px rgba(76, 175, 80, 0.4)';
    });
    
    document.body.appendChild(floatingContact);
});
</script>

</body>
</html>