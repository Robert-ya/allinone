<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 
        if (isset($page) && $page === 'about') {
            echo 'About All In One Host - 72 Professional Online Web Development Tools Directory';
        } elseif (isset($search) && !empty($search)) {
            echo 'Search Results for "' . htmlspecialchars($search) . '" - All In One Host Tools Directory';
        } elseif (isset($category) && !empty($category) && $category !== 'DNS') {
            echo htmlspecialchars($category) . ' Tools - All In One Host Professional Directory';
        } else {
            echo 'All In One Host - 72 Essential Online Web Tools for Developers & System Administrators';
        }
    ?></title>
    <meta name="description" content="<?php 
        if (isset($page) && $page === 'about') {
            echo 'Discover All In One Host - a comprehensive directory of 72 curated online web tools for developers, system administrators, and hosting professionals. DNS, SEO, performance, security, accessibility testing tools. No downloads required.';
        } elseif (isset($search) && !empty($search)) {
            echo 'Find ' . htmlspecialchars($search) . ' tools in our directory of 72 professional online web development tools. DNS, SEO, performance testing, security scanning, and more.';
        } elseif (isset($category) && !empty($category) && $category !== 'DNS') {
            echo 'Browse ' . htmlspecialchars($category) . ' tools in our curated directory. Professional online tools for web development, hosting, and system administration. All tools accessible instantly.';
        } else {
            echo 'All In One Host - 72 essential online web tools for developers. DNS management, SEO analysis, performance testing, security scanning, accessibility validation, and development utilities.';
        }
    ?>">
    <meta name="keywords" content="web development tools, online tools directory, dns tools, seo analysis tools, performance testing, ssl checker, accessibility testing, development utilities, hosting tools, security scanner, website validation, code formatter, system administration tools, developer resources">
    <meta name="author" content="All In One Host">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="rating" content="general">
    <meta name="distribution" content="global">
    <meta name="revisit-after" content="7 days">
    <meta name="language" content="English">
    <meta name="geo.region" content="US">
    <meta name="geo.placename" content="United States">
    <link rel="preload" href="assets/style.min.css" as="style">
    <link rel="stylesheet" href="assets/style.min.css">
    <link rel="preload" href="assets/main.min.js" as="script">
    <script src="assets/main.min.js" defer></script>
    <link rel="canonical" href="<?= getCanonicalUrl() ?>">
    <link rel="alternate" type="application/rss+xml" title="All In One Host Tools" href="<?= getStructuredDataUrl() ?>/rss.xml">
    
    <!-- Enhanced Structured Data JSON-LD -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": ["WebSite", "SoftwareApplication"],
        "name": "All In One Host",
        "alternateName": "All In One Host Tools Directory",
        "description": "Comprehensive directory of <?= isset($tools) ? count($tools) : 72 ?> essential online web development tools for developers, system administrators, and hosting professionals.",
        "url": "<?= getStructuredDataUrl() ?>",
        "applicationCategory": "DeveloperApplication",
        "operatingSystem": "Web Browser",
        "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "USD"
        },
        "author": {
            "@type": "Organization",
            "name": "All In One Host"
        },
        "publisher": {
            "@type": "Organization",
            "name": "All In One Host"
        },
        "dateModified": "<?= date('Y-m-d') ?>",
        "datePublished": "2025-08-09",
        "inLanguage": "en-US",
        "keywords": ["web development tools", "dns tools", "seo tools", "performance testing", "security tools", "accessibility testing", "developer resources"],
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
    
    <!-- Enhanced Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="All In One Host">
    <meta property="og:url" content="<?= getCanonicalUrl() ?>">
    <meta property="og:title" content="<?php 
        if (isset($page) && $page === 'about') {
            echo 'About All In One Host - 72 Professional Online Web Development Tools Directory';
        } elseif (isset($category) && !empty($category) && $category !== 'DNS') {
            echo htmlspecialchars($category) . ' Tools - All In One Host Professional Directory';
        } else {
            echo 'All In One Host - 72 Essential Online Web Tools for Developers & System Administrators';
        }
    ?>">
    <meta property="og:description" content="<?php 
        if (isset($page) && $page === 'about') {
            echo 'Comprehensive directory of 72 curated online web tools for developers, system administrators, and hosting professionals. DNS, SEO, performance, security, accessibility testing. No downloads required.';
        } elseif (isset($category) && !empty($category) && $category !== 'DNS') {
            echo 'Professional ' . htmlspecialchars($category) . ' tools for web development, hosting, and system administration. All tools accessible online instantly.';
        } else {
            echo 'Discover 72 essential online web tools: DNS, SEO, performance testing, security scanning, accessibility testing, and development utilities.';
        }
    ?>">
    <meta property="og:locale" content="en_US">
    <meta property="og:image" content="<?= getStructuredDataUrl() ?>/assets/og-image.svg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="All In One Host - 72 Essential Online Web Development Tools">
    <meta property="og:image:type" content="image/svg+xml">
    <meta property="article:author" content="All In One Host">
    <meta property="article:section" content="Web Development Tools">
    <meta property="article:published_time" content="2025-08-09T00:00:00+00:00">
    <meta property="article:modified_time" content="<?= date('c') ?>">
    
    <!-- Enhanced Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@allinonehost">
    <meta name="twitter:creator" content="@allinonehost">
    <meta name="twitter:title" content="<?php 
        if (isset($page) && $page === 'about') {
            echo 'About All In One Host - 72 Professional Online Web Development Tools';
        } elseif (isset($category) && !empty($category) && $category !== 'DNS') {
            echo htmlspecialchars($category) . ' Tools - All In One Host Professional Directory';
        } else {
            echo 'All In One Host - 72 Essential Online Web Tools for Developers';
        }
    ?>">
    <meta name="twitter:description" content="<?php 
        if (isset($page) && $page === 'about') {
            echo '72 curated online web tools for developers and hosting professionals. DNS, SEO, performance, security, and accessibility tools. No downloads required.';
        } elseif (isset($category) && !empty($category) && $category !== 'DNS') {
            echo 'Professional ' . htmlspecialchars($category) . ' tools for web development and system administration. All accessible online instantly.';
        } else {
            echo 'Essential online tools for developers: DNS management, SEO analysis, performance testing, security scanning, accessibility validation, development utilities.';
        }
    ?>">
    <meta name="twitter:image" content="<?= getStructuredDataUrl() ?>/assets/og-image.svg">
    <meta name="twitter:image:alt" content="All In One Host - 72 Essential Online Web Development Tools">
    <meta name="twitter:domain" content="allinonehost.replit.app">
    
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
