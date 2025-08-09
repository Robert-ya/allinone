<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 
        if ($page === 'about') {
            echo 'About All In One Host - 72 Online Web Development Tools Directory';
        } elseif (!empty($search)) {
            echo 'Search Results for "' . htmlspecialchars($search) . '" - All In One Host';
        } elseif (!empty($category) && $category !== 'DNS Tools') {
            echo htmlspecialchars($category) . ' Tools - All In One Host Directory';
        } else {
            echo 'All In One Host - 72 Essential Online Web Tools for Developers & Hosting';
        }
    ?></title>
    <meta name="description" content="<?php 
        if ($page === 'about') {
            echo 'Discover All In One Host - a comprehensive directory of 72 curated online web tools for developers, system administrators, and hosting professionals. No downloads required.';
        } elseif (!empty($search)) {
            echo 'Find ' . htmlspecialchars($search) . ' tools in our directory of 72 online web development tools. DNS, SEO, performance testing, security, and more.';
        } elseif (!empty($category) && $category !== 'DNS Tools') {
            echo 'Browse ' . htmlspecialchars($category) . ' tools in our curated directory. Professional online tools for web development, hosting, and system administration.';
        } else {
            echo 'All In One Host - 72 essential online web tools for developers. DNS, SEO, performance, security, accessibility tools.';
        }
    ?>">
    <meta name="keywords" content="web development tools, online tools, dns tools, seo tools, performance testing, ssl checker, accessibility testing, development utilities, hosting tools, security scanner, website validation, code formatter">
    <meta name="author" content="All In One Host">
    <meta name="robots" content="index, follow">
    <meta name="rating" content="general">
    <meta name="distribution" content="global">
    <link rel="preload" href="assets/style.min.css" as="style">
    <link rel="stylesheet" href="assets/style.min.css">
    <link rel="preload" href="assets/main.min.js" as="script">
    <script src="assets/main.min.js" defer></script>
    <link rel="canonical" href="<?= getCanonicalUrl() ?>">
    
    <!-- Structured Data JSON-LD -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "All In One Host",
        "description": "Comprehensive directory of <?= count($tools) ?> essential online web development tools for developers, system administrators, and hosting professionals.",
        "url": "<?= getStructuredDataUrl() ?>",
        "potentialAction": {
            "@type": "SearchAction",
            "target": {
                "@type": "EntryPoint",
                "urlTemplate": "<?= getStructuredDataUrl() ?>/?search={search_term_string}"
            },
            "query-input": "required name=search_term_string"
        }
    }
    </script>
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="All In One Host">
    <meta property="og:url" content="<?= getCanonicalUrl() ?>">
    <meta property="og:title" content="<?php 
        if ($page === 'about') {
            echo 'About All In One Host - 72 Online Web Development Tools Directory';
        } elseif (!empty($category) && $category !== 'DNS Tools') {
            echo htmlspecialchars($category) . ' Tools - All In One Host Directory';
        } else {
            echo 'All In One Host - 72 Essential Online Web Tools for Developers';
        }
    ?>">
    <meta property="og:description" content="<?php 
        if ($page === 'about') {
            echo 'Comprehensive directory of 72 curated online web tools for developers, system administrators, and hosting professionals. No downloads required.';
        } elseif (!empty($category) && $category !== 'DNS Tools') {
            echo 'Professional ' . htmlspecialchars($category) . ' tools for web development, hosting, and system administration. All tools accessible online.';
        } else {
            echo 'Discover 72 essential online web tools: DNS, SEO, performance testing, security scanning, accessibility testing, and development utilities.';
        }
    ?>">
    <meta property="og:locale" content="en_US">
    <meta property="og:image" content="<?= getStructuredDataUrl() ?>/assets/og-image.svg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="All In One Host - 72 Essential Online Web Development Tools">
    <meta property="article:author" content="All In One Host">
    <meta property="article:section" content="Web Development Tools">
    
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@allinonehost">
    <meta name="twitter:title" content="<?php 
        if ($page === 'about') {
            echo 'About All In One Host - 72 Online Web Development Tools';
        } elseif (!empty($category) && $category !== 'DNS Tools') {
            echo htmlspecialchars($category) . ' Tools - All In One Host';
        } else {
            echo 'All In One Host - 72 Essential Online Web Tools';
        }
    ?>">
    <meta name="twitter:description" content="<?php 
        if ($page === 'about') {
            echo '72 curated online web tools for developers and hosting professionals. DNS, SEO, performance, security, and accessibility tools.';
        } elseif (!empty($category) && $category !== 'DNS Tools') {
            echo 'Professional ' . htmlspecialchars($category) . ' tools for web development and system administration. All accessible online.';
        } else {
            echo 'Essential online tools for developers: DNS, SEO, performance, security, accessibility, development utilities.';
        }
    ?>">
    <meta name="twitter:image" content="<?= getStructuredDataUrl() ?>/assets/og-image.svg">
    <meta name="twitter:image:alt" content="All In One Host - 72 Essential Online Web Development Tools">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'><rect width='32' height='32' rx='8' fill='url(%23brandGradient)'/><path d='M8 12h16M16 8l6 6-6 6' stroke='white' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round'/><circle cx='10' cy='12' r='1.5' fill='white'/><circle cx='16' cy='20' r='1.5' fill='white'/><defs><linearGradient id='brandGradient' x1='0%25' y1='0%25' x2='100%25' y2='100%25'><stop offset='0%25' style='stop-color:%23667eea'/><stop offset='100%25' style='stop-color:%23764ba2'/></linearGradient></defs></svg>">
    <link rel="sitemap" type="application/xml" href="/sitemap.xml">
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
