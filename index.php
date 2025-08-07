<?php
session_start();
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
    <?php if ($page === 'home'): ?>
        <!-- Hero Section -->
        <section class="hero">
            <h1>All In One Host</h1>
            <p>Your comprehensive directory for web hosting, DNS, SSL, and development tools</p>
            
            <!-- Search Bar -->
            <div class="search-container">
                <form method="GET" action="" class="search-form">
                    <input type="text" name="search" placeholder="Search tools..." value="<?= htmlspecialchars($search) ?>" class="search-input">
                    <button type="submit" class="search-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.35-4.35"></path>
                        </svg>
                    </button>
                </form>
            </div>
        </section>

        <div class="content-layout">
            <!-- Sidebar -->
            <aside class="sidebar">
                <h3>Categories</h3>
                <nav class="category-nav">
                    <a href="?page=home" class="category-nav-item <?= empty($category) ? 'active' : '' ?>">
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

                <!-- Results Info -->
        <?php if (!empty($search) || !empty($category)): ?>
            <div class="results-info">
                <p>
                    <?php if (!empty($search)): ?>
                        Search results for "<strong><?= htmlspecialchars($search) ?></strong>"
                    <?php endif; ?>
                    <?php if (!empty($category)): ?>
                        <?= !empty($search) ? ' in ' : '' ?>Category: <strong><?= htmlspecialchars($category) ?></strong>
                    <?php endif; ?>
                    - <?= count($filtered_tools) ?> tools found
                </p>
                <a href="?page=home" class="clear-filters">Clear filters</a>
            </div>
        <?php endif; ?>

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
                        <div class="tool-card" data-category="<?= htmlspecialchars($tool['category']) ?>" onclick="window.open('<?= htmlspecialchars($tool['url']) ?>', '_blank')">
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
        <section class="about">
            <h1>About Our Directory</h1>
            <div class="about-content">
                <p>This directory contains a curated collection of over 50 essential web hosting and development tools. Each tool has been carefully selected based on its utility, reliability, and relevance to web developers and hosting professionals.</p>
                
                <h2>Categories Include:</h2>
                <ul>
                    <?php foreach ($categories as $cat => $count): ?>
                        <li><strong><?= htmlspecialchars($cat) ?></strong> - <?= $count ?> tools</li>
                    <?php endforeach; ?>
                </ul>
                
                <h2>How to Use</h2>
                <ol>
                    <li>Browse tools by category or use the search function</li>
                    <li>Click on any tool to visit its website</li>
                    <li>All external links open in new tabs for your convenience</li>
                </ol>
            </div>
        </section>
    <?php endif; ?>
</main>

<script>
// Simple search enhancement
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.querySelector('.search-input');
    const toolCards = document.querySelectorAll('.tool-card');
    
    // Live search functionality
    if (searchInput && toolCards.length > 0) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            
            toolCards.forEach(card => {
                const name = card.querySelector('.tool-name').textContent.toLowerCase();
                const description = card.querySelector('.tool-description').textContent.toLowerCase();
                const category = card.dataset.category.toLowerCase();
                
                if (name.includes(searchTerm) || description.includes(searchTerm) || category.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    }
    
    // Track tool clicks for analytics
    document.querySelectorAll('.tool-link').forEach(link => {
        link.addEventListener('click', function() {
            const toolName = this.closest('.tool-card').querySelector('.tool-name').textContent;
            console.log('Tool clicked:', toolName);
        });
    });
});
</script>

<?php include 'includes/footer.php'; ?>
