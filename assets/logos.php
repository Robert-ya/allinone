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
        
        'Network Tools' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#8B5CF6" stroke-width="2" fill="#F3E8FF"/>
            <path d="M12 8v8M8 12h8M9.2 9.2l5.6 5.6M14.8 9.2l-5.6 5.6" stroke="#8B5CF6" stroke-width="1.5" stroke-linecap="round"/>
        </svg>',
        'SSL & Security' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="11" width="18" height="10" rx="2" stroke="#059669" stroke-width="2" fill="#ECFDF5"/>
            <circle cx="12" cy="7" r="4" stroke="#059669" stroke-width="2"/>
            <path d="M9 15l2 2 4-4" stroke="#059669" stroke-width="1.5" stroke-linecap="round"/>
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
        </svg>',
        
        'AI Assistants' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#8B5CF6" stroke-width="2" fill="#F5F3FF"/>
            <circle cx="9" cy="10" r="1.5" fill="#8B5CF6"/>
            <circle cx="15" cy="10" r="1.5" fill="#8B5CF6"/>
            <path d="M8 15c1 2 3 2 4 2s3 0 4-2" stroke="#8B5CF6" stroke-width="2" stroke-linecap="round"/>
            <path d="M6 6l12 12M18 6L6 18" stroke="#A855F7" stroke-width="1" opacity="0.3" stroke-linecap="round"/>
        </svg>',
        
        'Optimization Tools' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" stroke="#F59E0B" stroke-width="2" fill="#FFFBEB"/>
        </svg>',
        
        'Accessibility Testing' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#7C3AED" stroke-width="2" fill="#F5F3FF"/>
            <circle cx="12" cy="8" r="2" fill="#7C3AED"/>
            <path d="M9 14v6M15 14v6M9 14h6" stroke="#7C3AED" stroke-width="2" stroke-linecap="round"/>
        </svg>',
        
        'Proxy Sites' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#6366F1" stroke-width="2" fill="#EEF2FF"/>
            <path d="M12 2L3 7v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-9-5z" stroke="#6366F1" stroke-width="2"/>
            <circle cx="12" cy="12" r="3" stroke="#6366F1" stroke-width="1.5"/>
            <path d="M9.5 9.5l5 5M14.5 9.5l-5 5" stroke="#6366F1" stroke-width="1" stroke-linecap="round"/>
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
            <circle cx="12" cy="12" r="10" stroke="#3398D0" stroke-width="2" fill="#DAE6F0"/>
            <path d="M7 12l3 3 7-7" stroke="#3398D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="12" cy="12" r="3" fill="#7EB0DC"/>
        </svg>',
        
        'Pingdom' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#059669" stroke-width="2" fill="#ECFDF5"/>
            <path d="M8 10l2 2 4-4" stroke="#059669" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="12" cy="15" r="1" fill="#059669"/>
        </svg>',
        
        // AI Assistant Individual Logos
        'ChatGPT' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#10A37F" stroke-width="2" fill="#D1F2EB"/>
            <path d="M8 10h8M8 14h8" stroke="#10A37F" stroke-width="2" stroke-linecap="round"/>
            <circle cx="10" cy="7" r="1" fill="#10A37F"/>
            <circle cx="14" cy="7" r="1" fill="#10A37F"/>
            <path d="M8 17c1 1 2 1 4 1s3 0 4-1" stroke="#10A37F" stroke-width="1.5" stroke-linecap="round"/>
        </svg>',
        
        'Claude' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="3" width="18" height="18" rx="9" stroke="#D97706" stroke-width="2" fill="#FEF3C7"/>
            <path d="M8 9c1-2 3-2 4-2s3 0 4 2" stroke="#D97706" stroke-width="2" stroke-linecap="round"/>
            <circle cx="9" cy="11" r="1" fill="#D97706"/>
            <circle cx="15" cy="11" r="1" fill="#D97706"/>
            <path d="M7 15l3-1 2 2 2-2 3 1" stroke="#D97706" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>',
        
        'Google Gemini' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#1976D2" stroke-width="2" fill="#E3F2FD"/>
            <path d="M8 8l8 8M16 8l-8 8" stroke="#1976D2" stroke-width="2" stroke-linecap="round"/>
            <circle cx="12" cy="12" r="2" fill="#1976D2"/>
            <path d="M7 12h10" stroke="#1976D2" stroke-width="1" stroke-linecap="round"/>
            <path d="M12 7v10" stroke="#1976D2" stroke-width="1" stroke-linecap="round"/>
        </svg>',
        
        'Perplexity AI' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#7C3AED" stroke-width="2" fill="#F5F3FF"/>
            <path d="M9 12l2-2 2 2 2-2" stroke="#7C3AED" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="8" cy="8" r="1" fill="#7C3AED"/>
            <circle cx="16" cy="8" r="1" fill="#7C3AED"/>
            <path d="M12 15v2M10 17h4" stroke="#7C3AED" stroke-width="1.5" stroke-linecap="round"/>
        </svg>',
        
        'DeepSeek' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="3" width="18" height="18" rx="3" stroke="#0F172A" stroke-width="2" fill="#F8FAFC"/>
            <path d="M7 12l3-3 3 3 3-3" stroke="#0F172A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="12" cy="8" r="1.5" fill="#0F172A"/>
            <path d="M9 15h6" stroke="#0F172A" stroke-width="1.5" stroke-linecap="round"/>
            <circle cx="9" cy="17" r="0.5" fill="#0F172A"/>
            <circle cx="15" cy="17" r="0.5" fill="#0F172A"/>
        </svg>',
        
        'Grok' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#DC2626" stroke-width="2" fill="#FEE2E2"/>
            <path d="M8 10l8 8M16 10l-8 8" stroke="#DC2626" stroke-width="2" stroke-linecap="round"/>
            <circle cx="8" cy="8" r="1" fill="#DC2626"/>
            <circle cx="16" cy="8" r="1" fill="#DC2626"/>
            <path d="M12 18l-2-2M12 18l2-2" stroke="#DC2626" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>',
        
        'Google PageSpeed Insights' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#4285F4" stroke-width="2" fill="#EFF6FF"/>
            <path d="M12 6v6l4 2" stroke="#4285F4" stroke-width="2" stroke-linecap="round"/>
            <circle cx="12" cy="12" r="1" fill="#EA4335"/>
        </svg>',
        
        'Cloudflare' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18 12h-2.76A6 6 0 1 0 8 18h10a4 4 0 0 0 0-8z" fill="#F48120"/>
            <path d="M18 12h-2.76A6 6 0 1 0 8 18h6" fill="#FAAD3F"/>
        </svg>',
        
        'IntoDNS' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#1E3A8A" stroke-width="2" fill="#EFF6FF"/>
            <path d="M8 12h8M12 8l4 4-4 4" stroke="#1E3A8A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>',
        
        'DNS Checker' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#10B981" stroke-width="2" fill="#ECFDF5"/>
            <path d="M9 12l2 2 4-4" stroke="#10B981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="12" cy="8" r="1" fill="#10B981"/>
        </svg>',
        
        'Ping.eu' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#8B5CF6" stroke-width="2" fill="#F3E8FF"/>
            <path d="M12 8v8M8 12h8" stroke="#8B5CF6" stroke-width="2" stroke-linecap="round"/>
            <circle cx="12" cy="12" r="2" fill="#8B5CF6"/>
        </svg>',
        
        'MXToolbox' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="6" width="18" height="12" rx="2" stroke="#DC2626" stroke-width="2" fill="#FEF2F2"/>
            <path d="M8 10l4 4 4-4" stroke="#DC2626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>',
        
        'Whois.com' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#374151" stroke-width="2" fill="#F9FAFB"/>
            <circle cx="12" cy="8" r="2" stroke="#374151" stroke-width="1.5"/>
            <path d="M12 14v6" stroke="#374151" stroke-width="2" stroke-linecap="round"/>
        </svg>',
        
        'SSL Labs Test' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="11" width="18" height="10" rx="2" stroke="#059669" stroke-width="2" fill="#ECFDF5"/>
            <circle cx="12" cy="7" r="4" stroke="#059669" stroke-width="2"/>
            <path d="M9 15l2 2 4-4" stroke="#059669" stroke-width="1.5" stroke-linecap="round"/>
        </svg>',
        
        'SSL Checker' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="11" width="18" height="10" rx="2" stroke="#16A34A" stroke-width="2" fill="#F0FDF4"/>
            <circle cx="12" cy="7" r="4" stroke="#16A34A" stroke-width="2"/>
            <circle cx="12" cy="16" r="1" fill="#16A34A"/>
        </svg>',
        
        'Why No Padlock?' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="11" width="18" height="10" rx="2" stroke="#F59E0B" stroke-width="2" fill="#FFFBEB"/>
            <circle cx="12" cy="7" r="4" stroke="#F59E0B" stroke-width="2"/>
            <path d="M12 14v4M12 14l-2-2M12 14l2-2" stroke="#F59E0B" stroke-width="1.5" stroke-linecap="round"/>
        </svg>',
        
        'Mozilla Observatory' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#FF7139" stroke-width="2" fill="#FFF7ED"/>
            <path d="M12 2L3 7v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-9-5z" stroke="#FF7139" stroke-width="1.5"/>
        </svg>',
        
        // AI Assistant Logos
        'ChatGPT' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" fill="#10A37F"/>
            <path d="M9.5 8.5c0-.8.7-1.5 1.5-1.5s1.5.7 1.5 1.5-.7 1.5-1.5 1.5-1.5-.7-1.5-1.5zm2 7c0-.8.7-1.5 1.5-1.5s1.5.7 1.5 1.5-.7 1.5-1.5 1.5-1.5-.7-1.5-1.5z" fill="white"/>
            <path d="M8 12h8M12 8l4 4-4 4" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
        </svg>',
        
        'Claude' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" fill="#CC785C"/>
            <path d="M7 9h10M7 12h10M7 15h7" stroke="white" stroke-width="2" stroke-linecap="round"/>
        </svg>',
        
        'Google Gemini' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" fill="#4285F4"/>
            <path d="M8 8l8 8M8 16l8-8" stroke="white" stroke-width="2" stroke-linecap="round"/>
            <circle cx="12" cy="12" r="2" fill="white"/>
        </svg>',
        
        'Perplexity AI' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" fill="#20808D"/>
            <path d="M8 9l4 6 4-6M12 9v6" stroke="white" stroke-width="2" stroke-linecap="round"/>
        </svg>',
        
        'DeepSeek' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" fill="#1B1B1F"/>
            <path d="M8 12l2-2 2 2 2-2 2 2" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="12" cy="12" r="1" fill="white"/>
        </svg>',
        
        'Grok' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" fill="#000000"/>
            <path d="M8 8l8 8M16 8l-8 8" stroke="white" stroke-width="2" stroke-linecap="round"/>
        </svg>',
        
        // Proxy Sites
        'CroxyProxy' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#8B5CF6" stroke-width="2" fill="#F5F3FF"/>
            <path d="M12 2L3 7v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-9-5z" stroke="#8B5CF6" stroke-width="1.5"/>
            <circle cx="12" cy="12" r="2" fill="#8B5CF6"/>
        </svg>',
        
        'Hide.me Proxy' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#10B981" stroke-width="2" fill="#ECFDF5"/>
            <path d="M9 9h6v6h-6z" stroke="#10B981" stroke-width="2" fill="#10B981" fill-opacity="0.2"/>
            <path d="M7 7l10 10M17 7l-10 10" stroke="#10B981" stroke-width="1.5" stroke-linecap="round"/>
        </svg>',
        
        'ProxySite' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#3B82F6" stroke-width="2" fill="#EFF6FF"/>
            <path d="M8 8h8v8h-8z" stroke="#3B82F6" stroke-width="2" fill="#3B82F6" fill-opacity="0.1"/>
            <circle cx="12" cy="12" r="3" stroke="#3B82F6" stroke-width="1.5"/>
            <path d="M9.5 9.5l5 5M14.5 9.5l-5 5" stroke="#3B82F6" stroke-width="1" stroke-linecap="round"/>
        </svg>',
        
        'KProxy' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#F59E0B" stroke-width="2" fill="#FFFBEB"/>
            <path d="M8 8v8M8 12h8" stroke="#F59E0B" stroke-width="2" stroke-linecap="round"/>
            <path d="M12 8l4 4-4 4" stroke="#F59E0B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="12" cy="12" r="1" fill="#F59E0B"/>
        </svg>',
        
        'Netlify' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="5" width="18" height="14" rx="2" stroke="#00C7B7" stroke-width="2" fill="#F0FDFA"/>
            <path d="M8 12l2 2 4-4" stroke="#00C7B7" stroke-width="2" stroke-linecap="round"/>
        </svg>',
        
        'Vercel' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2L22 20H2L12 2z" fill="#000000"/>
        </svg>',
        
        'GitHub Pages' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.87 8.17 6.84 9.5.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34-.46-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.87 1.52 2.34 1.07 2.91.83.09-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.92 0-1.11.38-2 1.03-2.71-.1-.25-.45-1.29.1-2.64 0 0 .84-.27 2.75 1.02.79-.22 1.65-.33 2.5-.33.85 0 1.71.11 2.5.33 1.91-1.29 2.75-1.02 2.75-1.02.55 1.35.2 2.39.1 2.64.65.71 1.03 1.6 1.03 2.71 0 3.82-2.34 4.66-4.57 4.91.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2z" fill="#24292e"/>
        </svg>',
        
        // Additional DNS Tools
        'NSLookup.io' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#6366F1" stroke-width="2" fill="#EEF2FF"/>
            <path d="M8 10l2 2 4-4" stroke="#6366F1" stroke-width="2" stroke-linecap="round"/>
            <circle cx="12" cy="15" r="1" fill="#6366F1"/>
        </svg>',
        
        'Dig (Web Interface)' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#4285F4" stroke-width="2" fill="#EFF6FF"/>
            <path d="M8 10l2 2 2-2 2 2" stroke="#4285F4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12 14v4" stroke="#4285F4" stroke-width="2" stroke-linecap="round"/>
        </svg>',
        
        'DNS Stuff' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#F97316" stroke-width="2" fill="#FFF7ED"/>
            <path d="M8 12h8M12 8v8" stroke="#F97316" stroke-width="2" stroke-linecap="round"/>
            <circle cx="12" cy="12" r="2" fill="#F97316"/>
        </svg>',
        
        // Performance Testing Tools
        'WebPageTest' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#059669" stroke-width="2" fill="#ECFDF5"/>
            <path d="M12 6v6l4 2" stroke="#059669" stroke-width="2" stroke-linecap="round"/>
            <path d="M8 8l8 8" stroke="#059669" stroke-width="1" stroke-linecap="round"/>
        </svg>',
        
        'Google Speed Test' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#34A853" stroke-width="2" fill="#F0FDF4"/>
            <path d="M7 12l3 3 7-7" stroke="#34A853" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="12" cy="7" r="1" fill="#34A853"/>
        </svg>',
        
        'Pingdom Tools' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#FFF200" stroke-width="2" fill="#FFFBEB"/>
            <path d="M12 8v8M8 12h8" stroke="#FFF200" stroke-width="2" stroke-linecap="round"/>
            <circle cx="12" cy="12" r="3" fill="#FFF200"/>
        </svg>',
        
        'Lighthouse' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#FF5722" stroke-width="2" fill="#FFF3E0"/>
            <path d="M12 2l4 8-4 2-4-2z" fill="#FF5722"/>
            <path d="M12 12v8" stroke="#FF5722" stroke-width="2" stroke-linecap="round"/>
        </svg>',
        
        'KeyCDN Speed Test' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#9C27B0" stroke-width="2" fill="#F3E5F5"/>
            <path d="M12 6v6l4 2" stroke="#9C27B0" stroke-width="2" stroke-linecap="round"/>
            <path d="M8 8h8" stroke="#9C27B0" stroke-width="1" stroke-linecap="round"/>
        </svg>',
        
        // Security Tools
        'Security Headers' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2L3 7v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-9-5z" stroke="#DC2626" stroke-width="2" fill="#FEF2F2"/>
            <path d="M8 12h8M12 8v8" stroke="#DC2626" stroke-width="1.5" stroke-linecap="round"/>
        </svg>',
        
        // Network Tools
        'Ping.eu' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#0891B2" stroke-width="2" fill="#F0F9FF"/>
            <path d="M12 8v8M8 12h8" stroke="#0891B2" stroke-width="2" stroke-linecap="round"/>
            <circle cx="12" cy="12" r="2" fill="#0891B2"/>
        </svg>',
        
        'Traceroute Online' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#7C2D12" stroke-width="2" fill="#FEF7FF"/>
            <path d="M8 8l8 8M8 16l8-8" stroke="#7C2D12" stroke-width="2" stroke-linecap="round"/>
            <circle cx="8" cy="8" r="1" fill="#7C2D12"/>
            <circle cx="16" cy="16" r="1" fill="#7C2D12"/>
        </svg>',
        
        'What Is My IP Address' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#1F2937" stroke-width="2" fill="#F9FAFB"/>
            <circle cx="12" cy="8" r="2" stroke="#1F2937" stroke-width="1.5"/>
            <path d="M12 14v6" stroke="#1F2937" stroke-width="2" stroke-linecap="round"/>
            <circle cx="12" cy="20" r="1" fill="#1F2937"/>
        </svg>',
        
        'Network Tools' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#6B46C1" stroke-width="2" fill="#F5F3FF"/>
            <path d="M12 8v8M8 12h8M9.2 9.2l5.6 5.6M14.8 9.2l-5.6 5.6" stroke="#6B46C1" stroke-width="1.5" stroke-linecap="round"/>
        </svg>',
        
        // Hosting Tools
        'DigitalOcean' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#0080FF" stroke-width="2" fill="#EFF6FF"/>
            <path d="M12 8v8M8 12h8" stroke="#0080FF" stroke-width="2" stroke-linecap="round"/>
            <circle cx="12" cy="12" r="3" fill="#0080FF"/>
        </svg>',
        
        'AWS' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="6" width="18" height="12" rx="2" stroke="#FF9900" stroke-width="2" fill="#FFF7ED"/>
            <path d="M7 10l3 2-3 2M13 14h4" stroke="#FF9900" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>',
        
        'Firebase Hosting' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4 12l8-8 2 4-6 8-4-4z" fill="#FFA000"/>
            <path d="M12 4l4 4-4 8 8-4-8-8z" fill="#FF6F00"/>
            <path d="M12 20l8-4-4-4-4 8z" fill="#FF8F00"/>
        </svg>',
        
        // Development Tools
        'Postman' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#FF6C37" stroke-width="2" fill="#FFF5F5"/>
            <path d="M8 8l8 8M8 16l8-8" stroke="#FF6C37" stroke-width="2" stroke-linecap="round"/>
            <circle cx="12" cy="12" r="2" fill="#FF6C37"/>
        </svg>',
        
        'JSONLint' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="4" width="18" height="16" rx="2" stroke="#10B981" stroke-width="2" fill="#ECFDF5"/>
            <path d="M8 9l2 2-2 2M14 13h3" stroke="#10B981" stroke-width="2" stroke-linecap="round"/>
            <path d="M7 15v2M17 15v2" stroke="#10B981" stroke-width="1" stroke-linecap="round"/>
        </svg>',
        
        'Regex101' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="6" width="18" height="12" rx="2" stroke="#6366F1" stroke-width="2" fill="#EEF2FF"/>
            <path d="M7 10h10M7 14h6" stroke="#6366F1" stroke-width="2" stroke-linecap="round"/>
            <circle cx="16" cy="14" r="1" fill="#6366F1"/>
        </svg>',
        
        // CDN Tools
        'KeyCDN Tools' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z" stroke="#8B5CF6" stroke-width="2" fill="#F5F3FF"/>
            <path d="M12 14l-2-2M12 14l2-2M12 14v4" stroke="#8B5CF6" stroke-width="1.5" stroke-linecap="round"/>
        </svg>',
        
        'MaxCDN Tools' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z" stroke="#DC2626" stroke-width="2" fill="#FEF2F2"/>
            <circle cx="12" cy="14" r="2" fill="#DC2626"/>
        </svg>',
        
        // Additional Tools
        'TinyPNG' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="6" width="18" height="12" rx="2" stroke="#22C55E" stroke-width="2" fill="#F0FDF4"/>
            <path d="M8 10l2 2 4-4" stroke="#22C55E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M7 16h10" stroke="#22C55E" stroke-width="1" stroke-linecap="round"/>
        </svg>',
        
        'WAVE Web Accessibility Evaluation Tool' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#7C3AED" stroke-width="2" fill="#F5F3FF"/>
            <circle cx="12" cy="8" r="2" fill="#7C3AED"/>
            <path d="M9 14v6M15 14v6M9 14h6" stroke="#7C3AED" stroke-width="2" stroke-linecap="round"/>
            <path d="M6 12c2-2 4-2 6 0s4-2 6 0" stroke="#7C3AED" stroke-width="1" stroke-linecap="round"/>
        </svg>',
        
        'WAVE Web Accessibility' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#7C3AED" stroke-width="2" fill="#F5F3FF"/>
            <circle cx="12" cy="8" r="2" fill="#7C3AED"/>
            <path d="M9 14v6M15 14v6M9 14h6" stroke="#7C3AED" stroke-width="2" stroke-linecap="round"/>
            <path d="M6 12c2-2 4-2 6 0s4-2 6 0" stroke="#7C3AED" stroke-width="1" stroke-linecap="round"/>
        </svg>',
        
        // More specific unique tool logos
        'Speedtest.net' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#141C28" stroke-width="2" fill="#F8FAFC"/>
            <path d="M12 6v6l4 2" stroke="#141C28" stroke-width="2" stroke-linecap="round"/>
            <circle cx="12" cy="12" r="1" fill="#00C853"/>
            <path d="M7 17h10" stroke="#141C28" stroke-width="1" stroke-linecap="round"/>
        </svg>',
        
        'Fast.com' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="3" width="18" height="18" rx="2" stroke="#E50914" stroke-width="2" fill="#FEF2F2"/>
            <path d="M8 8h8M8 12h6M8 16h4" stroke="#E50914" stroke-width="2" stroke-linecap="round"/>
            <circle cx="16" cy="16" r="1" fill="#E50914"/>
        </svg>',
        
        'DownDetector' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#FF4444" stroke-width="2" fill="#FEF2F2"/>
            <path d="M8 10l2 2 2-2 2 2" stroke="#FF4444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12 14v4" stroke="#FF4444" stroke-width="2" stroke-linecap="round"/>
            <circle cx="12" cy="18" r="1" fill="#FF4444"/>
        </svg>',
        
        'Can I Use' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="4" width="18" height="16" rx="2" stroke="#1E7B1E" stroke-width="2" fill="#F0FDF4"/>
            <path d="M8 9l2 2 4-4" stroke="#1E7B1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M7 15h10" stroke="#1E7B1E" stroke-width="1" stroke-linecap="round"/>
            <circle cx="12" cy="17" r="1" fill="#1E7B1E"/>
        </svg>',
        
        'JSON Formatter' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="4" width="18" height="16" rx="2" stroke="#059669" stroke-width="2" fill="#ECFDF5"/>
            <path d="M7 8h2M7 12h2M7 16h2" stroke="#059669" stroke-width="2" stroke-linecap="round"/>
            <path d="M11 8h6M11 12h4M11 16h6" stroke="#059669" stroke-width="1" stroke-linecap="round"/>
            <path d="M17 8v8" stroke="#059669" stroke-width="1" stroke-linecap="round"/>
        </svg>',
        
        // Performance and Speed Testing - More specific designs
        'UptimeRobot' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#46E592" stroke-width="2" fill="#ECFDF5"/>
            <circle cx="9" cy="10" r="1.5" fill="#46E592"/>
            <circle cx="15" cy="10" r="1.5" fill="#46E592"/>
            <path d="M8 15c1 2 3 2 4 2s3 0 4-2" stroke="#46E592" stroke-width="2" stroke-linecap="round"/>
            <rect x="10" y="6" width="4" height="2" rx="1" fill="#46E592"/>
        </svg>',
        
        'StatusCake' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#FF6B35" stroke-width="2" fill="#FFF7ED"/>
            <path d="M8 10c0-2 2-4 4-4s4 2 4 4" stroke="#FF6B35" stroke-width="2" stroke-linecap="round"/>
            <circle cx="12" cy="14" r="3" stroke="#FF6B35" stroke-width="2" fill="#FFF7ED"/>
            <path d="M12 12v4" stroke="#FF6B35" stroke-width="1" stroke-linecap="round"/>
        </svg>',
        
        'Freshping' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#2ECC71" stroke-width="2" fill="#F0FDF4"/>
            <path d="M12 8v8M8 12h8" stroke="#2ECC71" stroke-width="2" stroke-linecap="round"/>
            <circle cx="12" cy="12" r="2" fill="#2ECC71"/>
            <path d="M6 6l12 12" stroke="#2ECC71" stroke-width="0.5" opacity="0.3" stroke-linecap="round"/>
        </svg>',
        
        // W3C Tools - Distinctive designs
        'W3C Markup Validator' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="4" width="18" height="16" rx="2" stroke="#005A9C" stroke-width="2" fill="#EFF6FF"/>
            <path d="M7 8l2 4 2-4M13 8l2 4 2-4" stroke="#005A9C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M7 16h10" stroke="#005A9C" stroke-width="1" stroke-linecap="round"/>
            <circle cx="12" cy="18" r="1" fill="#005A9C"/>
        </svg>',
        
        'W3C CSS Validator' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="4" width="18" height="16" rx="2" stroke="#1572B6" stroke-width="2" fill="#EFF6FF"/>
            <path d="M8 8h8M8 12h6M8 16h4" stroke="#1572B6" stroke-width="2" stroke-linecap="round"/>
            <path d="M16 12l2 2-2 2" stroke="#1572B6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>',
        
        'W3C Link Checker' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="4" width="18" height="16" rx="2" stroke="#CC6600" stroke-width="2" fill="#FFF7ED"/>
            <path d="M9 9h6v6H9z" stroke="#CC6600" stroke-width="1.5" fill="none"/>
            <path d="M10 13l1.5 1.5L15 11" stroke="#CC6600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>',
        
        // Additional hosting and development tools
        'Heroku' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="3" width="18" height="18" rx="2" stroke="#430098" stroke-width="2" fill="#F5F3FF"/>
            <path d="M8 8l4 4 4-4M12 12v8" stroke="#430098" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>',
        
        'Railway' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="6" width="18" height="12" rx="2" stroke="#0B0D0E" stroke-width="2" fill="#F8FAFC"/>
            <path d="M6 12h12M12 9v6" stroke="#0B0D0E" stroke-width="2" stroke-linecap="round"/>
            <circle cx="9" cy="12" r="1" fill="#0B0D0E"/>
            <circle cx="15" cy="12" r="1" fill="#0B0D0E"/>
        </svg>',
        
        'Render' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#46E592" stroke-width="2" fill="#ECFDF5"/>
            <path d="M8 8l8 8M8 16l8-8" stroke="#46E592" stroke-width="2" stroke-linecap="round"/>
            <circle cx="12" cy="12" r="2" fill="#46E592"/>
        </svg>',
        
        'Surge.sh' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#B8FF02" stroke-width="2" fill="#F7FEE7"/>
            <path d="M7 12l3 3 7-7" stroke="#B8FF02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M6 6l12 12" stroke="#B8FF02" stroke-width="1" opacity="0.3" stroke-linecap="round"/>
        </svg>',
        
        // New Tool Logos
        "What's My DNS" => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#2DD4BF" stroke-width="2" fill="#F0FDFA"/>
            <path d="M8 12h8M12 8l4 4-4 4" stroke="#2DD4BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="8" cy="8" r="1" fill="#2DD4BF"/>
        </svg>',
        
        'DNS Lookup' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#0369A1" stroke-width="2" fill="#EFF6FF"/>
            <path d="M8 10l2 2 4-4" stroke="#0369A1" stroke-width="2" stroke-linecap="round"/>
            <circle cx="16" cy="8" r="1" fill="#0369A1"/>
            <path d="M12 16h4" stroke="#0369A1" stroke-width="1" stroke-linecap="round"/>
        </svg>',
        
        'Yellow Lab Tools' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#EAB308" stroke-width="2" fill="#FFFBEB"/>
            <path d="M12 6v6l4 2" stroke="#EAB308" stroke-width="2" stroke-linecap="round"/>
            <circle cx="8" cy="8" r="1" fill="#EAB308"/>
            <circle cx="16" cy="16" r="1" fill="#EAB308"/>
        </svg>',
        
        'Have I Been Pwned' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2L3 7v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-9-5z" stroke="#DC2626" stroke-width="2" fill="#FEF2F2"/>
            <circle cx="12" cy="10" r="2" stroke="#DC2626" stroke-width="2"/>
            <path d="M12 14v4" stroke="#DC2626" stroke-width="2" stroke-linecap="round"/>
        </svg>',
        
        'VirusTotal' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#3B82F6" stroke-width="2" fill="#EFF6FF"/>
            <path d="M9 12l2 2 4-4" stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12 2L3 7v6" stroke="#3B82F6" stroke-width="1" opacity="0.6"/>
        </svg>',
        
        'Qualys SSL Labs' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="11" width="18" height="10" rx="2" stroke="#DC2626" stroke-width="2" fill="#FEF2F2"/>
            <circle cx="12" cy="7" r="4" stroke="#DC2626" stroke-width="2"/>
            <path d="M10 15h4M12 15v2" stroke="#DC2626" stroke-width="1.5" stroke-linecap="round"/>
        </svg>',
        
        'CodePen' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="4" width="18" height="16" rx="2" stroke="#1E293B" stroke-width="2" fill="#F8FAFC"/>
            <path d="M8 9l4 4 4-4M12 9v6" stroke="#1E293B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>',
        
        'JS Bin' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="4" width="18" height="16" rx="2" stroke="#F59E0B" stroke-width="2" fill="#FFFBEB"/>
            <path d="M8 9l2 2-2 2M14 13h3" stroke="#F59E0B" stroke-width="2" stroke-linecap="round"/>
            <circle cx="12" cy="8" r="1" fill="#F59E0B"/>
        </svg>',
        
        'JSFiddle' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="4" width="18" height="16" rx="2" stroke="#4F46E5" stroke-width="2" fill="#EEF2FF"/>
            <path d="M7 9h10M7 13h6M7 17h8" stroke="#4F46E5" stroke-width="1.5" stroke-linecap="round"/>
        </svg>',
        
        'ReqBin' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="6" width="18" height="12" rx="2" stroke="#059669" stroke-width="2" fill="#ECFDF5"/>
            <path d="M8 10l4 4 4-4" stroke="#059669" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="12" cy="15" r="1" fill="#059669"/>
        </svg>',
        
        'Is It Down Right Now' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#7C3AED" stroke-width="2" fill="#F5F3FF"/>
            <path d="M8 12h8M12 8v8" stroke="#7C3AED" stroke-width="2" stroke-linecap="round"/>
            <circle cx="12" cy="12" r="1" fill="#7C3AED"/>
        </svg>',
        
        'Compressor.io' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="6" width="18" height="12" rx="2" stroke="#EF4444" stroke-width="2" fill="#FEF2F2"/>
            <path d="M8 10l2 2 2-2 2 2" stroke="#EF4444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12 14v2" stroke="#EF4444" stroke-width="2" stroke-linecap="round"/>
        </svg>',
        
        'Kraken.io' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#1F2937" stroke-width="2" fill="#F9FAFB"/>
            <path d="M9 9l6 6M15 9l-6 6" stroke="#1F2937" stroke-width="2" stroke-linecap="round"/>
            <circle cx="12" cy="12" r="2" fill="#1F2937"/>
        </svg>',
        
        'JavaScript Minifier' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="4" width="18" height="16" rx="2" stroke="#F7DF1E" stroke-width="2" fill="#FFFBEB"/>
            <path d="M8 9l2 2-2 2M14 13h3" stroke="#F7DF1E" stroke-width="2" stroke-linecap="round"/>
            <path d="M12 8v8" stroke="#F7DF1E" stroke-width="1" stroke-linecap="round"/>
        </svg>',
        
        'Browserling' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="4" width="18" height="14" rx="2" stroke="#10B981" stroke-width="2" fill="#ECFDF5"/>
            <circle cx="6" cy="8" r="1" fill="#10B981"/>
            <circle cx="9" cy="8" r="1" fill="#10B981"/>
            <circle cx="12" cy="8" r="1" fill="#10B981"/>
            <path d="M6 12h12M6 15h8" stroke="#10B981" stroke-width="1"/>
        </svg>',
        
        'LambdaTest' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="4" width="18" height="14" rx="2" stroke="#7C3AED" stroke-width="2" fill="#F5F3FF"/>
            <path d="M8 8l8 8M8 16l8-8" stroke="#7C3AED" stroke-width="2" stroke-linecap="round"/>
            <circle cx="12" cy="12" r="1" fill="#7C3AED"/>
        </svg>',
        
        'ngrok' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#1F2937" stroke-width="2" fill="#F9FAFB"/>
            <path d="M8 12h8M12 8l4 4-4 4" stroke="#1F2937" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>',
        
        'Serveo' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#3B82F6" stroke-width="2" fill="#EFF6FF"/>
            <path d="M8 8l8 8M8 16l8-8" stroke="#3B82F6" stroke-width="2" stroke-linecap="round"/>
            <path d="M12 6v12" stroke="#3B82F6" stroke-width="1" opacity="0.5" stroke-linecap="round"/>
        </svg>',
        
        'Speedtest.net' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#00A8E6" stroke-width="2" fill="#F0F9FF"/>
            <path d="M8 12h8M12 8l4 4-4 4" stroke="#00A8E6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="8" cy="8" r="1" fill="#00A8E6"/>
            <circle cx="16" cy="16" r="1" fill="#00A8E6"/>
        </svg>',
        
        'Fast.com' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="4" width="18" height="16" rx="2" stroke="#E50914" stroke-width="2" fill="#FEF2F2"/>
            <path d="M8 8v8M8 8h4M8 12h3" stroke="#E50914" stroke-width="2" stroke-linecap="round"/>
            <circle cx="16" cy="12" r="2" stroke="#E50914" stroke-width="2"/>
        </svg>',
        
        'DownDetector' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#EF4444" stroke-width="2" fill="#FEF2F2"/>
            <path d="M8 12l2-2 2 2 4-4" stroke="#EF4444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="12" cy="16" r="1" fill="#EF4444"/>
        </svg>',
        
        // Additional missing tools
        'Can I Use' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#14B8A6" stroke-width="2" fill="#F0FDFA"/>
            <path d="M8 10l2 2 4-4" stroke="#14B8A6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="12" cy="15" r="1" fill="#14B8A6"/>
        </svg>',
        
        'DownDetector' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#EF4444" stroke-width="2" fill="#FEF2F2"/>
            <path d="M12 6v6" stroke="#EF4444" stroke-width="2" stroke-linecap="round"/>
            <circle cx="12" cy="16" r="1" fill="#EF4444"/>
        </svg>',
        
        'Fast.com' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#E50914" stroke-width="2" fill="#FEF2F2"/>
            <path d="M8 8l8 8M8 16l8-8" stroke="#E50914" stroke-width="2" stroke-linecap="round"/>
            <circle cx="12" cy="12" r="2" fill="#E50914"/>
        </svg>',
        
        'JSON Formatter' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="4" width="18" height="16" rx="2" stroke="#059669" stroke-width="2" fill="#ECFDF5"/>
            <path d="M7 8h2M7 12h4M7 16h3" stroke="#059669" stroke-width="2" stroke-linecap="round"/>
            <path d="M15 8v8M17 8v8" stroke="#059669" stroke-width="1" stroke-linecap="round"/>
        </svg>',
        
        'Speedtest.net' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="#141526" stroke-width="2" fill="#F8FAFC"/>
            <path d="M12 6v6l4 2" stroke="#141526" stroke-width="2" stroke-linecap="round"/>
            <circle cx="12" cy="12" r="1" fill="#141526"/>
            <path d="M8 8l8 8" stroke="#141526" stroke-width="1" stroke-linecap="round"/>
        </svg>'
    ];
    
    return $toolLogos[$toolName] ?? '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="12" cy="12" r="10" stroke="#6B7280" stroke-width="2" fill="#F9FAFB"/>
        <path d="M8 12h8" stroke="#6B7280" stroke-width="2" stroke-linecap="round"/>
    </svg>';
}
?>