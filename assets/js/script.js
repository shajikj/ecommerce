
        // Slider functionality
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.slide');
            const dots = document.querySelectorAll('.slider-dot');
            let currentSlide = 0;
            
            function showSlide(n) {
                slides.forEach(slide => slide.classList.remove('active'));
                dots.forEach(dot => dot.classList.remove('active'));
                
                currentSlide = (n + slides.length) % slides.length;
                
                slides[currentSlide].classList.add('active');
                dots[currentSlide].classList.add('active');
            }
            
            // Auto slide
            setInterval(() => {
                showSlide(currentSlide + 1);
            }, 5000);
            
            // Dot controls
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    showSlide(index);
                });
            });
            
            // Mobile menu toggle
            const mobileMenu = document.querySelector('.mobile-menu');
            const navLinks = document.querySelector('.nav-links');
            
            mobileMenu.addEventListener('click', () => {
                navLinks.style.display = navLinks.style.display === 'flex' ? 'none' : 'flex';
            });
            
            // Add to cart functionality
            const addToCartButtons = document.querySelectorAll('.add-to-cart');
            const cartCount = document.querySelector('.cart-count');
            let count = 3;
            
            addToCartButtons.forEach(button => {
                button.addEventListener('click', () => {
                    count++;
                    cartCount.textContent = count;
                    
                    // Animation effect
                    button.textContent = 'Added!';
                    button.style.background = 'var(--accent)';
                    
                    setTimeout(() => {
                        button.textContent = 'Add to Cart';
                        button.style.background = 'var(--primary)';
                    }, 1500);
                });
            });
            
            // Wishlist functionality
            const wishlistButtons = document.querySelectorAll('.wishlist');
            
            wishlistButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const icon = button.querySelector('i');
                    
                    if (icon.classList.contains('far')) {
                        icon.classList.remove('far');
                        icon.classList.add('fas');
                        icon.style.color = 'var(--accent)';
                    } else {
                        icon.classList.remove('fas');
                        icon.classList.add('far');
                        icon.style.color = '';
                    }
                });
            });
        });