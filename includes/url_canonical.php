<?php
/**
 * URL Canonicalization functions
 */

/**
 * Get the canonical URL for the current page
 */
function getCanonicalUrl() {
    $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'];
    
    // Remove www from host if present
    $host = preg_replace('/^www\./', '', $host);
    
    $uri = $_SERVER['REQUEST_URI'];
    
    return $protocol . '://' . $host . $uri;
}

/**
 * Force redirect to canonical URL if needed
 */
function enforceCanonicalUrl() {
    $currentHost = $_SERVER['HTTP_HOST'];
    $hasWww = strpos($currentHost, 'www.') === 0;
    
    if ($hasWww) {
        $canonicalHost = substr($currentHost, 4); // Remove 'www.'
        $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'https' : 'http';
        $canonicalUrl = $protocol . '://' . $canonicalHost . $_SERVER['REQUEST_URI'];
        
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: " . $canonicalUrl);
        exit();
    }
}

/**
 * Get structured data URL
 */
function getStructuredDataUrl() {
    $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'];
    
    // Remove www from host if present
    $host = preg_replace('/^www\./', '', $host);
    
    return $protocol . '://' . $host;
}
?>