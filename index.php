<?php
require_once 'includes/security.php';
setSecurityHeaders();
startSecureSession();
require_once 'includes/functions.php';
require_once 'data/tools.php';

// Handle routing
$page = $_GET['page'] ?? 'home';
$category = $_GET['category'] ?? '';
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
    <?php if ($page === 'home' || !empty($category) || !empty($search)): ?>
        <!-- Hero Section -->
        <section class="hero">
            <h1>All In One Host</h1>
            <p>Your comprehensive directory for web hosting, DNS, SSL, and development tools</p>
        </section>

        <div class="content-layout">
            <!-- Sidebar -->
            <aside class="sidebar">
                <h3>Categories</h3>
                <nav class="category-nav">
                    <a href="?" class="category-nav-item <?= empty($category) ? 'active' : '' ?>">
                        <div class="nav-icon"><?= getCategoryLogo('All Tools') ?></div>
                        <span>All Tools</span>
                        <span class="nav-count"><?= count($tools) ?></span>
                    </a>
                    <?php foreach ($categories as $cat => $count): ?>
                        <a href="?category=<?= urlencode($cat) ?>" class="category-nav-item <?= $category === $cat ? 'active' : '' ?>">
                            <div class="nav-icon"><?= getCategoryLogo($cat) ?></div>
                            <span><?= htmlspecialchars($cat) ?></span>
                            <span class="nav-count"><?= $count ?></span>
                        </a>
                    <?php endforeach; ?>
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
                        <div class="tool-card" data-category="<?= htmlspecialchars($tool['category']) ?>" data-url="<?= htmlspecialchars($tool['url']) ?>">
                            <div class="tool-header">
                                <div class="tool-name-section">
                                    <div class="tool-logo"><?= getToolLogo($tool['name']) ?></div>
                                    <h3 class="tool-name"><?= htmlspecialchars($tool['name']) ?></h3>
                                </div>
                                <span class="tool-category"><?= htmlspecialchars($tool['category']) ?></span>
                            </div>
                            <p class="tool-description"><?= htmlspecialchars($tool['description']) ?></p>
                            <div class="tool-footer">
                                <div class="tool-tags">
                                    <?php foreach ($tool['tags'] as $tag): ?>
                                        <span class="tag"><?= htmlspecialchars($tag) ?></span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            </div>
        </div>

    <?php elseif ($page === 'about'): ?>
        <!-- About Hero Section -->
        <section class="hero about-hero">
            <h1>About All In One Host</h1>
            <p>Discover the story behind your comprehensive web development toolkit</p>
        </section>

        <div class="about-layout">
            <div class="about-content">
                <div class="about-section">
                    <h2>Our Mission</h2>
                    <p>All In One Host serves as your comprehensive directory for web hosting, DNS, SSL, and development tools. We've curated a collection of over 50 essential tools, each carefully selected for its utility, reliability, and relevance to web developers and hosting professionals.</p>
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
                    <p>Whether you're a seasoned developer, system administrator, or just getting started with web hosting, our directory provides quick access to the tools you need. From DNS troubleshooting to performance optimization, security scanning to accessibility testing - we've got you covered.</p>
                </div>
            </div>
        </div>
    <?php endif; ?>
</main>

<script src="assets/main.js"></script>

<?php include 'includes/footer.php'; ?>
