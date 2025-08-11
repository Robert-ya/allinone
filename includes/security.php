<?php
/**
 * Security headers and configurations
 */

// Set secure session settings - adjusted for development
ini_set('session.cookie_secure', '0'); // Allow HTTP in development
ini_set('session.cookie_httponly', '1');
ini_set('session.cookie_samesite', 'Strict');
ini_set('session.use_strict_mode', '1');

// Set security headers - Carefully configured to maintain tool redirect functionality
function setSecurityHeaders() {
    // Basic security headers that don't interfere with tool redirects
    header("X-Content-Type-Options: nosniff");
    header("X-Frame-Options: DENY");
    header("X-XSS-Protection: 1; mode=block");
    header("Referrer-Policy: strict-origin-when-cross-origin");
    
    // CSP with frame-ancestors directive instead of X-Frame-Options for better control
    // Allows inline scripts needed for tool redirects while maintaining security
    header("Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline'; style-src 'self' 'unsafe-inline'; img-src 'self' data:; font-src 'self'; connect-src 'self' *; form-action 'self'; frame-ancestors 'none'; object-src 'none'; base-uri 'self'");
}

// Set session name and secure parameters
function startSecureSession() {
    session_name('SECURE_SESSION_ID');
    
    // Configure session parameters
    session_set_cookie_params([
        'lifetime' => 3600, // 1 hour
        'path' => '/',
        'domain' => $_SERVER['HTTP_HOST'] ?? '',
        'secure' => false, // Allow HTTP in development
        'httponly' => true,
        'samesite' => 'Strict'
    ]);
    
    session_start();
    
    // Regenerate session ID periodically
    if (!isset($_SESSION['last_regeneration'])) {
        $_SESSION['last_regeneration'] = time();
    } elseif (time() - $_SESSION['last_regeneration'] > 300) { // 5 minutes
        session_regenerate_id(true);
        $_SESSION['last_regeneration'] = time();
    }
    
    // Generate CSRF token if not exists
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
}

// Generate CSRF token field
function csrf_token_field() {
    return '<input type="hidden" name="csrf_token" value="' . htmlspecialchars($_SESSION['csrf_token'] ?? '') . '">';
}

// Verify CSRF token
function verify_csrf_token($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}
?>