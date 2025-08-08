<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= (isset($page_title) && !empty($page_title)) ? htmlspecialchars($page_title) . ' - ' : '' ?>All In One Host - Web Tools Directory</title>
    <meta name="description" content="All In One Host - Discover 54 essential web hosting and development tools. Browse by category, search, and find the perfect tools for your web development needs.">
    <meta name="keywords" content="all in one host, web hosting, development tools, hosting tools, web development, dns tools, ssl, performance testing, monitoring">
    <link rel="preload" href="assets/style.css" as="style">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="preload" href="assets/main.js" as="script">
    <script src="assets/main.js" defer></script>
    <link rel="canonical" href="<?= (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
    <meta property="og:title" content="All In One Host - Web Tools Directory">
    <meta property="og:description" content="All In One Host - Discover 54 essential web hosting and development tools">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="All In One Host - Web Tools Directory">
    <meta property="twitter:description" content="All In One Host - Discover 54 essential web hosting and development tools">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'><rect width='32' height='32' rx='8' fill='url(%23brandGradient)'/><path d='M8 12h16M16 8l6 6-6 6' stroke='white' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round'/><circle cx='10' cy='12' r='1.5' fill='white'/><circle cx='16' cy='20' r='1.5' fill='white'/><defs><linearGradient id='brandGradient' x1='0%25' y1='0%25' x2='100%25' y2='100%25'><stop offset='0%25' style='stop-color:%23667eea'/><stop offset='100%25' style='stop-color:%23764ba2'/></linearGradient></defs></svg>">
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
            <button class="mobile-menu-toggle" id="mobileMenuToggle">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="nav-menu" id="navMenu">
                <a href="?" class="nav-link <?= (!isset($_GET['page']) || $_GET['page'] === 'home') ? 'active' : '' ?>">Home</a>
                <a href="?page=about" class="nav-link <?= ($_GET['page'] ?? '') === 'about' ? 'active' : '' ?>">About</a>
                <form method="GET" action="" class="header-search-form">
                    <input type="text" name="search" placeholder="Search tools..." value="<?= htmlspecialchars($_GET['search'] ?? '') ?>" class="header-search-input">
                    <button type="submit" class="header-search-btn">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.35-4.35"></path>
                        </svg>
                    </button>
                </form>
            </div>
        </nav>
    </header>
