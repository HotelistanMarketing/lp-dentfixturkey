<?php
// Router for PHP built-in server to handle clean URLs

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = urldecode($uri);

// Remove leading slash
$uri = ltrim($uri, '/');

// If it's an existing file or directory, serve it directly
if ($uri !== '' && file_exists(__DIR__ . '/' . $uri)) {
    return false;
}

// If it's empty or root, serve index.php
if ($uri === '' || $uri === '/') {
    include __DIR__ . '/index.php';
    return true;
}

// Check if it's a page directory (without pages/ prefix)
$pagePath = __DIR__ . '/pages/' . $uri;
if (is_dir($pagePath)) {
    // Check if index.php exists in the page directory
    if (file_exists($pagePath . '/index.php')) {
        // Set proper document root and working directory
        $_SERVER['DOCUMENT_ROOT'] = __DIR__;
        chdir(__DIR__);
        include $pagePath . '/index.php';
        return true;
    }
}

// Check if it's a page with trailing slash
$cleanUri = rtrim($uri, '/');
$pagePath = __DIR__ . '/pages/' . $cleanUri;
if (is_dir($pagePath)) {
    if (file_exists($pagePath . '/index.php')) {
        // Set proper document root and working directory
        $_SERVER['DOCUMENT_ROOT'] = __DIR__;
        chdir(__DIR__);
        include $pagePath . '/index.php';
        return true;
    }
}

// If nothing found, return 404
http_response_code(404);
echo "404 - Page not found";
return true;
?>
