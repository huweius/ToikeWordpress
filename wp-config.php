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
define('DB_NAME', 'ToikeWordpress');

/** MySQL database username */
define('DB_USER', 'ToikeWordpress');

/** MySQL database password */
define('DB_PASSWORD', 'nothingtohack');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$2DpB6L:Vfa4TRWU(n38a@+4EU.i5H)G,rML& T]]M]B7Yr_DRI2x~w)$in-T3{n');
define('SECURE_AUTH_KEY',  'jJ=RdK0::X.SRC64U2t]hhXiBl?}ic[8 ->?WyNqT,hY>smWzU=tW`?pp;SAdE].');
define('LOGGED_IN_KEY',    'GBorYR2B}lO|)/aT5K.Kbj5`PV5toNzyk*xrr$j80-%%bGit8m!uyqf_6]+FwhOw');
define('NONCE_KEY',        '3]kg0D<zh/XL^r^NV~Ko>|.[Icac]km7n2#d tf)F<H-0vVtMT2V0F.qgf>U1T[*');
define('AUTH_SALT',        'gUl:`V7dp9gSV.g8dd[9|ZHfHTS>Et0)z;9(K%FWl{B6#zAVo(`fLg6Z$fhF;O3*');
define('SECURE_AUTH_SALT', 'chi((7Hny7ab]%1g_&B1ErksY6=85upmIL=upsgrtJ8KKGtpu5s?>VunlavA>WAf');
define('LOGGED_IN_SALT',   '?/giaJUxV@zQl`lY)_xQ*e+1/<F8^m+<*lgx^a8ZKS:! (.|eu?L *L!ov2i XHF');
define('NONCE_SALT',       'J6C}h4lkCbRs@WQcn$i 9!c3SB,2]~H!1gIN!/@A!WTL-FIl*mK+]]U|8Bi!KSs:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
