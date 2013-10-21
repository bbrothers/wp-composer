<?php
// ===================================================
// Load database config
// ===================================================
define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'password');
define('DB_HOST', 'localhost');

// ===================================================
// Table prefix
// ===================================================
$table_prefix  = 'wp_';

// ===================================================
// Hide and Log Errors
// ===================================================
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

// ===================================================
// Disable Theme/Plugin Editor and Installation
// ===================================================
define( 'DISALLOW_FILE_EDIT', true );
define( 'DISALLOW_FILE_MODS', true );

// ===================================================
// Define URLS for Home page and WordPress files
// ===================================================
define('WP_HOME','http://mysite.com/');
define('WP_SITEURL', WP_HOME . 'wp');
