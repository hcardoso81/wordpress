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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local-wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'db' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         '~jdGdR t3[<;*vD:5`QT!mvMcEcZ/Mp1:&;<H^m MxAiP=63.iqWgC:eUf&c*1{U' );
define( 'SECURE_AUTH_KEY',  'AN;ZW:rI2$#8tItJEN87g8nv1 sG;6K6k+Pu;EpTyb0^|U`_$!]5#(Kq=]8l8-i5' );
define( 'LOGGED_IN_KEY',    '+H]-KD|TnOJh1$Untv>gH9uMPJ38pmJ)?$=y>L.4X[0zMoNd:AE`hSe:mtJRg;u/' );
define( 'NONCE_KEY',        '!ud0a%+7V Vut7XS*8lPY(QgCG$Lp((*rY[(a>/%0[}HVnI:<JAkQx@|n}Py.4u.' );
define( 'AUTH_SALT',        'aS%k4^Fo.y&;?3IU?5Cz7ZbMm}]1B Xo!2.1bMF$KBWMVt6]&b7mn =`_A9B7TTy' );
define( 'SECURE_AUTH_SALT', 'uy26?ih#R(VxcAPH06FhbM+Jh@qOt gBV%r52QQG)/*:,nsD*6OeH+{Zn:Wj+&c6' );
define( 'LOGGED_IN_SALT',   'k@W%lz`M#+ADKIq84!eHqndsjLt*1sJpNk3gLdMkc]%}`[@Z8&V&ElpU|h,3$S{t' );
define( 'NONCE_SALT',       ']b,K^kc^t$?.$]&<]NDS.l#b#N.j~/o*nDwA`T?aX]hnN4C8YoPss*^,ee@]7m_Y' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lwp_';

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
