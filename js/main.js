// Mobile menu functionality
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });
    }

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
                
                // Close mobile menu if open
                if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                    menuIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            }
        });
    });

    // Contact form handling
    const contactForm = document.getElementById('contact-form');
    const successMessage = document.getElementById('success-message');

    if (contactForm && successMessage) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Here you would typically send the form data to your backend
            // For now, we'll just show the success message
            
            // Hide the form and show success message
            contactForm.style.display = 'none';
            successMessage.classList.remove('hidden');
            
            // Reset form after 3 seconds and show it again
            setTimeout(() => {
                contactForm.style.display = 'block';
                successMessage.classList.add('hidden');
                contactForm.reset();
            }, 3000);
        });
    }

    // Language selector functionality
    const languageSelector = document.getElementById('language-selector');
    if (languageSelector) {
        languageSelector.addEventListener('change', function() {
            // Here you would implement language switching logic
            console.log('Language changed to:', this.value);
            // You can add AJAX calls to load different language content
        });
    }

    // Newsletter subscription
    const newsletterEmail = document.getElementById('newsletter-email');
    if (newsletterEmail) {
        const newsletterButton = newsletterEmail.nextElementSibling;
        if (newsletterButton) {
            newsletterButton.addEventListener('click', function() {
                const email = newsletterEmail.value;
                if (email && isValidEmail(email)) {
                    // Here you would send the email to your backend
                    alert('Merci pour votre inscription à notre newsletter !');
                    newsletterEmail.value = '';
                } else {
                    alert('Veuillez entrer une adresse email valide.');
                }
            });
        }
    }

    // Scroll animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in');
            }
        });
    }, observerOptions);

    // Observe all sections for animations
    document.querySelectorAll('section').forEach(section => {
        observer.observe(section);
    });

    // Add fade-in animation class
    const style = document.createElement('style');
    style.textContent = `
        .animate-fade-in {
            animation: fadeIn 0.6s ease-in-out;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    `;
    document.head.appendChild(style);
});

// Utility function to validate email
function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

// Add loading states for buttons
function addLoadingState(button, originalText) {
    button.disabled = true;
    button.innerHTML = `
       <div class="flex items-center">
    <svg class="animate-spin h-5 w-5 text-black mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
    </svg>
    <span>Chargement...</span>
</div>
    `;
    
    setTimeout(() => {
        button.disabled = false;
        button.innerHTML = originalText;
    }, 2000);
}

// Add click handlers for CTA buttons
document.addEventListener('DOMContentLoaded', function() {
    const ctaButtons = document.querySelectorAll('button:not([type="submit"])');
    ctaButtons.forEach(button => {
        if (button.textContent.includes('Commencer') || button.textContent.includes('Créer mon compte')) {
            button.addEventListener('click', function() {
                const originalText = this.innerHTML;
                addLoadingState(this, originalText);
                
                // Here you would redirect to registration page
                setTimeout(() => {
                    console.log('Redirecting to registration...');
                    // window.location.href = '/register.php';
                }, 2000);
            });
        }
    });
});