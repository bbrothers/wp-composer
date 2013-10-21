<?php
// =================================
// Custom Application Root Directory
// =================================
define('APP_ROOT', dirname(__DIR__));

// ================================================
// Get Environment Specific Configuration
// ================================================
$env = getenv('ENV');
if(empty($env)) $env = 'production';
require APP_ROOT. "/config/$env/wp-config.php";

// =================================
// Composer Autoload
// =================================
require APP_ROOT . '/vendor/autoload.php';

// ================================================
// Database Options that are Standard
// ================================================
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');


// ================================
// Language
// Leave blank for American English
// ================================
define('WPLANG', '');

// ========================
// Custom Content Directory
// ========================
define('WP_CONTENT_DIR', APP_ROOT . '/public/content');
define('WP_CONTENT_URL', WP_HOME . '/content');

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/wp/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
