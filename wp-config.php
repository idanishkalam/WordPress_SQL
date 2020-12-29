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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'm_wordpress');

/** MySQL database username */
define( 'DB_USER', 'wordpress_user');

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress_user_password');

/** MySQL hostname */
define( 'DB_HOST', 'mysql_db:3306');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'a49b5b2b7717cf2ef9942b1c7b0047639e4a1a66');
define( 'SECURE_AUTH_KEY',  '4a7caa6dfd47a785bb5be1cffad0da0f5d21ad55');
define( 'LOGGED_IN_KEY',    'a385a1df239a747adcf73b9d768b54fdad0ce519');
define( 'NONCE_KEY',        '8613a7bdab5aad941de7e3a1b592d7674a6d869e');
define( 'AUTH_SALT',        '06905b486c3211fe827743214556e1605ecdc8d7');
define( 'SECURE_AUTH_SALT', 'b445a0d9260c56dad0441fac72aa97684075389b');
define( 'LOGGED_IN_SALT',   'e9313be44b0809dd0986ffbdf031cc6dad77fbdf');
define( 'NONCE_SALT',       '31edcd038c5c017c9c19c74965fb3ac045c2b289');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
