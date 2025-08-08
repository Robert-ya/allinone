    <footer class="site-footer">
        <div class="footer-container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>About This Directory</h3>
                    <p>A curated collection of <?= count($tools) ?> essential online web development tools to help developers, system administrators, and hosting professionals find the right tools for their projects.</p>
                </div>
                <div class="footer-section">
                    <h3>Categories</h3>
                    <ul class="footer-links">
                        <?php 
                        $footer_categories = array_slice(array_keys(getCategories($tools)), 0, 6);
                        foreach ($footer_categories as $cat): 
                        ?>
                            <li><a href="?category=<?= urlencode($cat) ?>"><?= htmlspecialchars($cat) ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="?" title="Browse all <?= count($tools) ?> web development tools">All Tools</a></li>
                        <li><a href="?page=about" title="Learn more about All In One Host directory">About</a></li>
                        <li><a href="sitemap.xml" title="XML Sitemap for search engines">Sitemap</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?= date('Y') ?> All In One Host. Built with PHP. Last updated: <?= date('F j, Y') ?></p>
            </div>
        </div>
    </footer>
</body>
</html>
