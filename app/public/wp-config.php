<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Xi8ZfT5/R4iJdC+kGnIj3Uif3LPj/vFg3z8NNIzczb69wTYnLDjrYkPi16+K7ItPQrh87vdu4gTyNXWLMljq/A==');
define('SECURE_AUTH_KEY',  'YRqC+eXNlOpMLgqbwAbFEKOgz2lCWJS1vQB3FpSJiiAd8WWBFdDRzCqd89G5nx50obVdgIg8v480N8T8dYGLUQ==');
define('LOGGED_IN_KEY',    'Du8YCxbRhMouZIvEcX9yF+QRdnV/5fNjYI6h1Ox/jhN295r2sPEAACQJ/GjuTTyPff05JwB1hAKFWjKCBP5hWw==');
define('NONCE_KEY',        'O+L3Ejh+5PRqDudiooesnSTVn5WPQ+19oTv/FFBu7j7z8BWUgux+4RusBtgUfttjZoKCGNWDxdIYKNEvkG29nw==');
define('AUTH_SALT',        'XB6EPmXasiPmEFmcDAKY6vU73xVBq7HweQ/089D7KAUO1QyvkjVbL3zpMn64LZhtSHRUT7biIE0NnB0qb4y87g==');
define('SECURE_AUTH_SALT', '8oE8EAxzlmNNrvJCRUTKWlTgjJ7oGUIabvjRyB9LcKn9WdmMCp0BDT8ht6ydewCU4G67zjHWvTZH3Ij+ukowcQ==');
define('LOGGED_IN_SALT',   'LMKi/et2BHlNIa8JPN7Ml+4K97V4UeofgOaijm9jrKaQcmBOJFQS3e5x8oTXPXgnTwD1BCLJ7X6VuUv5as+cuA==');
define('NONCE_SALT',       'brigDR4TBmDiURTN1NUAYCbCmScve3qDHlEXc8Nx7Agh9shwXzUKmutlfNEpkop6hUCq1Te2t0D4e9HX4zqjxw==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
