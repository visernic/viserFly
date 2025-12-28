<?php
/*
 * ViserFly - Entry Point
 * Copyright (c) 2025 Visernic Limited
 */

// Define Security Constant to allow access to included files
define('VISERFLY_ACCESS', true);

// Include Configuration
require_once '../app/config/config.php';

// Include Header
require_once '../app/includes/header.php';

// Include Navigation
require_once '../app/includes/navbar.php';

// Include Main Content (View)
require_once '../app/views/home.php';

// Include Footer
require_once '../app/includes/footer.php';
?>