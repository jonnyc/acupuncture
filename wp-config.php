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
define('DB_NAME', 'acupuncture');

/** MySQL database username */
define('DB_USER', 'jonny');

/** MySQL database password */
define('DB_PASSWORD', 'lGAsRGRF6jHDPxni');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
 define('AUTH_KEY',         '[u<ppSR@mPJ-3Z_pkqF~7Xm:qP]gW;U`ma-;v6cmz#qyZi-B=Pec|;>W{kg0^_!+');
 define('SECURE_AUTH_KEY',  '-O<1sug.3URe*ttxABYIw_sXB8|QLME]bd_&u}N2yaJY-(g?.LNRU&^<efsW?[zz');
 define('LOGGED_IN_KEY',    'wL:{+Q)^-=IV]=@=@.erQ>1-0+eD88q/?J|^-;BH@A[#}Xf>ik>y,2`,y~:z|:.~');
 define('NONCE_KEY',        'MN$+Qc5!6,uT928!wEIxg<.B<m|XSN37)H$oZMu=W#AUVV)E{ #XdE,k$QVMb43]');
 define('AUTH_SALT',        ']{{jezXW5w~41!).q^sNq[S;Z4%zFHQ1A:Ih5!t-v}]p0RgS=Pbz=SUXoEtB!%Jt');
 define('SECURE_AUTH_SALT', 'q|8=~dl<Nz6R-AR7;e<`xhX)Zqg?`}q+(ikP/>G$?[]=-u/4w??J@]3-A46gEK=r');
 define('LOGGED_IN_SALT',   'x2|3t<|kcU*koOV=GW(r46T*|qkyr(59&j(l|~+Q=P_O&8~|Nsp`q$= uo/LuV>I');
 define('NONCE_SALT',       'Cik,-$.$toV3|8O>;b0&i84Q<+xQR5o1KI|vzH-{esiR}|{K-;wiya&*>~45iVA ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'acupuncturedb_';

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
