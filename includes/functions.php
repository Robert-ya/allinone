<?php
/**
 * Helper functions for the tools directory
 */

require_once __DIR__ . '/../assets/logos.php';

// Enhanced caching functionality
function setCacheHeaders($type = 'static', $max_age = 3600) {
    $current_page = $_GET['page'] ?? '';
    $is_dynamic = isset($_GET['search']) || isset($_POST['search']) || !empty($_POST);
    
    if ($type === 'static' && !$is_dynamic) {
        // Static content caching with ETags
        $etag = md5(filemtime(__FILE__) . $current_page . date('Y-m-d-H'));
        header('ETag: "' . $etag . '"');
        header('Cache-Control: public, max-age=' . $max_age . ', must-revalidate');
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s', filemtime(__FILE__)) . ' GMT');
        
        // Check if client has cached version
        if (isset($_SERVER['HTTP_IF_NONE_MATCH']) && 
            $_SERVER['HTTP_IF_NONE_MATCH'] === '"' . $etag . '"') {
            header('HTTP/1.1 304 Not Modified');
            exit;
        }
    } else {
        // Dynamic content - no caching
        header('Expires: Thu, 19 Nov 1981 08:52:00 GMT');
        header('Cache-Control: no-store, no-cache, must-revalidate');
        header('Pragma: no-cache');
    }
}

// Get versioned asset URL for cache busting
function getAssetUrl($asset_path) {
    // Ensure asset path starts with / for absolute path from document root
    $clean_path = ltrim($asset_path, '/');
    $file_path = __DIR__ . '/../' . $clean_path;
    $version = file_exists($file_path) ? filemtime($file_path) : time();
    return '/' . $clean_path . '?v=' . $version;
}

/**
 * Filter tools based on category and search term
 */
function filterTools($tools, $category = '', $search = '') {
    $filtered = $tools;
    
    // Filter by category
    if (!empty($category)) {
        $filtered = array_filter($filtered, function($tool) use ($category) {
            return strcasecmp($tool['category'], $category) === 0;
        });
    }
    
    // Filter by search term
    if (!empty($search)) {
        $search = strtolower($search);
        $filtered = array_filter($filtered, function($tool) use ($search) {
            return strpos(strtolower($tool['name']), $search) !== false ||
                   strpos(strtolower($tool['description']), $search) !== false ||
                   strpos(strtolower($tool['category']), $search) !== false ||
                   array_reduce($tool['tags'], function($carry, $tag) use ($search) {
                       return $carry || strpos(strtolower($tag), $search) !== false;
                   }, false);
        });
    }
    
    return $filtered;
}

/**
 * Get all categories with tool counts in proper order
 */
function getCategories($tools) {
    $categories = [];
    foreach ($tools as $tool) {
        $category = $tool['category'];
        if (!isset($categories[$category])) {
            $categories[$category] = 0;
        }
        $categories[$category]++;
    }
    
    // Define priority order with DNS at top
    $categoryOrder = [
        'DNS',
        'Performance Testing', 
        'SSL & Security',
        'Network',
        'SEO',
        'AI Assistants',
        'Development',
        'Accessibility Testing',
        'Browser Testing',
        'Optimization',
        'Hosting & CDN',
        'Design & Optimization',
        'Proxy Sites'
    ];
    
    $sortedCategories = [];
    
    // Add categories in priority order
    foreach ($categoryOrder as $cat) {
        if (isset($categories[$cat])) {
            $sortedCategories[$cat] = $categories[$cat];
        }
    }
    
    // Add any remaining categories
    foreach ($categories as $cat => $count) {
        if (!isset($sortedCategories[$cat])) {
            $sortedCategories[$cat] = $count;
        }
    }
    
    return $sortedCategories;
}

/**
 * Get category icon (emoji fallback)
 */
function getCategoryIcon($category) {
    $icons = [
        'DNS' => '🌐',
        'Performance Testing' => '⚡',
        'SSL & Security' => '🔒',
        'Network' => '📊',
        'SEO' => '📈',
        'AI Assistants' => '🤖',
        'Development' => '💻',
        'Accessibility Testing' => '♿',
        'Browser Testing' => '🌍',
        'Optimization' => '🚀',
        'Hosting & CDN' => '☁️',
        'Design & Optimization' => '🎨',
        'Proxy Sites' => '🕵️'
    ];
    
    return $icons[$category] ?? '🔧';
}

/**
 * Handle tool redirect with click tracking
 */
function handleToolRedirect($tool_id, $tools) {
    $tool = null;
    foreach ($tools as $t) {
        if ($t['id'] === $tool_id) {
            $tool = $t;
            break;
        }
    }
    
    if (!$tool) {
        http_response_code(404);
        echo "Tool not found";
        return;
    }
    
    // Log the click (in a real application, you might save this to a database)
    error_log("Tool clicked: {$tool['name']} - {$tool['url']} - " . date('Y-m-d H:i:s'));
    
    // Redirect to the tool
    header("Location: " . $tool['url']);
    exit;
}

/**
 * Sanitize input data
 */
function sanitizeInput($data) {
    if (is_array($data)) {
        return array_map('sanitizeInput', $data);
    }
    return htmlspecialchars(strip_tags(trim($data)), ENT_QUOTES, 'UTF-8');
}

/**
 * Generate a unique ID for new tools
 */
function generateToolId($name) {
    return strtolower(preg_replace('/[^a-zA-Z0-9]/', '-', $name));
}

/**
 * Add a new tool (for admin functionality)
 */
function addTool($data) {
    // This is a simplified version - in a real application,
    // you would save to a database or file
    $new_tool = [
        'id' => generateToolId($data['name']),
        'name' => sanitizeInput($data['name']),
        'category' => !empty($data['new_category']) ? sanitizeInput($data['new_category']) : sanitizeInput($data['category']),
        'description' => sanitizeInput($data['description']),
        'url' => filter_var($data['url'], FILTER_VALIDATE_URL),
        'tags' => array_map('trim', explode(',', sanitizeInput($data['tags'])))
    ];
    
    // Log the addition
    error_log("New tool added: " . json_encode($new_tool));
    
    return $new_tool;
}

/**
 * Edit an existing tool (for admin functionality)
 */
function editTool($data) {
    // Implementation would depend on storage method
    error_log("Tool edited: {$data['tool_id']}");
}

/**
 * Delete a tool (for admin functionality)
 */
function deleteTool($tool_id) {
    // Implementation would depend on storage method
    error_log("Tool deleted: {$tool_id}");
}

/**
 * Check if URL is accessible
 */
function checkUrlStatus($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    return $http_code >= 200 && $http_code < 400;
}
?>
