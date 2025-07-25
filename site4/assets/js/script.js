// Luxury Apartment interactions - Site 4
document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('header');
    const navLinks = document.querySelectorAll('.nav-link');
    
    // Smooth scroll navigation with luxury easing
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                const headerHeight = header.offsetHeight;
                const targetPosition = targetElement.offsetTop - headerHeight - 20;
                
                // Smooth scroll with custom easing
                smoothScrollTo(targetPosition, 1000);
                
                // Update active nav link
                navLinks.forEach(nav => nav.classList.remove('active'));
                this.classList.add('active');
            }
        });
    });
    
    // Custom smooth scroll function
    function smoothScrollTo(endY, duration) {
        const startY = window.scrollY;
        const distanceY = endY - startY;
        const startTime = new Date().getTime();
        
        const easeInOutQuart = (time, from, distance, duration) => {
            if ((time /= duration / 2) < 1) return distance / 2 * time * time * time * time + from;
            return -distance / 2 * ((time -= 2) * time * time * time - 2) + from;
        };
        
        const timer = setInterval(() => {
            const time = new Date().getTime() - startTime;
            const newY = easeInOutQuart(time, startY, distanceY, duration);
            if (time >= duration) {
                clearInterval(timer);
            }
            window.scroll(0, newY);
        }, 1000 / 60);
    }
    
    // Header scroll effect with luxury transition
    window.addEventListener('scroll', function() {
        if (window.scrollY > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
        
        // Parallax effect for hero section
        const hero = document.getElementById('home');
        if (hero) {
            const scrolled = window.pageYOffset;
            const parallax = scrolled * 0.5;
            hero.style.transform = `translateY(${parallax}px)`;
        }
        
        updateActiveNavOnScroll();
    });
    
    // Update active nav based on scroll position
    function updateActiveNavOnScroll() {
        const sections = document.querySelectorAll('section[id]');
        const scrollPos = window.scrollY + header.offsetHeight + 200;
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute('id');
            
            if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${sectionId}`) {
                        link.classList.add('active');
                    }
                });
            }
        });
    }
    
    // Luxury gallery effects
    const galleryItems = document.querySelectorAll('.luxury-gallery-item');
    galleryItems.forEach((item, index) => {
        item.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.08) rotate(2deg)';
            this.style.zIndex = '10';
        });
        
        item.addEventListener('mouseleave', function() {
            this.style.transform = '';
            this.style.zIndex = '';
        });
        
        item.addEventListener('click', function() {
            // Luxury click animation
            this.style.animation = 'luxuryFadeIn 0.8s ease-out';
            setTimeout(() => {
                this.style.animation = '';
            }, 800);
        });
        
        // Stagger animation on load
        setTimeout(() => {
            item.style.opacity = '1';
            item.style.transform = 'translateY(0)';
        }, index * 150);
    });
    
    // Luxury features hover effect
    const features = document.querySelectorAll('.luxury-feature');
    features.forEach(feature => {
        feature.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-15px) scale(1.05)';
            this.classList.add('luxury-shimmer');
        });
        
        feature.addEventListener('mouseleave', function() {
            this.style.transform = '';
            this.classList.remove('luxury-shimmer');
        });
    });
    
    // Luxury form handling
    const luxuryForm = document.querySelector('.luxury-form');
    if (luxuryForm) {
        luxuryForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalHTML = submitBtn.innerHTML;
            
            // Luxury loading state
            submitBtn.innerHTML = '<i class="fas fa-gem fa-spin mr-3"></i>Se procesează...';
            submitBtn.style.background = 'linear-gradient(135deg, #6b7280, #4b5563)';
            
            // Simulate luxury processing
            setTimeout(() => {
                submitBtn.innerHTML = '<i class="fas fa-crown mr-3"></i>Cerere Trimisă Premium!';
                submitBtn.style.background = 'linear-gradient(135deg, #10b981, #059669)';
                
                // Create success particles
                createSuccessParticles(submitBtn);
                
                // Reset form
                this.reset();
                
                // Reset button after 4 seconds
                setTimeout(() => {
                    submitBtn.innerHTML = originalHTML;
                    submitBtn.style.background = '';
                }, 4000);
            }, 2500);
        });
        
        // Luxury input focus effects
        const inputs = luxuryForm.querySelectorAll('.luxury-input');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.style.transform = 'translateY(-3px) scale(1.02)';
                this.style.boxShadow = '0 10px 30px rgba(245, 158, 11, 0.2)';
            });
            
            input.addEventListener('blur', function() {
                this.style.transform = '';
                this.style.boxShadow = '';
            });
        });
    }
    
    // Create success particles
    function createSuccessParticles(element) {
        for (let i = 0; i < 12; i++) {
            const particle = document.createElement('div');
            particle.style.cssText = `
                position: absolute;
                width: 8px;
                height: 8px;
                background: linear-gradient(45deg, #f59e0b, #d97706);
                border-radius: 50%;
                pointer-events: none;
                animation: particleAnimation 1s ease-out forwards;
            `;
            
            const rect = element.getBoundingClientRect();
            particle.style.left = rect.left + rect.width / 2 + 'px';
            particle.style.top = rect.top + rect.height / 2 + 'px';
            
            document.body.appendChild(particle);
            
            const angle = (i * 30) * Math.PI / 180;
            const velocity = 50 + Math.random() * 30;
            const vx = Math.cos(angle) * velocity;
            const vy = Math.sin(angle) * velocity;
            
            particle.style.setProperty('--vx', vx + 'px');
            particle.style.setProperty('--vy', vy + 'px');
            
            setTimeout(() => {
                particle.remove();
            }, 1000);
        }
    }
    
    // Intersection Observer for luxury animations
    const luxuryObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    entry.target.classList.add('luxury-shimmer');
                    
                    setTimeout(() => {
                        entry.target.classList.remove('luxury-shimmer');
                    }, 1000);
                }, index * 200);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    });
    
    // Observe luxury elements
    const luxuryElements = document.querySelectorAll('.luxury-stat, .luxury-feature, .luxury-article');
    luxuryElements.forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(50px)';
        element.style.transition = 'all 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275)';
        luxuryObserver.observe(element);
    });
    
    // Social icons luxury hover
    const socialIcons = document.querySelectorAll('.luxury-social-icon');
    socialIcons.forEach(icon => {
        icon.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px) scale(1.2) rotate(5deg)';
        });
        
        icon.addEventListener('mouseleave', function() {
            this.style.transform = '';
        });
    });
});

// Add particle animation CSS
const style = document.createElement('style');
style.textContent = `
    @keyframes particleAnimation {
        0% {
            opacity: 1;
            transform: translate(0, 0) scale(1);
        }
        100% {
            opacity: 0;
            transform: translate(var(--vx), var(--vy)) scale(0);
        }
    }
`;
document.head.appendChild(style);