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

define('AUTH_KEY',         'B4QpJOl2izd4+h7da8gWZHVkacHhoak200h8/wS0kM1D+nj5i2KEglkOwgln8YIsR3IC18CmzDzteZsDaBpOdw==');
define('SECURE_AUTH_KEY',  '5F1PG2gciyxhH5CsMwrA9xCZKXcdfwO2hCWRZ1hxxLBzdW7Houz31dYpKjkrLTnqql5DwNE8jN/io4jOh7DRhA==');
define('LOGGED_IN_KEY',    'z7XKM3lxTBpVJEX4m67o1kH86hwzfPQcUY/xApKqNyJxHWkxn+t98qzsNqhAziGXWd5UqrX8lkEgAq3E3CF+aA==');
define('NONCE_KEY',        '3RQuluVFm60ac8P5iTy7XLiMwRWNoV7TzD/sTZuOP9Q05fnU/YTBqbStKkbtreuGpWRMI77Hri4ztA+C0X/tcA==');
define('AUTH_SALT',        'YQ32Jw4CytHazFsKbLbZCk7RGjGrL72ki46kfNBh711g+EHhKA54C11Fe+Cad8b2giGU/rRSExESSAp758A4qg==');
define('SECURE_AUTH_SALT', 'hBmoMMNzxX1VoBoHVALlt4CbqFfFlUbuSJFiU/MYQFaT13g8GR4iLMIPgset2jOJXtfuZfYIwAKhfUIql7osZg==');
define('LOGGED_IN_SALT',   'BBBKtmhKya3d5gbmrCSdG3vjL2u4HkuIcG/A9iuuq2qAwkvdTnLNOv9tXe6dx1onerfQcU8C2h0Yj7ptKEZ6iA==');
define('NONCE_SALT',       '0tbYVr9X0FhO9ZSVcat7flORinRtPRXzTI0+UrFXuh+E28iCbPY1Cf8HcCy840laQtJm3GQoPtR+D3GnsGS4sQ==');