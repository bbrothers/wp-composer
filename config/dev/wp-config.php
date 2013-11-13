<?php
// ===================================================
// Load database config
// ===================================================
define('DB_NAME', 'wordpress');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

// ===================================================
// Table prefix
// ===================================================
$table_prefix  = 'wp_';

// ===================================================
// Show Errors
// ===================================================
define('WP_DEBUG', true);

define('WP_HOME','http://wordpress.dev/');
define('WP_SITEURL', WP_HOME . '/wp');
