<?php
$tools = [
    // DNS Tools - Priority Category
    [
        'id' => 'intodns',
        'name' => 'IntoDNS',
        'category' => 'DNS Tools',
        'description' => 'Comprehensive DNS health checker and domain configuration analyzer.',
        'url' => 'https://intodns.com',
        'tags' => ['free', 'dns', 'health check', 'configuration']
    ],
    [
        'id' => 'dnschecker-org',
        'name' => 'DNS Checker',
        'category' => 'DNS Tools',
        'description' => 'Global DNS propagation checker from multiple locations worldwide.',
        'url' => 'https://dnschecker.org',
        'tags' => ['free', 'dns', 'propagation', 'global']
    ],
    [
        'id' => 'mxtoolbox',
        'name' => 'MXToolbox',
        'category' => 'DNS Tools',
        'description' => 'Comprehensive DNS and email diagnostic tools including blacklist checking.',
        'url' => 'https://mxtoolbox.com',
        'tags' => ['dns', 'email', 'blacklist', 'diagnostic']
    ],
    [
        'id' => 'whois-lookup',
        'name' => 'Whois.com',
        'category' => 'DNS Tools',
        'description' => 'Domain registration information, ownership details, and expiration dates.',
        'url' => 'https://whois.com',
        'tags' => ['free', 'whois', 'domain', 'registration']
    ],

    // Performance & Speed Testing
    [
        'id' => 'gtmetrix',
        'name' => 'GTmetrix',
        'category' => 'Performance Testing',
        'description' => 'Website speed and performance monitoring with detailed optimization reports.',
        'url' => 'https://gtmetrix.com',
        'tags' => ['free', 'performance', 'speed test', 'monitoring']
    ],
    [
        'id' => 'google-pagespeed',
        'name' => 'Google PageSpeed Insights',
        'category' => 'Performance Testing',
        'description' => 'Analyze website performance on mobile and desktop with Google optimization suggestions.',
        'url' => 'https://developers.google.com/speed/pagespeed/insights/',
        'tags' => ['free', 'google', 'performance', 'mobile', 'seo']
    ],
    [
        'id' => 'webpagetest',
        'name' => 'WebPageTest',
        'category' => 'Performance Testing',
        'description' => 'Free website speed test from multiple global locations using real browsers.',
        'url' => 'https://webpagetest.org',
        'tags' => ['free', 'speed test', 'global', 'real browsers']
    ],
    [
        'id' => 'pingdom',
        'name' => 'Pingdom',
        'category' => 'Performance Testing',
        'description' => 'Website monitoring service checking availability and performance globally.',
        'url' => 'https://pingdom.com',
        'tags' => ['monitoring', 'uptime', 'performance', 'alerts']
    ],

    // SSL & Security Tools
    [
        'id' => 'ssl-labs',
        'name' => 'SSL Labs Test',
        'category' => 'SSL & Security',
        'description' => 'Deep analysis of SSL/TLS configuration and security grade for websites.',
        'url' => 'https://www.ssllabs.com/ssltest/',
        'tags' => ['free', 'ssl', 'security', 'https', 'certificate']
    ],
    [
        'id' => 'sslchecker',
        'name' => 'SSL Checker',
        'category' => 'SSL & Security',
        'description' => 'Free SSL certificate checker and verification tool for websites.',
        'url' => 'https://sslchecker.com',
        'tags' => ['free', 'ssl', 'certificate', 'checker', 'verification']
    ],
    [
        'id' => 'whynopadlock',
        'name' => 'Why No Padlock?',
        'category' => 'SSL & Security',
        'description' => 'Identify mixed content issues preventing SSL padlock from appearing.',
        'url' => 'https://whynopadlock.com',
        'tags' => ['free', 'ssl', 'mixed content', 'https', 'padlock']
    ],
    [
        'id' => 'observatory',
        'name' => 'Mozilla Observatory',
        'category' => 'SSL & Security',
        'description' => 'Scan websites for security best practices and detailed recommendations.',
        'url' => 'https://observatory.mozilla.org',
        'tags' => ['free', 'security', 'mozilla', 'scan']
    ],
    [
        'id' => 'securityheaders',
        'name' => 'Security Headers',
        'category' => 'SSL & Security',
        'description' => 'Analyze HTTP security headers and get security improvement recommendations.',
        'url' => 'https://securityheaders.com',
        'tags' => ['free', 'security', 'headers', 'analysis']
    ],

    // Network & Diagnostic Tools
    [
        'id' => 'ping-eu',
        'name' => 'Ping.eu',
        'category' => 'Network Tools',
        'description' => 'Network diagnostic tools including ping, traceroute, port checker, DNS lookup.',
        'url' => 'https://ping.eu',
        'tags' => ['free', 'ping', 'traceroute', 'network', 'diagnostic']
    ],
    [
        'id' => 'downdetector',
        'name' => 'DownDetector',
        'category' => 'Network Tools',
        'description' => 'Real-time status and outage reports for websites and online services.',
        'url' => 'https://downdetector.com',
        'tags' => ['free', 'outage', 'status', 'reports']
    ],
    [
        'id' => 'uptime-robot',
        'name' => 'UptimeRobot',
        'category' => 'Network Tools',
        'description' => 'Free website uptime monitoring with SMS and email alerts for downtime.',
        'url' => 'https://uptimerobot.com',
        'tags' => ['free', 'uptime', 'monitoring', 'alerts']
    ],
    [
        'id' => 'can-i-use',
        'name' => 'Can I Use',
        'category' => 'Network Tools',
        'description' => 'Check browser support for CSS properties, HTML5 features, and JavaScript APIs.',
        'url' => 'https://caniuse.com',
        'tags' => ['browser support', 'css', 'html5', 'compatibility']
    ],

    // AI Chat & Assistant Tools
    [
        'id' => 'chatgpt',
        'name' => 'ChatGPT',
        'category' => 'AI Assistants',
        'description' => 'Advanced AI chatbot by OpenAI for conversations, coding, and creative tasks.',
        'url' => 'https://chat.openai.com',
        'tags' => ['ai', 'chatbot', 'openai', 'conversation', 'coding']
    ],
    [
        'id' => 'claude',
        'name' => 'Claude',
        'category' => 'AI Assistants',
        'description' => 'AI assistant by Anthropic for helpful, harmless, and honest conversations.',
        'url' => 'https://claude.ai',
        'tags' => ['ai', 'anthropic', 'assistant', 'helpful', 'conversation']
    ],
    [
        'id' => 'gemini',
        'name' => 'Google Gemini',
        'category' => 'AI Assistants',
        'description' => 'Google\'s advanced AI model for text, images, and multimodal conversations.',
        'url' => 'https://gemini.google.com',
        'tags' => ['ai', 'google', 'multimodal', 'images', 'conversation']
    ],
    [
        'id' => 'perplexity',
        'name' => 'Perplexity AI',
        'category' => 'AI Assistants',
        'description' => 'AI-powered search engine that provides accurate answers with real-time sources.',
        'url' => 'https://perplexity.ai',
        'tags' => ['ai', 'search', 'sources', 'research', 'answers']
    ],
    [
        'id' => 'deepseek',
        'name' => 'DeepSeek',
        'category' => 'AI Assistants',
        'description' => 'Advanced AI model focused on reasoning and mathematical problem-solving.',
        'url' => 'https://chat.deepseek.com',
        'tags' => ['ai', 'reasoning', 'math', 'problem-solving', 'deepseek']
    ],
    [
        'id' => 'grok',
        'name' => 'Grok',
        'category' => 'AI Assistants',
        'description' => 'Real-time AI assistant by xAI with access to live information and humor.',
        'url' => 'https://grok.com',
        'tags' => ['ai', 'xai', 'real-time', 'humor', 'live-data']
    ],

    // Development & Code Tools
    [
        'id' => 'replit',
        'name' => 'Replit',
        'category' => 'Development Tools',
        'description' => 'Collaborative browser-based IDE for multiple programming languages with instant deployment.',
        'url' => 'https://replit.com',
        'tags' => ['ide', 'collaborative', 'deployment', 'multiple languages']
    ],
    [
        'id' => 'codepen',
        'name' => 'CodePen',
        'category' => 'Development Tools',
        'description' => 'Online code editor and social development environment for front-end developers.',
        'url' => 'https://codepen.io',
        'tags' => ['editor', 'frontend', 'social', 'demo']
    ],
    [
        'id' => 'jsfiddle',
        'name' => 'JSFiddle',
        'category' => 'Development Tools',
        'description' => 'Online playground for testing and sharing JavaScript, CSS, and HTML snippets.',
        'url' => 'https://jsfiddle.net',
        'tags' => ['editor', 'javascript', 'playground', 'free']
    ],
    [
        'id' => 'validator-w3',
        'name' => 'W3C Markup Validator',
        'category' => 'Development Tools',
        'description' => 'Check markup validity of web documents in HTML, XHTML, and other formats.',
        'url' => 'https://validator.w3.org',
        'tags' => ['free', 'html', 'validation', 'w3c', 'standards']
    ],
    [
        'id' => 'css-validator',
        'name' => 'W3C CSS Validator',
        'category' => 'Development Tools',
        'description' => 'Validate CSS stylesheets according to W3C standards and specifications.',
        'url' => 'https://jigsaw.w3.org/css-validator/',
        'tags' => ['free', 'css', 'validation', 'w3c', 'standards']
    ],

    // Hosting & Deployment
    [
        'id' => 'netlify',
        'name' => 'Netlify',
        'category' => 'Hosting & CDN',
        'description' => 'Modern platform for deploying and hosting static sites and JAMstack applications.',
        'url' => 'https://netlify.com',
        'tags' => ['static', 'jamstack', 'deployment', 'free']
    ],
    [
        'id' => 'vercel',
        'name' => 'Vercel',
        'category' => 'Hosting & CDN',
        'description' => 'Platform for frontend frameworks and static sites with serverless functions.',
        'url' => 'https://vercel.com',
        'tags' => ['static', 'serverless', 'nextjs', 'deployment']
    ],
    [
        'id' => 'cloudflare',
        'name' => 'Cloudflare',
        'category' => 'Hosting & CDN',
        'description' => 'Global CDN, DDoS protection, and web security services with free tier.',
        'url' => 'https://cloudflare.com',
        'tags' => ['cdn', 'security', 'ddos', 'free', 'dns']
    ],
    [
        'id' => 'github-pages',
        'name' => 'GitHub Pages',
        'category' => 'Hosting & CDN',
        'description' => 'Free static site hosting directly from GitHub repositories.',
        'url' => 'https://pages.github.com',
        'tags' => ['free', 'github', 'static', 'git']
    ],
    [
        'id' => 'digitalocean',
        'name' => 'DigitalOcean',
        'category' => 'Hosting & CDN',
        'description' => 'Simple cloud hosting platform with predictable pricing and developer tools.',
        'url' => 'https://digitalocean.com',
        'tags' => ['cloud', 'vps', 'developer', 'simple']
    ],

    // Design & Optimization
    [
        'id' => 'tinypng',
        'name' => 'TinyPNG',
        'category' => 'Design & Optimization',
        'description' => 'Smart PNG and JPEG compression service to reduce file sizes while maintaining quality.',
        'url' => 'https://tinypng.com',
        'tags' => ['free', 'compression', 'images', 'optimization']
    ],
    [
        'id' => 'google-fonts',
        'name' => 'Google Fonts',
        'category' => 'Design & Optimization',
        'description' => 'Free web fonts library with easy integration and font pairing suggestions.',
        'url' => 'https://fonts.google.com',
        'tags' => ['free', 'fonts', 'typography', 'web fonts']
    ],
    [
        'id' => 'unsplash',
        'name' => 'Unsplash',
        'category' => 'Design & Optimization',
        'description' => 'High-quality stock photography available for free with simple attribution.',
        'url' => 'https://unsplash.com',
        'tags' => ['free', 'photos', 'stock', 'high quality']
    ],
    [
        'id' => 'coolors',
        'name' => 'Coolors',
        'category' => 'Design & Optimization',
        'description' => 'Color palette generator and color scheme explorer for designers and developers.',
        'url' => 'https://coolors.co',
        'tags' => ['colors', 'palette', 'design', 'generator']
    ],
    [
        'id' => 'wave',
        'name' => 'WAVE Web Accessibility',
        'category' => 'Design & Optimization',
        'description' => 'Web accessibility evaluation tool that helps identify accessibility and WCAG errors.',
        'url' => 'https://wave.webaim.org',
        'tags' => ['free', 'accessibility', 'wcag', 'evaluation']
    ]
];


?>