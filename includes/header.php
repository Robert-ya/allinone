<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($page_title) ? htmlspecialchars($page_title) . ' - ' : '' ?>Web Development Tools Directory</title>
    <meta name="description" content="Discover 50+ essential web hosting and development tools. Browse by category, search, and find the perfect tools for your web development needs.">
    <meta name="keywords" content="web hosting, development tools, hosting tools, web development, dns tools, ssl, performance testing, monitoring">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="canonical" href="https://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
    <meta property="og:title" content="Web Development Tools Directory">
    <meta property="og:description" content="Discover 50+ essential web hosting and development tools">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="Web Development Tools Directory">
    <meta property="twitter:description" content="Discover 50+ essential web hosting and development tools">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🔧</text></svg>">
</head>
<body>
    <header class="site-header">
        <nav class="nav-container">
            <div class="nav-brand">
                <a href="?" class="brand-link">
                    <span class="brand-icon">🔧</span>
                    <span class="brand-text">DevTools Directory</span>
                </a>
            </div>
            <div class="nav-menu">
                <a href="?" class="nav-link <?= ($page === 'home' || empty($page)) ? 'active' : '' ?>">Home</a>
                <a href="?page=about" class="nav-link <?= $page === 'about' ? 'active' : '' ?>">About</a>
                <a href="admin.php" class="nav-link admin-link">Admin</a>
            </div>
        </nav>
    </header>
