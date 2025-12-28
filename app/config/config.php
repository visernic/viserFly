<?php
// Security Check: Prevent direct access
if (!defined('VISERFLY_ACCESS')) {
    header("HTTP/1.0 404 Not Found");
    exit();
}

// Site Configuration
define('SITE_NAME', 'ViserFly');
define('APP_VERSION', '1.0.0');
define('AUTHOR', 'Visernic Limited');
?>