<?php
$tools = [
    // DNS - Priority Category
    [
        'id' => 'intodns',
        'name' => 'IntoDNS',
        'category' => 'DNS',
        'description' => 'Comprehensive DNS health checker and domain configuration analyzer.',
        'url' => 'https://intodns.com',
        'tags' => ['free', 'dns', 'health check', 'configuration']
    ],
    [
        'id' => 'dnschecker-org',
        'name' => 'DNS Checker',
        'category' => 'DNS',
        'description' => 'Global DNS propagation checker from multiple locations worldwide.',
        'url' => 'https://dnschecker.org',
        'tags' => ['free', 'dns', 'propagation', 'global']
    ],
    [
        'id' => 'mxtoolbox',
        'name' => 'MXToolbox',
        'category' => 'DNS',
        'description' => 'Comprehensive DNS and email diagnostic tools including blacklist checking.',
        'url' => 'https://mxtoolbox.com',
        'tags' => ['dns', 'email', 'blacklist', 'diagnostic']
    ],
    [
        'id' => 'whois-lookup',
        'name' => 'Whois.com',
        'category' => 'DNS',
        'description' => 'Domain registration information, ownership details, and expiration dates.',
        'url' => 'https://whois.com',
        'tags' => ['free', 'whois', 'domain', 'registration']
    ],
    [
        'id' => 'nslookup',
        'name' => 'NSLookup.io',
        'category' => 'DNS',
        'description' => 'Online DNS lookup tool to find DNS records and IP addresses.',
        'url' => 'https://nslookup.io',
        'tags' => ['free', 'dns', 'lookup', 'records']
    ],
    [
        'id' => 'dig-web',
        'name' => 'Dig (Web Interface)',
        'category' => 'DNS',
        'description' => 'Web-based DNS lookup tool similar to the dig command line utility.',
        'url' => 'https://toolbox.googleapps.com/apps/dig/',
        'tags' => ['free', 'dns', 'dig', 'google']
    ],
    [
        'id' => 'dns-stuff',
        'name' => 'DNS Stuff',
        'category' => 'DNS',
        'description' => 'Complete DNS analysis and network tools for domain troubleshooting.',
        'url' => 'https://dnsstuff.com',
        'tags' => ['dns', 'analysis', 'network', 'troubleshooting']
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
        'id' => 'google-speed-test',
        'name' => 'Google Speed Test',
        'category' => 'Performance Testing',
        'description' => 'Test your internet speed and website loading times with Google infrastructure.',
        'url' => 'https://speed.google.com',
        'tags' => ['free', 'google', 'speed test', 'internet']
    ],
    [
        'id' => 'tools-pingdom',
        'name' => 'Pingdom Tools',
        'category' => 'Performance Testing',
        'description' => 'Free website speed test tool by Pingdom with performance insights.',
        'url' => 'https://tools.pingdom.com',
        'tags' => ['free', 'speed test', 'performance', 'insights']
    ],
    [
        'id' => 'lighthouse',
        'name' => 'Lighthouse',
        'category' => 'Performance Testing',
        'description' => 'Google Lighthouse automated tool for improving web page quality.',
        'url' => 'https://developers.google.com/web/tools/lighthouse',
        'tags' => ['free', 'google', 'lighthouse', 'quality', 'seo']
    ],
    [
        'id' => 'keycdn-speed',
        'name' => 'KeyCDN Speed Test',
        'category' => 'Performance Testing',
        'description' => 'Website speed test from 14 global locations with detailed reports.',
        'url' => 'https://tools.keycdn.com/speed',
        'tags' => ['free', 'speed test', 'global', 'cdn']
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

    // Network Network & Diagnostic Tools Diagnostic
    [
        'id' => 'ping-eu',
        'name' => 'Ping.eu',
        'category' => 'Network',
        'description' => 'Network diagnostic tools including ping, traceroute, port checker, DNS lookup.',
        'url' => 'https://ping.eu',
        'tags' => ['free', 'ping', 'traceroute', 'network', 'diagnostic']
    ],
    [
        'id' => 'downdetector',
        'name' => 'DownDetector',
        'category' => 'Network',
        'description' => 'Real-time status and outage reports for websites and online services.',
        'url' => 'https://downdetector.com',
        'tags' => ['free', 'outage', 'status', 'reports']
    ],
    [
        'id' => 'uptime-robot',
        'name' => 'UptimeRobot',
        'category' => 'Network',
        'description' => 'Free website uptime monitoring with SMS and email alerts for downtime.',
        'url' => 'https://uptimerobot.com',
        'tags' => ['free', 'uptime', 'monitoring', 'alerts']
    ],
    [
        'id' => 'can-i-use',
        'name' => 'Can I Use',
        'category' => 'Network',
        'description' => 'Check browser support for CSS properties, HTML5 features, and JavaScript APIs.',
        'url' => 'https://caniuse.com',
        'tags' => ['browser support', 'css', 'html5', 'compatibility']
    ],
    [
        'id' => 'speedtest-net',
        'name' => 'Speedtest.net',
        'category' => 'Network',
        'description' => 'Test your internet speed and network latency from global servers.',
        'url' => 'https://speedtest.net',
        'tags' => ['free', 'speed test', 'internet', 'bandwidth']
    ],
    [
        'id' => 'fast-com',
        'name' => 'Fast.com',
        'category' => 'Network',
        'description' => 'Netflix\'s simple internet speed test focused on video streaming performance.',
        'url' => 'https://fast.com',
        'tags' => ['free', 'speed test', 'netflix', 'streaming']
    ],

    // Development Testing Development Testing & Validation Tools Validation
    [
        'id' => 'validator-w3',
        'name' => 'W3C Markup Validator',
        'category' => 'Development',
        'description' => 'Check markup validity of web documents in HTML, XHTML, and other formats.',
        'url' => 'https://validator.w3.org',
        'tags' => ['free', 'html', 'validation', 'w3c', 'standards']
    ],
    [
        'id' => 'css-validator',
        'name' => 'W3C CSS Validator',
        'category' => 'Development',
        'description' => 'Validate CSS stylesheets according to W3C standards and specifications.',
        'url' => 'https://jigsaw.w3.org/css-validator/',
        'tags' => ['free', 'css', 'validation', 'w3c', 'standards']
    ],
    [
        'id' => 'json-formatter',
        'name' => 'JSON Formatter',
        'category' => 'Development',
        'description' => 'Format, validate, and beautify JSON data with syntax highlighting.',
        'url' => 'https://jsonformatter.org',
        'tags' => ['json', 'formatter', 'validator', 'free']
    ],
    [
        'id' => 'regex101',
        'name' => 'Regex101',
        'category' => 'Development',
        'description' => 'Online regex tester, debugger with highlighting for PHP, PCRE, Python, and JavaScript.',
        'url' => 'https://regex101.com',
        'tags' => ['regex', 'tester', 'debugger', 'free']
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

    // Image & Accessibility Testing Tools
    [
        'id' => 'tinypng',
        'name' => 'TinyPNG',
        'category' => 'Optimization',
        'description' => 'Smart PNG and JPEG compression service to reduce file sizes while maintaining quality.',
        'url' => 'https://tinypng.com',
        'tags' => ['free', 'compression', 'images', 'optimization']
    ],
    [
        'id' => 'wave',
        'name' => 'WAVE Web Accessibility',
        'category' => 'Development',
        'description' => 'Web accessibility evaluation tool that helps identify accessibility and WCAG errors.',
        'url' => 'https://wave.webaim.org',
        'tags' => ['free', 'accessibility', 'wcag', 'evaluation']
    ],

    // Additional DNS Tools
    [
        'id' => 'whatsmydns',
        'name' => "What's My DNS",
        'category' => 'DNS',
        'description' => 'Global DNS propagation checker with clean interface and detailed worldwide results.',
        'url' => 'https://whatsmydns.net',
        'tags' => ['free', 'dns', 'propagation', 'global', 'checker']
    ],
    [
        'id' => 'dns-lookup',
        'name' => 'DNS Lookup',
        'category' => 'DNS',
        'description' => 'Professional DNS record lookup tool with support for all record types.',
        'url' => 'https://dnslookup.org',
        'tags' => ['free', 'dns', 'records', 'lookup', 'professional']
    ],

    // Additional Performance Testing
    [
        'id' => 'yellow-lab-tools',
        'name' => 'Yellow Lab Tools',
        'category' => 'Performance Testing',
        'description' => 'Performance auditing tool analyzing loading speed, SEO, and code quality.',
        'url' => 'https://yellowlab.tools',
        'tags' => ['free', 'performance', 'seo', 'audit', 'quality']
    ],

    // Additional SSL & Security Tools
    [
        'id' => 'haveibeenpwned',
        'name' => 'Have I Been Pwned',
        'category' => 'SSL & Security',
        'description' => 'Check if your email or phone has been compromised in a data breach.',
        'url' => 'https://haveibeenpwned.com',
        'tags' => ['free', 'security', 'breach', 'email', 'password']
    ],
    [
        'id' => 'virustotal',
        'name' => 'VirusTotal',
        'category' => 'SSL & Security',
        'description' => 'Analyze suspicious files, URLs, and domains for malware detection.',
        'url' => 'https://virustotal.com',
        'tags' => ['free', 'security', 'malware', 'antivirus', 'url-scan']
    ],


    // Additional Development Tools
    [
        'id' => 'codepen',
        'name' => 'CodePen',
        'category' => 'Development',
        'description' => 'Online code editor for HTML, CSS, and JavaScript with live preview.',
        'url' => 'https://codepen.io',
        'tags' => ['free', 'code editor', 'html', 'css', 'javascript']
    ],
    [
        'id' => 'jsbin',
        'name' => 'JS Bin',
        'category' => 'Development',
        'description' => 'Collaborative JavaScript debugging and testing environment.',
        'url' => 'https://jsbin.com',
        'tags' => ['free', 'javascript', 'debugging', 'testing', 'collaborative']
    ],
    [
        'id' => 'jsfiddle',
        'name' => 'JSFiddle',
        'category' => 'Development',
        'description' => 'Test and share JavaScript, CSS, HTML or CoffeeScript online.',
        'url' => 'https://jsfiddle.net',
        'tags' => ['free', 'javascript', 'testing', 'sharing', 'coffeescript']
    ],
    [
        'id' => 'reqbin',
        'name' => 'ReqBin',
        'category' => 'Development',
        'description' => 'Online API testing tool for REST, SOAP, and HTTP APIs.',
        'url' => 'https://reqbin.com',
        'tags' => ['free', 'api', 'testing', 'rest', 'soap', 'http']
    ],

    // Additional Network Tools
    [
        'id' => 'isitdownrightnow',
        'name' => 'Is It Down Right Now',
        'category' => 'Network',
        'description' => 'Check if a website is down for everyone or just you.',
        'url' => 'https://isitdownrightnow.com',
        'tags' => ['free', 'website', 'status', 'down', 'checker']
    ],

    // Additional Optimization Tools
    [
        'id' => 'compressor-io',
        'name' => 'Compressor.io',
        'category' => 'Optimization',
        'description' => 'Optimize and compress JPEG, PNG, SVG, GIF and WEBP images online.',
        'url' => 'https://compressor.io',
        'tags' => ['free', 'image', 'compression', 'optimization', 'webp']
    ],
    [
        'id' => 'kraken-io',
        'name' => 'Kraken.io',
        'category' => 'Optimization',
        'description' => 'Advanced image optimization and compression API and web interface.',
        'url' => 'https://kraken.io',
        'tags' => ['image', 'optimization', 'api', 'compression', 'advanced']
    ],
    [
        'id' => 'minify-js',
        'name' => 'JavaScript Minifier',
        'category' => 'Optimization',
        'description' => 'Minify and compress JavaScript code to reduce file size and load times.',
        'url' => 'https://javascript-minifier.com',
        'tags' => ['free', 'javascript', 'minify', 'compression', 'optimization']
    ],

    // Additional Browser Testing
    [
        'id' => 'browserling',
        'name' => 'Browserling',
        'category' => 'Browser Testing',
        'description' => 'Live interactive cross-browser testing on real browsers in the cloud.',
        'url' => 'https://browserling.com',
        'tags' => ['browser testing', 'cross-browser', 'live', 'cloud', 'interactive']
    ],
    [
        'id' => 'lambdatest',
        'name' => 'LambdaTest',
        'category' => 'Browser Testing',
        'description' => 'Cross browser testing cloud platform for testing websites across browsers.',
        'url' => 'https://lambdatest.com',
        'tags' => ['browser testing', 'cross-browser', 'cloud', 'automated', 'responsive']
    ],


    // Proxy Sites
    [
        'id' => 'croxyproxy',
        'name' => 'CroxyProxy',
        'category' => 'Proxy Sites',
        'description' => 'Free web proxy to unblock websites and browse anonymously.',
        'url' => 'https://croxyproxy.com',
        'tags' => ['free', 'proxy', 'anonymous', 'unblock', 'privacy']
    ],
    [
        'id' => 'hide-me',
        'name' => 'Hide.me Proxy',
        'category' => 'Proxy Sites',
        'description' => 'Free anonymous web proxy service to bypass internet restrictions.',
        'url' => 'https://hide.me/en/proxy',
        'tags' => ['free', 'proxy', 'anonymous', 'privacy', 'bypass']
    ],
    [
        'id' => 'proxysite',
        'name' => 'ProxySite',
        'category' => 'Proxy Sites',
        'description' => 'Free web proxy to browse the internet anonymously and bypass restrictions.',
        'url' => 'https://proxysite.com',
        'tags' => ['free', 'proxy', 'anonymous', 'browse', 'bypass']
    ],
    [
        'id' => 'kproxy',
        'name' => 'KProxy',
        'category' => 'Proxy Sites',
        'description' => 'Public web proxy service for anonymous browsing and privacy protection.',
        'url' => 'https://kproxy.com',
        'tags' => ['free', 'proxy', 'anonymous', 'privacy', 'protection']
    ],

    // Additional Development Tools
    [
        'id' => 'codebeautify',
        'name' => 'CodeBeautify',
        'category' => 'Development',
        'description' => 'Multi-language code formatter and beautifier for CSS, HTML, JavaScript, JSON, and more.',
        'url' => 'https://codebeautify.org',
        'tags' => ['free', 'formatter', 'beautifier', 'css', 'html', 'javascript']
    ],
    [
        'id' => 'beautifier-io',
        'name' => 'Beautifier.io',
        'category' => 'Development',
        'description' => 'Advanced JavaScript and JSX beautifier with React support and customization options.',
        'url' => 'https://beautifier.io',
        'tags' => ['free', 'javascript', 'jsx', 'react', 'beautifier', 'formatter']
    ],
    [
        'id' => 'site24x7-html-beautifier',
        'name' => 'Site24x7 HTML Beautifier',
        'category' => 'Development',
        'description' => 'Professional HTML formatter that preserves comments and follows industry standards.',
        'url' => 'https://www.site24x7.com/tools/html-beautifier.html',
        'tags' => ['free', 'html', 'formatter', 'beautifier', 'professional']
    ],
    [
        'id' => 'w3c-link-checker',
        'name' => 'W3C Link Checker',
        'category' => 'Development',
        'description' => 'Official W3C tool to check links, anchors, and referenced content in web pages.',
        'url' => 'https://validator.w3.org/checklink',
        'tags' => ['free', 'links', 'validator', 'w3c', 'checker']
    ],

    // SEO Analysis Tools - New Category
    [
        'id' => 'seobility',
        'name' => 'Seobility SEO Checker',
        'category' => 'SEO',
        'description' => 'Comprehensive SEO analyzer checking 200+ criteria with prioritized improvement suggestions.',
        'url' => 'https://www.seobility.net/en/seocheck/',
        'tags' => ['free', 'seo', 'analyzer', 'comprehensive', 'audit']
    ],
    [
        'id' => 'seoptimer',
        'name' => 'SEOptimer',
        'category' => 'SEO',
        'description' => 'Fast SEO audit tool analyzing 100+ data points with white-label reporting options.',
        'url' => 'https://www.seoptimer.com',
        'tags' => ['free', 'seo', 'audit', 'fast', 'reporting']
    ],
    [
        'id' => 'neil-patel-seo',
        'name' => 'Neil Patel SEO Analyzer',
        'category' => 'SEO',
        'description' => 'Free SEO analyzer with step-by-step fix instructions and video tutorials.',
        'url' => 'https://neilpatel.com/seo-analyzer/',
        'tags' => ['free', 'seo', 'analyzer', 'tutorial', 'beginner-friendly']
    ],
    [
        'id' => 'seo-site-checkup',
        'name' => 'SEO Site Checkup',
        'category' => 'SEO',
        'description' => 'Weekly SEO monitoring tool tracking 70+ variables with competitor analysis.',
        'url' => 'https://seositecheckup.com',
        'tags' => ['seo', 'monitoring', 'competitor', 'analysis', 'tracking']
    ],
    [
        'id' => 'rankmath-analyzer',
        'name' => 'Rank Math SEO Analyzer',
        'category' => 'SEO',
        'description' => 'WordPress-focused SEO analysis tool generating downloadable PDF reports.',
        'url' => 'https://rankmath.com/tools/seo-analyzer/',
        'tags' => ['free', 'seo', 'wordpress', 'pdf', 'analyzer']
    ],
    [
        'id' => 'aioseo-analyzer',
        'name' => 'AIOSEO Analyzer',
        'category' => 'SEO',
        'description' => 'WordPress SEO analyzer detecting critical errors with actionable insights.',
        'url' => 'https://aioseo.com/seo-analyzer/',
        'tags' => ['free', 'seo', 'wordpress', 'analyzer', 'insights']
    ],

    // Additional Performance Testing Tools
    [
        'id' => 'total-validator',
        'name' => 'Total Validator',
        'category' => 'Performance Testing',
        'description' => 'Comprehensive validator testing HTML, CSS, accessibility, broken links, and spelling.',
        'url' => 'https://totalvalidator.com',
        'tags' => ['validator', 'html', 'css', 'accessibility', 'links']
    ],
    [
        'id' => 'validbot',
        'name' => 'ValidBot',
        'category' => 'Performance Testing',
        'description' => 'Complete website health checker running 100+ tests including DNS, SSL, and performance.',
        'url' => 'https://www.validbot.com',
        'tags' => ['validator', 'comprehensive', 'dns', 'ssl', 'performance']
    ],

    // Additional Security Tools
    [
        'id' => 'pentest-tools',
        'name' => 'Pentest-Tools Website Scanner',
        'category' => 'SSL & Security',
        'description' => 'Advanced security scanner detecting SQLi, XSS, and 75+ vulnerability types.',
        'url' => 'https://pentest-tools.com/website-vulnerability-scanning/website-scanner',
        'tags' => ['security', 'vulnerability', 'scanner', 'sqli', 'xss']
    ],

    // Additional Network Tools
    [
        'id' => 'testmysite-google',
        'name' => 'Think with Google Test My Site',
        'category' => 'Network',
        'description' => 'Google tool testing mobile site speed and providing revenue impact estimates.',
        'url' => 'https://testmysite.thinkwithgoogle.com',
        'tags' => ['free', 'google', 'mobile', 'speed', 'revenue']
    ],

    // Additional Accessibility Tools
    [
        'id' => 'axe-devtools',
        'name' => 'axe DevTools',
        'category' => 'Accessibility Testing',
        'description' => 'Fast accessibility testing engine with browser extensions for automated and manual testing.',
        'url' => 'https://deque.com/axe/devtools/',
        'tags' => ['accessibility', 'browser-extension', 'automated', 'manual', 'testing']
    ],
    [
        'id' => 'siteimprove-checker',
        'name' => 'Siteimprove Accessibility Checker',
        'category' => 'Accessibility Testing',
        'description' => 'Browser extension providing real-time accessibility feedback and validation.',
        'url' => 'https://siteimprove.com/integrations/browser-extensions/',
        'tags' => ['accessibility', 'browser-extension', 'real-time', 'validation']
    ]
];

?>