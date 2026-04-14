<?php
/**
 * WordPress configuration for Docker.
 * All sensitive values come from environment variables set in docker-compose.yml.
 */

define( 'DB_NAME',     getenv('WORDPRESS_DB_NAME')     ?: 'wordpress' );
define( 'DB_USER',     getenv('WORDPRESS_DB_USER')     ?: 'wordpress' );
define( 'DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') ?: '' );
define( 'DB_HOST',     getenv('WORDPRESS_DB_HOST')     ?: 'db:3306' );
define( 'DB_CHARSET',  'utf8mb4' );
define( 'DB_COLLATE',  '' );

// Override site URL so WordPress works on any host (useful for local dev / staging)
if ( getenv('WORDPRESS_SITEURL') ) {
    define( 'WP_SITEURL', getenv('WORDPRESS_SITEURL') );
    define( 'WP_HOME',    getenv('WORDPRESS_SITEURL') );
}

// ── Authentication Keys & Salts ──────────────────────────────────────────────
// Generate fresh values at: https://api.wordpress.org/secret-key/1.1/salt/
define( 'AUTH_KEY',         getenv('WP_AUTH_KEY')         ?: 'change-me-auth-key' );
define( 'SECURE_AUTH_KEY',  getenv('WP_SECURE_AUTH_KEY')  ?: 'change-me-secure-auth-key' );
define( 'LOGGED_IN_KEY',    getenv('WP_LOGGED_IN_KEY')    ?: 'change-me-logged-in-key' );
define( 'NONCE_KEY',        getenv('WP_NONCE_KEY')        ?: 'change-me-nonce-key' );
define( 'AUTH_SALT',        getenv('WP_AUTH_SALT')        ?: 'change-me-auth-salt' );
define( 'SECURE_AUTH_SALT', getenv('WP_SECURE_AUTH_SALT') ?: 'change-me-secure-auth-salt' );
define( 'LOGGED_IN_SALT',   getenv('WP_LOGGED_IN_SALT')   ?: 'change-me-logged-in-salt' );
define( 'NONCE_SALT',       getenv('WP_NONCE_SALT')       ?: 'change-me-nonce-salt' );

$table_prefix = getenv('WORDPRESS_TABLE_PREFIX') ?: 'wp_';

define( 'WP_DEBUG',     (bool) getenv('WORDPRESS_DEBUG') );
define( 'WP_DEBUG_LOG', false );

// Disable file edits from the admin panel for security
define( 'DISALLOW_FILE_EDIT', true );

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';
