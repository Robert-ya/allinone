// Simple tool redirect handler
document.addEventListener('DOMContentLoaded', function() {
    console.log('Simple redirect handler loaded');
    
    // Add click handlers to all tool cards
    const toolCards = document.querySelectorAll('.tool-card');
    console.log('Found', toolCards.length, 'tool cards');
    
    toolCards.forEach(function(card, index) {
        card.addEventListener('click', function(e) {
            const url = card.getAttribute('data-url');
            const name = card.querySelector('.tool-name').textContent;
            
            console.log('Card clicked:', name, 'URL:', url);
            
            if (url) {
                // Simple window.open
                window.open(url, '_blank');
                console.log('Opened:', url);
            }
        });
        
        // Add visual feedback
        card.style.cursor = 'pointer';
        card.setAttribute('title', 'Click to open tool');
    });
});