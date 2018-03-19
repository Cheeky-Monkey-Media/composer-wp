<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'database' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'JPpmmSoKADl1OmUkmjS0/2aoevYzeLX1otXPRxLvytdR3QascIftKLuyxU/tbD9/svtwYqD2vGZYL4tnv2g9aw==');
define('SECURE_AUTH_KEY',  '+4DjoL0Pahihlb5IlYYfI2Qqc0yrWh6wFPfW1mrU3Mrrldmy6R1Ou5zKx9j3zwb+nqdCCcgF2c9hYL2R7IApSw==');
define('LOGGED_IN_KEY',    'fqYnRSLJ0G0eJTTs3B9s0Bmqsl1t3RY2iLm6MEsWAkNJKsnU7n+nl4HSqpRAI13/3kj30HPYEAZM1XfYsPCDzg==');
define('NONCE_KEY',        'OC79SSKfM629zGYDg6NIoweukcUfhzvNtJ8f6Sd29EYDwrNFHSHCYBCMcS9yTyBYa5ntDPd0Z6t5oG5otSXi5w==');
define('AUTH_SALT',        'IaZX7QqClotoMN8sIx8erD6F3Lzi3PeA0sd8U8M2KS/cxBmPaMHxYFogH6pS9HfXhEzmu3McAghBCC//iRxD+w==');
define('SECURE_AUTH_SALT', 'kQF1ZWqHrvt4i7PMpZKJ+8OKBV1lbVd1/e9jTGFtYAK6cX5KAPBXc6jokz25xliAj+GJfYom2AqsqaUm7OKldQ==');
define('LOGGED_IN_SALT',   'Tnca/KUwjfvxG4bip2D9U9Xj2tn7q62ZkHKL1aVvyuV8nuvfvI5T1nQvlK1U57rGCmtwzwXm4eLqd6VmK1/9KA==');
define('NONCE_SALT',       '3OwzyR+7w6X/pn7ob6Prt7bSHb80LXzLEgNe0UdDpua2bYDwP2zxAhOnHI/G+RbCXwc28BqhTdrwly4AflMYtg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
