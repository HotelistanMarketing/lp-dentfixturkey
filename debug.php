<?php
// Simple debug page
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>Debug Info</h1>";
echo "<p>Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "</p>";
echo "<p>Current Dir: " . __DIR__ . "</p>";
echo "<p>Script Name: " . $_SERVER['SCRIPT_NAME'] . "</p>";

// Check if autoload exists
$autoload_path = $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
echo "<p>Autoload exists: " . (file_exists($autoload_path) ? 'YES' : 'NO') . "</p>";

// Try to include the main index
try {
    include $_SERVER['DOCUMENT_ROOT'] . '/variants/implant/index.php';
} catch (Exception $e) {
    echo "<p>Error: " . $e->getMessage() . "</p>";
    echo "<pre>" . $e->getTraceAsString() . "</pre>";
}
?>
