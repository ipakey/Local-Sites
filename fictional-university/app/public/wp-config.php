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
define('AUTH_KEY',         '8/GmWLq+mZRYQjEuYsbQWfPtShswIlqMoNR/w9GM+uBHfcyBsNl4DX/OfIQqcpjlJXsdcL8yaHzgkgtUB2Vjpg==');
define('SECURE_AUTH_KEY',  'WtRhO0p4zvD78AEmeW+C/QtBl+Q6ylAxs/MwyI3Vois9/Ozcos4e5jDwGJZrBhqYFJZcDu8rZLfGdEdaTVvTdQ==');
define('LOGGED_IN_KEY',    'BaHpus5RaD8cyzybWbXILrAYcuNlLn7Jk6Jqx38N/7wei+64/PraFiDvyQ8LRkSwnEmYSTU7ElsTpGwKdsUynw==');
define('NONCE_KEY',        '9sIX/LYg+byT3B3ip47T53mdK4T4Nc84LWQNuybylJ3L45bbOiwHm+rEKANohO1+DWsTSYr+NZcNjo7rzlp/hQ==');
define('AUTH_SALT',        'vhRzYUq+TctP20WxUDkA0zbi1PVKBhKXpk1Twf22rSBOTUfch1S72yuT46CGUFrxn+oC/nTRT6yg9GHcFNSrJA==');
define('SECURE_AUTH_SALT', 'pG/rgDPciyLW0PJgmyReoJhIAu6HUPTnjYstFazfVVbJ9SCKPvDFdZ+wbxfTxIuTG5g7QWJi26bZt+FLG6xNAw==');
define('LOGGED_IN_SALT',   'pY037UrtY2hiw95UrNcuhEX55A1KGAx8QmVfZxIoqrQm3HtoWCp1K76WqnLcx/vHBeQVFgNsK1zBZR+S4TuacQ==');
define('NONCE_SALT',       'kJDnHknXh/8gIrFWkBgMPK16XoKC+2uAE8N/Tp03Jpm5OEaa8aQUeDcJG+FDJMU/ItnvwpZn9b0Dxv66S8Mvvg==');


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
