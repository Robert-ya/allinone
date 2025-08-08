<?php
require_once 'includes/security.php';
setSecurityHeaders();
startSecureSession();
require_once 'includes/functions.php';
require_once 'data/tools.php';

// Simple authentication
$admin_password = 'admin123'; // In production, use environment variable
$is_logged_in = $_SESSION['admin_logged_in'] ?? false;

// Handle login
if ($_POST['action'] === 'login') {
    if ($_POST['password'] === $admin_password) {
        $_SESSION['admin_logged_in'] = true;
        $is_logged_in = true;
    } else {
        $error = 'Invalid password';
    }
}

// Handle logout
if ($_GET['action'] === 'logout') {
    session_destroy();
    header('Location: admin.php');
    exit;
}

// Handle tool actions
if ($is_logged_in && $_POST['action']) {
    switch ($_POST['action']) {
        case 'add_tool':
            addTool($_POST);
            break;
        case 'edit_tool':
            editTool($_POST);
            break;
        case 'delete_tool':
            deleteTool($_POST['tool_id']);
            break;
    }
}

$categories = getCategories($tools);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Tools Directory</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/admin.css">
</head>
<body>
    <div class="admin-container">
        <header class="admin-header">
            <h1>Tools Directory Admin</h1>
            <?php if ($is_logged_in): ?>
                <a href="?action=logout" class="logout-btn">Logout</a>
            <?php endif; ?>
        </header>

        <?php if (!$is_logged_in): ?>
            <!-- Login Form -->
            <div class="login-form">
                <h2>Admin Login</h2>
                <?php if (isset($error)): ?>
                    <div class="error"><?= htmlspecialchars($error) ?></div>
                <?php endif; ?>
                <form method="POST">
                    <input type="hidden" name="action" value="login">
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <button type="submit">Login</button>
                </form>
            </div>
        <?php else: ?>
            <!-- Admin Dashboard -->
            <div class="admin-dashboard">
                <div class="stats">
                    <div class="stat-card">
                        <h3>Total Tools</h3>
                        <div class="stat-number"><?= count($tools) ?></div>
                    </div>
                    <div class="stat-card">
                        <h3>Categories</h3>
                        <div class="stat-number"><?= count($categories) ?></div>
                    </div>
                </div>

                <!-- Add New Tool -->
                <section class="add-tool">
                    <h2>Add New Tool</h2>
                    <form method="POST" class="tool-form">
                        <input type="hidden" name="action" value="add_tool">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Tool Name:</label>
                                <input type="text" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="category">Category:</label>
                                <select id="category" name="category" required>
                                    <?php foreach (array_keys($categories) as $cat): ?>
                                        <option value="<?= htmlspecialchars($cat) ?>"><?= htmlspecialchars($cat) ?></option>
                                    <?php endforeach; ?>
                                    <option value="new">+ New Category</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="new_category">New Category (if selected above):</label>
                            <input type="text" id="new_category" name="new_category">
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea id="description" name="description" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="url">URL:</label>
                            <input type="url" id="url" name="url" required>
                        </div>
                        <div class="form-group">
                            <label for="tags">Tags (comma-separated):</label>
                            <input type="text" id="tags" name="tags" placeholder="free, ssl, monitoring">
                        </div>
                        <button type="submit">Add Tool</button>
                    </form>
                </section>

                <!-- Existing Tools -->
                <section class="tools-list">
                    <h2>Manage Tools</h2>
                    <div class="tools-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>URL</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($tools as $tool): ?>
                                    <tr>
                                        <td><?= htmlspecialchars($tool['name']) ?></td>
                                        <td><?= htmlspecialchars($tool['category']) ?></td>
                                        <td><a href="<?= htmlspecialchars($tool['url']) ?>" target="_blank"><?= htmlspecialchars(parse_url($tool['url'], PHP_URL_HOST)) ?></a></td>
                                        <td>
                                            <button class="edit-btn" onclick="editTool('<?= $tool['id'] ?>')">Edit</button>
                                            <form method="POST" style="display: inline;" onsubmit="return confirm('Are you sure?')">
                                                <input type="hidden" name="action" value="delete_tool">
                                                <input type="hidden" name="tool_id" value="<?= $tool['id'] ?>">
                                                <button type="submit" class="delete-btn">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        <?php endif; ?>
    </div>

    <script src="assets/admin.js"></script>
</body>
</html>
