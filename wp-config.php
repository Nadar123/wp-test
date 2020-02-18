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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'EpA3B4MZLmrN8WOmnTLQpPL2rUAv3JvE9hyEwedfvAHPWdG8wE2B7EQeJThoc6iT' );
define( 'SECURE_AUTH_KEY',  'gmNndaIVCQbnl806CG7cWhiQYYkCGxCfQDvwDjAZR7gNcDuJlwmq9X5kOrly7m6f' );
define( 'LOGGED_IN_KEY',    'EwCe3KKo6JaMbLRrIDyXsBHGk6CG0V4LEB2L1OBUd9bMxI0vCq0WMItVaZ6bdzbc' );
define( 'NONCE_KEY',        '1Q61sGWEwXLBgbjblasmP5wFw59aa7Pz46kvXorGyNAbs2WaWviYw8cbh6c2C5Tx' );
define( 'AUTH_SALT',        'z0Bcgvc0g9IZWVbFG0GY5LSMIRk8UvBIWtSkiAqcUB81TVZxTFkRJH3yRM2B0TVD' );
define( 'SECURE_AUTH_SALT', 'dW0ChgYibgQaXjL1nmzGK61tq5RO1vn34j2IOCZ5gucyy8EhFnjaFmXZbMIyKT8C' );
define( 'LOGGED_IN_SALT',   'cQsNG02LFCiTq8Te22xt33BzXMYS6JukIvpLGYGgEi2oOJYkKqqHD2rkcwebTQyw' );
define( 'NONCE_SALT',       '1NIzG02XQ3o3hBDHYgb4sJFxuFptrLChTMzIbGdK3XINzK2FcoEn9uNxKG16UsFE' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
