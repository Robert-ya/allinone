<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($page_title) ? htmlspecialchars($page_title) . ' - ' : '' ?>All In One Host - Web Tools Directory</title>
    <meta name="description" content="All In One Host - Discover 50+ essential web hosting and development tools. Browse by category, search, and find the perfect tools for your web development needs.">
    <meta name="keywords" content="all in one host, web hosting, development tools, hosting tools, web development, dns tools, ssl, performance testing, monitoring">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="canonical" href="https://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
    <meta property="og:title" content="All In One Host - Web Tools Directory">
    <meta property="og:description" content="All In One Host - Discover 50+ essential web hosting and development tools">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="All In One Host - Web Tools Directory">
    <meta property="twitter:description" content="All In One Host - Discover 50+ essential web hosting and development tools">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🔧</text></svg>">
</head>
<body>
    <header class="site-header">
        <nav class="nav-container">
            <div class="nav-brand">
                <a href="?" class="brand-link">
                    <div class="brand-logo">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="32" height="32" rx="8" fill="url(#brandGradient)"/>
                            <path d="M8 12h16M16 8l6 6-6 6" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="10" cy="12" r="1.5" fill="white"/>
                            <circle cx="16" cy="20" r="1.5" fill="white"/>
                            <defs>
                                <linearGradient id="brandGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#667eea"/>
                                    <stop offset="100%" style="stop-color:#764ba2"/>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <span class="brand-text">All In One Host</span>
                </a>
            </div>
            <div class="nav-menu">
                <a href="?" class="nav-link <?= ($page === 'home' || empty($page)) ? 'active' : '' ?>">Home</a>
                <a href="?page=about" class="nav-link <?= $page === 'about' ? 'active' : '' ?>">About</a>
                <a href="admin.php" class="nav-link admin-link">Admin</a>
            </div>
        </nav>
    </header>
