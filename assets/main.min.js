// Enhanced function for cPanel hosting compatibility
function openTool(url, toolId) {
    console.log('Opening tool with URL:', url);
    
    // Method 1: Try window.open with immediate fallback check
    try {
        const newWindow = window.open('', '_blank', 'noopener,noreferrer');
        
        if (newWindow && !newWindow.closed) {
            // Window opened successfully, navigate it
            newWindow.location.href = url;
            newWindow.focus();
            console.log('Tool opened successfully via window.open');
            return;
        } else {
            newWindow && newWindow.close();
        }
    } catch (e) {
        console.warn('window.open failed:', e);
    }
    
    // Method 2: Direct window.open with URL
    try {
        const directWindow = window.open(url, '_blank', 'noopener,noreferrer');
        if (directWindow && !directWindow.closed) {
            directWindow.focus();
            console.log('Tool opened via direct window.open');
            return;
        }
    } catch (e) {
        console.warn('Direct window.open failed:', e);
    }
    
    // Method 3: Create and dispatch click event on link
    try {
        const tempLink = document.createElement('a');
        tempLink.href = url;
        tempLink.target = '_blank';
        tempLink.rel = 'noopener noreferrer';
        tempLink.style.display = 'none';
        
        document.body.appendChild(tempLink);
        
        // Dispatch actual click event for better compatibility
        const clickEvent = new MouseEvent('click', {
            view: window,
            bubbles: true,
            cancelable: true,
            ctrlKey: false,
            metaKey: false,
            shiftKey: false,
            button: 0
        });
        
        tempLink.dispatchEvent(clickEvent);
        
        // Clean up after a delay
        setTimeout(() => {
            if (document.body.contains(tempLink)) {
                document.body.removeChild(tempLink);
            }
        }, 100);
        
        console.log('Tool opened via synthetic click event');
        return;
    } catch (e) {
        console.warn('Synthetic click failed:', e);
    }
    
    // Method 4: Simple link click fallback
    try {
        const fallbackLink = document.createElement('a');
        fallbackLink.href = url;
        fallbackLink.target = '_blank';
        fallbackLink.rel = 'noopener noreferrer';
        document.body.appendChild(fallbackLink);
        fallbackLink.click();
        document.body.removeChild(fallbackLink);
        console.log('Tool opened via simple link click');
    } catch (e) {
        console.error('All methods failed:', e);
        // Last resort: show alert with URL
        alert('Please manually open: ' + url);
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