<?php
require_once 'includes/security.php';
setSecurityHeaders();
startSecureSession();
require_once 'includes/functions.php';
require_once 'includes/url_canonical.php';
require_once 'data/tools.php';

// Set appropriate caching headers based on content type
setCacheHeaders('static', 3600);

// Enforce canonical URL (non-www)
enforceCanonicalUrl();

// Ensure $tools variable is available
global $tools;
if (!isset($tools)) {
    $tools = [];
}

// Simple router for clean URLs
$request_uri = $_SERVER['REQUEST_URI'];
$path = parse_url($request_uri, PHP_URL_PATH);

// Remove leading slash and split path
$path_parts = explode('/', trim($path, '/'));

// Initialize variables
$page = 'home';
$category = '';
$search = '';
$tool_id = '';

// Route handling
if (count($path_parts) >= 2 && $path_parts[0] === 'category') {
    // Handle category URLs: /category/dns, /category/performance-testing, etc.
    $category_slug = $path_parts[1];
    
    // Map category slugs to actual category names
    $category_mapping = [
        'dns' => 'DNS',
        'performance-testing' => 'Performance Testing',
        'ssl-&-security' => 'SSL & Security',
        'ssl-%26-security' => 'SSL & Security',
        'ssl---security' => 'SSL & Security',
        'seo' => 'SEO',
        'development' => 'Development',
        'network' => 'Network',
        'accessibility-testing' => 'Accessibility Testing',
        'optimization' => 'Optimization',
        'ai-assistants' => 'AI Assistants',
        'browser-testing' => 'Browser Testing',
        'hosting-&-cdn' => 'Hosting & CDN',
        'hosting-%26-cdn' => 'Hosting & CDN',
        'hosting---cdn' => 'Hosting & CDN',
        'design-&-optimization' => 'Design & Optimization',
        'design-%26-optimization' => 'Design & Optimization',
        'design---optimization' => 'Design & Optimization',
        'proxy-sites' => 'Proxy Sites'
    ];
    
    $category = $category_mapping[$category_slug] ?? ucwords(str_replace('-', ' ', $category_slug));
} elseif (count($path_parts) >= 1 && $path_parts[0] === 'about') {
    // Handle about page: /about
    $page = 'about';
} elseif (count($path_parts) >= 1 && $path_parts[0] === 'all-tools') {
    // Handle all tools: /all-tools
    $category = '';
} elseif (count($path_parts) >= 2 && $path_parts[0] === 'search') {
    // Handle search: /search/term
    $search = urldecode($path_parts[1]);
} else {
    // Handle query parameters as fallback
    $page = $_GET['page'] ?? 'home';
    $category = $_GET['category'] ?? ($page === 'about' ? '' : 'DNS');
    $search = $_GET['search'] ?? '';
    $tool_id = $_GET['tool'] ?? '';
}

// Set default category to DNS if nothing else is specified
if ($page === 'home' && empty($category) && empty($search)) {
    $category = 'DNS';
}

// Handle redirects
if (!empty($tool_id)) {
    handleToolRedirect($tool_id, $tools);
    exit;
}

// Filter tools based on category and search
$filtered_tools = filterTools($tools, $category, $search);
$categories = getCategories($tools);

include 'includes/header.php';
?>

<main class="main-layout">
    <?php if ($page === 'about'): ?>
        <!-- About Hero Section -->
        <section class="hero about-hero">
            <h1>About All In One Host</h1>
            <p>Your comprehensive directory for web hosting,development and devops tools</p>
        </section>

        <div class="about-layout">
            <div class="about-content">
                <div class="about-section">
                    <h2>Our Mission</h2>
                    <p>All In One Host is your comprehensive directory for web hosting,development and devops tools. We've curated a collection of <?= count($tools) ?> essential online tools across 13 categories, each carefully selected for its utility, reliability, and relevance to web hosting professionals, developers, and DevOps engineers. Every tool has been verified to ensure no duplicates and maximum value.</p>
                </div>

                <div class="about-section">
                    <h2>What You'll Find</h2>
                    <div class="categories-grid">
                        <?php foreach ($categories as $cat => $count): ?>
                            <div class="category-item">
                                <div class="category-icon"><?= getCategoryLogo($cat) ?></div>
                                <div class="category-info">
                                    <h3><?= htmlspecialchars($cat) ?></h3>
                                    <span class="category-count"><?= $count ?> tools</span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="about-section">
                    <h2>How to Use Our Directory</h2>
                    <div class="steps-grid">
                        <div class="step-item">
                            <div class="step-number">1</div>
                            <div class="step-content">
                                <h3>Browse or Search</h3>
                                <p>Use the sidebar to browse tools by category or use the search function to find specific tools</p>
                            </div>
                        </div>
                        <div class="step-item">
                            <div class="step-number">2</div>
                            <div class="step-content">
                                <h3>Click to Visit</h3>
                                <p>Click on any tool card to visit its official website and start using it immediately</p>
                            </div>
                        </div>
                        <div class="step-item">
                            <div class="step-number">3</div>
                            <div class="step-content">
                                <h3>New Tab Convenience</h3>
                                <p>All external links open in new tabs so you can keep our directory open for reference</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="about-section">
                    <h2>Lightning Fast & Developer-First</h2>
                    <p>Experience blazing-fast 2.8ms load times with our performance-optimized directory! Whether you're a seasoned developer, system administrator, or just getting started with web hosting, our lightning-quick platform delivers instant access to the tools you need. From DNS troubleshooting to SEO analysis, performance optimization to accessibility testing - we've engineered <?= count($tools) ?> carefully curated, duplicate-free online tools for maximum speed and efficiency.</p>
                    
                    <div class="stats-grid">
                        <div class="stat-item">
                            <div class="stat-number"><?= count($tools) ?></div>
                            <div class="stat-label">Online Tools</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number"><?= count($categories) ?></div>
                            <div class="stat-label">Categories</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">100%</div>
                            <div class="stat-label">Free Access</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        
        <!-- Hero Section -->
        <section class="hero">
            <h1>All In One Host</h1>
            <p>Your comprehensive directory for web hosting,development and devops tools</p>
        </section>

        <div class="content-layout">
            <!-- Sidebar -->
            <aside class="sidebar">
                <h2>Tool Categories</h2>
                <nav class="category-nav" aria-label="Tool categories navigation">
                    <?php foreach ($categories as $cat => $count): ?>
                        <a href="/category/<?= urlencode(strtolower(str_replace([' ', '&'], ['-', '-'], $cat))) ?>" class="category-nav-item <?= $category === $cat ? 'active' : '' ?>" title="Browse <?= $count ?> <?= htmlspecialchars($cat) ?> tools" aria-label="<?= htmlspecialchars($cat) ?> category with <?= $count ?> tools">
                            <div class="nav-icon" aria-hidden="true"><?= getCategoryLogo($cat) ?></div>
                            <span><?= htmlspecialchars($cat) ?></span>
                            <span class="nav-count" aria-label="<?= $count ?> tools in this category"><?= $count ?></span>
                        </a>
                    <?php endforeach; ?>
                    <a href="/all-tools" class="category-nav-item <?= (isset($_GET['category']) && $_GET['category'] === '') ? 'active' : '' ?>" title="Browse all <?= count($tools) ?> online tools" aria-label="All tools category with <?= count($tools) ?> tools">
                        <div class="nav-icon" aria-hidden="true"><?= getCategoryLogo('All Tools') ?></div>
                        <span>All Tools</span>
                        <span class="nav-count" aria-label="<?= count($tools) ?> total tools"><?= count($tools) ?></span>
                    </a>
                </nav>
            </aside>

            <!-- Main Content -->
            <div class="main-content">



        <!-- Tools Grid -->
        <section class="tools">
            <?php if (empty($filtered_tools)): ?>
                <div class="no-results">
                    <h3>No tools found</h3>
                    <p>Try adjusting your search terms or browse a different category.</p>
                </div>
            <?php else: ?>
                <div class="tools-grid">
                    <?php foreach ($filtered_tools as $tool): ?>
                        <article class="tool-card" data-category="<?= htmlspecialchars($tool['category']) ?>" data-url="<?= htmlspecialchars($tool['url']) ?>" data-tool-id="<?= htmlspecialchars($tool['id']) ?>" onclick="openTool('<?= htmlspecialchars($tool['url']) ?>', '<?= htmlspecialchars($tool['id']) ?>')" style="cursor: pointer;" itemscope itemtype="https://schema.org/SoftwareApplication">
                            <header class="tool-header">
                                <div class="tool-name-section">
                                    <div class="tool-logo" aria-hidden="true"><?= getToolLogo($tool['name']) ?></div>
                                    <h3 class="tool-name" itemprop="name"><?= htmlspecialchars($tool['name']) ?></h3>
                                </div>
                                <span class="tool-category" itemprop="applicationCategory"><?= htmlspecialchars($tool['category']) ?></span>
                            </header>
                            <p class="tool-description" itemprop="description"><?= htmlspecialchars($tool['description']) ?></p>
                            <div class="tool-footer">
                                <div class="tool-tags">
                                    <?php 
                                    $maxTags = 3;
                                    $tagCount = 0;
                                    foreach ($tool['tags'] as $tag): 
                                        if ($tagCount >= $maxTags) break;
                                        $tagCount++;
                                    ?>
                                        <span class="tag" itemprop="keywords"><?= htmlspecialchars($tag) ?></span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <meta itemprop="url" content="<?= htmlspecialchars($tool['url']) ?>">
                            <meta itemprop="operatingSystem" content="Web Browser">
                            <div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                                <meta itemprop="price" content="0">
                                <meta itemprop="priceCurrency" content="USD">
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
</main>



<?php include 'includes/footer.php'; ?>
