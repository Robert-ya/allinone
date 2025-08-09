// Optimized search enhancement and mobile navigation
document.addEventListener('DOMContentLoaded', function() {
    // Performance optimization: Cache DOM elements
    const elements = {
        searchInput: document.querySelector('.search-input'),
        toolCards: document.querySelectorAll('.tool-card'),
        mobileMenuToggle: document.getElementById('mobileMenuToggle'),
        navMenu: document.getElementById('navMenu')
    };
    
    // Mobile menu toggle functionality
    if (elements.mobileMenuToggle && elements.navMenu) {
        elements.mobileMenuToggle.addEventListener('click', function() {
            this.classList.toggle('active');
            elements.navMenu.classList.toggle('active');
        });
        
        // Close mobile menu when clicking on nav links
        elements.navMenu.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function() {
                elements.mobileMenuToggle.classList.remove('active');
                elements.navMenu.classList.remove('active');
            });
        });
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!elements.mobileMenuToggle.contains(event.target) && !elements.navMenu.contains(event.target)) {
                elements.mobileMenuToggle.classList.remove('active');
                elements.navMenu.classList.remove('active');
            }
        });
    }
    
    // Optimized live search functionality with debouncing
    if (elements.searchInput && elements.toolCards.length > 0) {
        let searchTimeout;
        elements.searchInput.addEventListener('input', function() {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(() => {
                const searchTerm = this.value.toLowerCase();
                
                elements.toolCards.forEach(card => {
                    const name = card.querySelector('.tool-name').textContent.toLowerCase();
                    const description = card.querySelector('.tool-description').textContent.toLowerCase();
                    const category = card.dataset.category.toLowerCase();
                    
                    if (name.includes(searchTerm) || description.includes(searchTerm) || category.includes(searchTerm)) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            }, 150); // Debounce for 150ms
        });
    }
    
    // Handle tool card clicks to open in new tab (optimized with event delegation)
    document.addEventListener('click', function(event) {
        const card = event.target.closest('.tool-card');
        if (card) {
            const url = card.dataset.url;
            const toolName = card.querySelector('.tool-name').textContent;
            if (url) {
                console.log('Tool clicked:', toolName);
                window.open(url, '_blank', 'noopener,noreferrer');
            }
        }
    });
    
    // Smooth scrolling for better mobile experience
    if (window.innerWidth <= 768) {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    }
});