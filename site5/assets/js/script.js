// Country House interactions - Site 5
document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('header');
    const navLinks = document.querySelectorAll('.nav-link');
    
    // Smooth scroll navigation with natural easing
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                const headerHeight = header.offsetHeight;
                const targetPosition = targetElement.offsetTop - headerHeight - 15;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
                
                // Update active nav link
                navLinks.forEach(nav => nav.classList.remove('active'));
                this.classList.add('active');
            }
        });
    });
    
    // Header scroll effect
    window.addEventListener('scroll', function() {
        if (window.scrollY > 80) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
        
        // Gentle parallax for decorative elements
        const decorativeElements = document.querySelectorAll('.absolute');
        decorativeElements.forEach((element, index) => {
            const speed = 0.3 + (index * 0.1);
            const yPos = -(window.scrollY * speed);
            element.style.transform = `translateY(${yPos}px)`;
        });
        
        updateActiveNavOnScroll();
    });
    
    // Update active nav based on scroll position
    function updateActiveNavOnScroll() {
        const sections = document.querySelectorAll('section[id]');
        const scrollPos = window.scrollY + header.offsetHeight + 100;
        
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
    
    // Country gallery effects with nature theme
    const galleryItems = document.querySelectorAll('.country-gallery-item');
    galleryItems.forEach((item, index) => {
        item.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.08) rotate(3deg)';
            this.style.zIndex = '5';
            
            // Add leaf floating animation
            this.classList.add('leaf-animation');
        });
        
        item.addEventListener('mouseleave', function() {
            this.style.transform = '';
            this.style.zIndex = '';
            this.classList.remove('leaf-animation');
        });
        
        item.addEventListener('click', function() {
            // Natural click animation
            this.style.animation = 'countryFadeIn 0.8s ease-out';
            createNatureParticles(this);
            
            setTimeout(() => {
                this.style.animation = '';
            }, 800);
        });
        
        // Stagger animation on load
        setTimeout(() => {
            item.style.opacity = '1';
            item.style.transform = 'translateY(0)';
        }, index * 120);
    });
    
    // Country features natural hover
    const features = document.querySelectorAll('.country-feature');
    features.forEach(feature => {
        feature.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-12px) scale(1.03)';
            
            // Add gentle glow
            this.style.boxShadow = '0 15px 35px rgba(245, 158, 11, 0.2)';
        });
        
        feature.addEventListener('mouseleave', function() {
            this.style.transform = '';
            this.style.boxShadow = '';
        });
    });
    
    // Country stats hover effects
    const stats = document.querySelectorAll('.country-stat');
    stats.forEach(stat => {
        stat.addEventListener('mouseenter', function() {
            const icon = this.querySelector('i');
            if (icon) {
                icon.style.transform = 'scale(1.2) rotate(10deg)';
                icon.style.color = '#f59e0b';
            }
        });
        
        stat.addEventListener('mouseleave', function() {
            const icon = this.querySelector('i');
            if (icon) {
                icon.style.transform = '';
                icon.style.color = '';
            }
        });
    });
    
    // Country form handling
    const countryForm = document.querySelector('.country-form');
    if (countryForm) {
        countryForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalHTML = submitBtn.innerHTML;
            
            // Natural loading state
            submitBtn.innerHTML = '<i class="fas fa-leaf fa-spin mr-3"></i>Se trimite prin natură...';
            submitBtn.style.background = 'linear-gradient(135deg, #6b7280, #4b5563)';
            
            // Create floating leaves during loading
            createFloatingLeaves();
            
            // Simulate natural processing
            setTimeout(() => {
                submitBtn.innerHTML = '<i class="fas fa-check mr-3"></i>Mesaj trimis prin vânt!';
                submitBtn.style.background = 'linear-gradient(135deg, #10b981, #059669)';
                
                // Create success nature particles
                createSuccessNature(submitBtn);
                
                // Reset form
                this.reset();
                
                // Reset button after 3.5 seconds
                setTimeout(() => {
                    submitBtn.innerHTML = originalHTML;
                    submitBtn.style.background = '';
                }, 3500);
            }, 2200);
        });
        
        // Country input focus effects
        const inputs = countryForm.querySelectorAll('.country-input');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.style.transform = 'translateY(-3px) scale(1.02)';
                this.style.boxShadow = '0 8px 25px rgba(245, 158, 11, 0.2)';
            });
            
            input.addEventListener('blur', function() {
                this.style.transform = '';
                this.style.boxShadow = '';
            });
        });
    }
    
    // Create nature particles
    function createNatureParticles(element) {
        const particles = ['🌿', '🍃', '🌱', '🌾'];
        
        for (let i = 0; i < 8; i++) {
            const particle = document.createElement('div');
            particle.textContent = particles[Math.floor(Math.random() * particles.length)];
            particle.style.cssText = `
                position: absolute;
                font-size: 1.5rem;
                pointer-events: none;
                animation: naturalFloat 2s ease-out forwards;
                z-index: 1000;
            `;
            
            const rect = element.getBoundingClientRect();
            particle.style.left = rect.left + rect.width / 2 + 'px';
            particle.style.top = rect.top + rect.height / 2 + 'px';
            
            document.body.appendChild(particle);
            
            const angle = (i * 45) * Math.PI / 180;
            const distance = 50 + Math.random() * 30;
            const vx = Math.cos(angle) * distance;
            const vy = Math.sin(angle) * distance;
            
            particle.style.setProperty('--vx', vx + 'px');
            particle.style.setProperty('--vy', vy + 'px');
            
            setTimeout(() => {
                particle.remove();
            }, 2000);
        }
    }
    
    // Create floating leaves
    function createFloatingLeaves() {
        const leaves = ['🍂', '🍃', '🌿'];
        
        for (let i = 0; i < 5; i++) {
            const leaf = document.createElement('div');
            leaf.textContent = leaves[Math.floor(Math.random() * leaves.length)];
            leaf.style.cssText = `
                position: fixed;
                top: -50px;
                left: ${Math.random() * 100}%;
                font-size: 1.5rem;
                pointer-events: none;
                animation: leafFall 4s linear forwards;
                z-index: 1000;
            `;
            
            document.body.appendChild(leaf);
            
            setTimeout(() => {
                leaf.remove();
            }, 4000);
        }
    }
    
    // Create success nature effect
    function createSuccessNature(element) {
        const symbols = ['🌸', '🌺', '🌻', '🌷'];
        
        for (let i = 0; i < 10; i++) {
            const flower = document.createElement('div');
            flower.textContent = symbols[Math.floor(Math.random() * symbols.length)];
            flower.style.cssText = `
                position: absolute;
                font-size: 1.2rem;
                pointer-events: none;
                animation: flowerBloom 1.5s ease-out forwards;
                z-index: 1000;
            `;
            
            const rect = element.getBoundingClientRect();
            flower.style.left = rect.left + Math.random() * rect.width + 'px';
            flower.style.top = rect.top + Math.random() * rect.height + 'px';
            
            document.body.appendChild(flower);
            
            setTimeout(() => {
                flower.remove();
            }, 1500);
        }
    }
    
    // Intersection Observer for country animations
    const countryObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    
                    // Add natural entrance animation
                    entry.target.style.animation = 'countryFadeIn 0.8s ease-out';
                }, index * 150);
            }
        });
    }, {
        threshold: 0.15,
        rootMargin: '0px 0px -50px 0px'
    });
    
    // Observe country elements
    const countryElements = document.querySelectorAll('.country-stat, .country-feature, .country-article');
    countryElements.forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(40px)';
        element.style.transition = 'all 0.8s ease';
        countryObserver.observe(element);
    });
    
    // Social icons natural hover
    const socialIcons = document.querySelectorAll('.country-social-icon');
    socialIcons.forEach(icon => {
        icon.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-3px) scale(1.15) rotate(8deg)';
        });
        
        icon.addEventListener('mouseleave', function() {
            this.style.transform = '';
        });
    });
    
    // Add seasonal touches based on current month
    addSeasonalTouches();
});

// Add seasonal touches
function addSeasonalTouches() {
    const month = new Date().getMonth();
    const body = document.body;
    
    if (month >= 2 && month <= 4) { // Spring
        body.style.setProperty('--seasonal-color', '#10b981');
    } else if (month >= 5 && month <= 7) { // Summer
        body.style.setProperty('--seasonal-color', '#f59e0b');
    } else if (month >= 8 && month <= 10) { // Autumn
        body.style.setProperty('--seasonal-color', '#d97706');
    } else { // Winter
        body.style.setProperty('--seasonal-color', '#6b7280');
    }
}

// Add natural animations CSS
const style = document.createElement('style');
style.textContent = `
    @keyframes naturalFloat {
        0% {
            opacity: 1;
            transform: translate(0, 0) scale(1) rotate(0deg);
        }
        100% {
            opacity: 0;
            transform: translate(var(--vx), var(--vy)) scale(0.5) rotate(180deg);
        }
    }
    
    @keyframes leafFall {
        0% {
            transform: translateY(-50px) rotate(0deg);
            opacity: 1;
        }
        100% {
            transform: translateY(100vh) rotate(360deg);
            opacity: 0;
        }
    }
    
    @keyframes flowerBloom {
        0% {
            opacity: 0;
            transform: scale(0) rotate(0deg);
        }
        50% {
            opacity: 1;
            transform: scale(1.2) rotate(180deg);
        }
        100% {
            opacity: 0;
            transform: scale(0.8) rotate(360deg);
        }
    }
`;
document.head.appendChild(style);