<?php
/**
 * SVG logos for different tool categories and individual tools
 */

function getCategoryLogo($category) {
    $logos = [
        'All Tools' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="3" width="18" height="18" rx="2" stroke="#6366F1" stroke-width="2" fill="#EEF2FF"/>
            <path d="M9 12l2 2 4-4" stroke="#6366F1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="12" cy="8" r="1" fill="#6366F1"/>
            <circle cx="8" cy="16" r="1" fill="#6366F1"/>
            <circle cx="16" cy="16" r="1" fill="#6366F1"/>
        </svg>',
        'Performance Testing' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#F59E0B" stroke-width="2"/>
            <path d="M12 6v6l4 2" stroke="#F59E0B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="12" cy="12" r="2" fill="#F59E0B"/>
        </svg>',
        
        'DNS Tools' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#10B981" stroke-width="2"/>
            <path d="M8 12h8M12 8l4 4-4 4" stroke="#10B981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>',
        
        'Security Tools' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2L3 7v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-9-5z" stroke="#EF4444" stroke-width="2" fill="#FEF2F2"/>
            <path d="M9 12l2 2 4-4" stroke="#EF4444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>',
        
        'Monitoring' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="4" width="18" height="14" rx="2" stroke="#8B5CF6" stroke-width="2" fill="#F3E8FF"/>
            <path d="M7 10l2 2 2-4 2 6 2-2" stroke="#8B5CF6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>',
        
        'Web Hosting' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="2" y="6" width="20" height="12" rx="2" stroke="#3B82F6" stroke-width="2" fill="#EFF6FF"/>
            <circle cx="6" cy="10" r="1" fill="#3B82F6"/>
            <circle cx="9" cy="10" r="1" fill="#3B82F6"/>
            <line x1="6" y1="14" x2="18" y2="14" stroke="#3B82F6" stroke-width="1"/>
        </svg>',
        
        'CDN & Security' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z" stroke="#06B6D4" stroke-width="2" fill="#F0F9FF"/>
            <path d="M12 2L3 7v6c0 5.55 3.84 10.74 9 12" stroke="#06B6D4" stroke-width="1.5"/>
        </svg>',
        
        'Static Hosting' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" stroke="#F97316" stroke-width="2" fill="#FFF7ED"/>
            <polyline points="14,2 14,8 20,8" stroke="#F97316" stroke-width="2"/>
            <line x1="16" y1="13" x2="8" y2="13" stroke="#F97316" stroke-width="2"/>
            <line x1="16" y1="17" x2="8" y2="17" stroke="#F97316" stroke-width="2"/>
        </svg>',
        
        'Development Tools' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="2" y="3" width="20" height="14" rx="2" stroke="#6366F1" stroke-width="2" fill="#EEF2FF"/>
            <line x1="8" y1="21" x2="16" y2="21" stroke="#6366F1" stroke-width="2"/>
            <line x1="12" y1="17" x2="12" y2="21" stroke="#6366F1" stroke-width="2"/>
            <path d="M6 9l2 2-2 2M10 13h4" stroke="#6366F1" stroke-width="1.5" stroke-linecap="round"/>
        </svg>',
        
        'Validation Tools' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#059669" stroke-width="2" fill="#ECFDF5"/>
            <path d="M9 12l2 2 4-4" stroke="#059669" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>',
        
        'Accessibility' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#7C3AED" stroke-width="2" fill="#F5F3FF"/>
            <circle cx="12" cy="8" r="2" fill="#7C3AED"/>
            <path d="M9 14v6M15 14v6M9 14h6" stroke="#7C3AED" stroke-width="2" stroke-linecap="round"/>
        </svg>',
        
        'Design Resources' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" stroke="#EC4899" stroke-width="2" fill="#FDF2F8"/>
        </svg>',
        
        'Optimization' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" stroke="#F59E0B" stroke-width="2" fill="#FFFBEB"/>
        </svg>',
        
        'Browser Support' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#14B8A6" stroke-width="2" fill="#F0FDFA"/>
            <line x1="2" y1="12" x2="22" y2="12" stroke="#14B8A6" stroke-width="2"/>
            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" stroke="#14B8A6" stroke-width="2"/>
        </svg>',
        
        'Browser Testing' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="4" width="18" height="14" rx="2" stroke="#DC2626" stroke-width="2" fill="#FEF2F2"/>
            <circle cx="6" cy="8" r="1" fill="#DC2626"/>
            <circle cx="9" cy="8" r="1" fill="#DC2626"/>
            <circle cx="12" cy="8" r="1" fill="#DC2626"/>
            <path d="M8 12h8M8 15h6" stroke="#DC2626" stroke-width="1"/>
        </svg>',
        
        'Domain Registration' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" stroke="#16A34A" stroke-width="2" fill="#F0FDF4"/>
            <polyline points="14,2 14,8 20,8" stroke="#16A34A" stroke-width="2"/>
            <circle cx="12" cy="14" r="2" stroke="#16A34A" stroke-width="1.5"/>
        </svg>',
        
        'Cloud Hosting' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z" stroke="#0EA5E9" stroke-width="2" fill="#F0F9FF"/>
            <path d="M12 14l-2-2M12 14l2-2M12 14v6" stroke="#0EA5E9" stroke-width="1.5" stroke-linecap="round"/>
        </svg>',
        
        'SSL Certificates' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="11" width="18" height="10" rx="2" stroke="#059669" stroke-width="2" fill="#ECFDF5"/>
            <circle cx="12" cy="7" r="4" stroke="#059669" stroke-width="2"/>
            <circle cx="12" cy="16" r="1" fill="#059669"/>
        </svg>',
        
        'Developer Utilities' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" stroke="#6B7280" stroke-width="2" fill="#F9FAFB"/>
        </svg>',
        
        'API Testing' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="4" width="18" height="14" rx="2" stroke="#8B5CF6" stroke-width="2" fill="#F3E8FF"/>
            <path d="M7 9l4 4 4-4" stroke="#8B5CF6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="12" cy="15" r="1" fill="#8B5CF6"/>
        </svg>'
    ];
    
    return $logos[$category] ?? '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="3" y="3" width="18" height="18" rx="2" stroke="#6B7280" stroke-width="2" fill="#F9FAFB"/>
        <path d="M9 12l2 2 4-4" stroke="#6B7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>';
}

function getToolLogo($toolName) {
    $toolLogos = [
        'GTmetrix' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#F59E0B" stroke-width="2" fill="#FFFBEB"/>
            <path d="M12 6v6l4 2" stroke="#F59E0B" stroke-width="2" stroke-linecap="round"/>
        </svg>',
        
        'Pingdom' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#10B981" stroke-width="2" fill="#ECFDF5"/>
            <path d="M8 12h8" stroke="#10B981" stroke-width="2" stroke-linecap="round"/>
            <circle cx="12" cy="12" r="2" fill="#10B981"/>
        </svg>',
        
        'Google PageSpeed Insights' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#4285F4" stroke-width="2" fill="#EFF6FF"/>
            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" stroke="#4285F4" stroke-width="1.5"/>
        </svg>',
        
        'Cloudflare' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z" stroke="#F38020" stroke-width="2" fill="#FFF7ED"/>
            <path d="M12 14l-2-2M12 14l2-2" stroke="#F38020" stroke-width="1.5" stroke-linecap="round"/>
        </svg>',
        
        'Netlify' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="5" width="18" height="14" rx="2" stroke="#00C7B7" stroke-width="2" fill="#F0FDFA"/>
            <path d="M8 12l2 2 4-4" stroke="#00C7B7" stroke-width="2" stroke-linecap="round"/>
        </svg>',
        
        'Vercel' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2L22 20H2L12 2z" stroke="#000000" stroke-width="2" fill="#F9FAFB"/>
        </svg>',
        
        'GitHub Pages' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22" stroke="#24292e" stroke-width="2" fill="#F6F8FA"/>
        </svg>'
    ];
    
    return $toolLogos[$toolName] ?? '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="12" cy="12" r="10" stroke="#6B7280" stroke-width="2" fill="#F9FAFB"/>
        <path d="M8 12h8" stroke="#6B7280" stroke-width="2" stroke-linecap="round"/>
    </svg>';
}
?>