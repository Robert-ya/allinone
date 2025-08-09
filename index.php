<?php
require_once 'includes/security.php';
setSecurityHeaders();
startSecureSession();
require_once 'includes/functions.php';
require_once 'includes/url_canonical.php';
require_once 'data/tools.php';

// Enforce canonical URL (non-www)
enforceCanonicalUrl();

// Ensure $tools variable is available
global $tools;
if (!isset($tools)) {
    $tools = [];
}

// Handle routing
$page = $_GET['page'] ?? 'home';
$category = $_GET['category'] ?? ($page === 'about' ? '' : 'DNS Tools'); // Default to DNS Tools only if not About page
$search = $_GET['search'] ?? '';
$tool_id = $_GET['tool'] ?? '';

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
            <p>Your comprehensive directory for web hosting, DNS, SSL, and development tools</p>
        </section>

        <div class="about-layout">
            <div class="about-content">
                <div class="about-section">
                    <h2>Our Mission</h2>
                    <p>All In One Host serves as your comprehensive directory for web hosting, DNS, SSL, SEO analysis, and development tools. We've curated a collection of <?= count($tools) ?> essential online tools, each carefully selected for its utility, reliability, and relevance to web developers and hosting professionals. Every tool has been verified to ensure no duplicates and maximum value.</p>
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
                    <h2>Built for Developers</h2>
                    <p>Whether you're a seasoned developer, system administrator, or just getting started with web hosting, our directory provides quick access to the tools you need. From DNS troubleshooting to SEO analysis, performance optimization to accessibility testing - we've got you covered with <?= count($tools) ?> carefully curated, duplicate-free online tools.</p>
                    
                    <div class="stats-grid">
                        <div class="stat-item">
                            <div class="stat-number"><?= count($tools) ?></div>
                            <div class="stat-label">Online Tools</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">0</div>
                            <div class="stat-label">Duplicates</div>
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
            <h1><?php 
                if (!empty($search)) {
                    echo 'All In One Host - Search Results';
                } elseif (!empty($category) && $category !== 'DNS') {
                    echo 'All In One Host - ' . htmlspecialchars($category) . ' Tools';
                } else {
                    echo 'All In One Host';
                }
            ?></h1>
            <p><?php 
                if (!empty($search)) {
                    echo 'Showing results for "' . htmlspecialchars($search) . '" in our directory of professional online tools';
                } elseif (!empty($category) && $category !== 'DNS') {
                    echo 'Professional ' . htmlspecialchars($category) . ' for developers, system administrators, and hosting professionals';
                } else {
                    echo 'Your comprehensive directory for web hosting, DNS, SSL, and development tools';
                }
            ?></p>
        </section>

        <div class="content-layout">
            <!-- Sidebar -->
            <aside class="sidebar">
                <h2>Tool Categories</h2>
                <nav class="category-nav" aria-label="Tool categories navigation">
                    <?php foreach ($categories as $cat => $count): ?>
                        <a href="?category=<?= urlencode($cat) ?>" class="category-nav-item <?= $category === $cat ? 'active' : '' ?>" title="Browse <?= $count ?> <?= htmlspecialchars($cat) ?> tools" aria-label="<?= htmlspecialchars($cat) ?> category with <?= $count ?> tools">
                            <div class="nav-icon" aria-hidden="true"><?= getCategoryLogo($cat) ?></div>
                            <span><?= htmlspecialchars($cat) ?></span>
                            <span class="nav-count" aria-label="<?= $count ?> tools in this category"><?= $count ?></span>
                        </a>
                    <?php endforeach; ?>
                    <a href="?category=" class="category-nav-item <?= (isset($_GET['category']) && $_GET['category'] === '') ? 'active' : '' ?>" title="Browse all <?= count($tools) ?> online tools" aria-label="All tools category with <?= count($tools) ?> tools">
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
                        <article class="tool-card" data-category="<?= htmlspecialchars($tool['category']) ?>" data-url="<?= htmlspecialchars($tool['url']) ?>" itemscope itemtype="https://schema.org/SoftwareApplication">
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
                                    <?php foreach ($tool['tags'] as $tag): ?>
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

<script src="assets/main.js"></script>

<?php include 'includes/footer.php'; ?>
