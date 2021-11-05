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
define( 'DB_NAME', 'PortfolioPrzemoxe' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         '9zRePz5wGkR7fjbCs8o61GiRq9zMKx1mTkrg8Udt8FrOJICK8GeyaKvClpdS4Yp7' );
define( 'SECURE_AUTH_KEY',  'rTqCJkvy9gnVIjB2sTje0hsjjWsGnMvk7rUvfMcCGVOUOULFABlfCeXbw0zZZpru' );
define( 'LOGGED_IN_KEY',    'MuqPg3O5VQIgkwN4t45VJNmd2w9EXJkNwv4K8wb1b72jZpKRYbldNt4K7vIBEsvp' );
define( 'NONCE_KEY',        'nI0B1URg0Fcn6tQ77tfzviZY4b5faiu6fsQ80MImH9phv2K3SyxYgCE0DiOyOhEl' );
define( 'AUTH_SALT',        'K9tSWg2ZZUWkrUgLA3zDfGuJWUxMbsYi51bSptUScF0e7hCmdYbpler6s5zX036S' );
define( 'SECURE_AUTH_SALT', 'mcxI6NUogoO3Y6xqFSiE04Gl0IgXQeNidqaMQFDmI44M2FuD4c2EJJJQejiGZzCs' );
define( 'LOGGED_IN_SALT',   '26WDCXE1Bx6khu4Ic7A3diuOwEKIXdi2LlmbFOyXeNtSmOe3Phvm2CIXgYDdvQxE' );
define( 'NONCE_SALT',       'P84T9mBFcYkCqZK8ZnEg1VezJh0mld8onHyatEraLlvQNMn4iBerSi9QwN5GtJoZ' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
