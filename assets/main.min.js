// Simplified and more reliable function for opening tools
function openTool(url, toolId) {
    console.log('Opening tool with URL:', url);
    
    // Method 1: Direct window.open - most reliable
    try {
        const newWindow = window.open(url, '_blank', 'noopener,noreferrer');
        if (newWindow) {
            console.log('Tool opened successfully via window.open');
            return true;
        }
    } catch (e) {
        console.warn('window.open failed:', e);
    }
    
    // Method 2: Create temporary link and click it
    try {
        const link = document.createElement('a');
        link.href = url;
        link.target = '_blank';
        link.rel = 'noopener noreferrer';
        
        // Add to DOM temporarily for better compatibility
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
        
        console.log('Tool opened via link click');
        return true;
    } catch (e) {
        console.warn('Link click failed:', e);
    }
    
    // Method 3: Fallback - copy URL to clipboard and show message
    try {
        if (navigator.clipboard) {
            navigator.clipboard.writeText(url).then(() => {
                alert('URL copied to clipboard: ' + url + '\n\nPlease paste it in a new tab.');
            }).catch(() => {
                alert('Please manually open: ' + url);
            });
        } else {
            alert('Please manually open: ' + url);
        }
        console.log('Tool URL provided as fallback');
        return false;
    } catch (e) {
        console.error('All methods failed:', e);
        alert('Please manually open: ' + url);
        return false;
    }
}

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
        console.log('Mobile menu elements found, attaching event listeners');
        
        elements.mobileMenuToggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            console.log('Mobile menu toggle clicked');
            const isActive = elements.navMenu.classList.contains('active');
            console.log('Menu was active:', isActive, 'Making it:', !isActive);
            
            if (isActive) {
                this.classList.remove('active');
                elements.navMenu.classList.remove('active');
            } else {
                this.classList.add('active');
                elements.navMenu.classList.add('active');
            }
            console.log('Menu classes after toggle:', elements.navMenu.className);
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
            if (!elements.mobileMenuToggle.contains(event.target) && 
                !elements.navMenu.contains(event.target)) {
                elements.mobileMenuToggle.classList.remove('active');
                elements.navMenu.classList.remove('active');
            }
        });
    } else {
        console.log('Mobile menu elements not found:', {
            toggle: !!elements.mobileMenuToggle,
            menu: !!elements.navMenu
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
            const toolId = card.dataset.toolId;
            
            if (url) {
                console.log('Tool clicked:', toolName);
                
                // Use the enhanced openTool function
                openTool(url, toolId);
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