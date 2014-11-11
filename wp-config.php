<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bdd');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '70077007');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FTP_HOST', 'localhost');
define('FTP_USER', 'daemon');
define('FTP_PASS', 'xampp');
define('FS_METHOD', 'ftpsockets');
define('FTP_BASE', '/');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         's+OXQX}e.E0gxUTD*j2f;?|0+3VecU@|+}qt|B$n9x^GV-=H-gU;)^F0gF=BQIo@');
define('SECURE_AUTH_KEY',  'P|(_%*26vA]]($yISN|W$ay|G<.;PB%xEX$YGDWbUK#u|!wSKPu1]M.eJnsZ3p w');
define('LOGGED_IN_KEY',    '&<~TyX$h5)HSRe*>^+i5Vt/pL.;+-hRkiJ;L:(q*s4<Q$]mn>ho.6Jq=-%|aG!(q');
define('NONCE_KEY',        'Avx!ECDYQ-Ce1V1Ps5u4r[%VfhoKtipw^l><f`Qqllmxy13SUm:O+]dI33v1M+AL');
define('AUTH_SALT',        'H|gFh8gx#I;cksFX^bJ`.Vh{;L+cf&) z8I-+`?vm^:2&HW*:!$A+.@V3N!RF<Y{');
define('SECURE_AUTH_SALT', 'UZ.=6k^wn_j?T^6mwvy.GPSq[=7x<18|7%a$)wYy[!RZ@+(C4e5b_YTfz.3@<03*');
define('LOGGED_IN_SALT',   '*ea;%MO7*?u,ZD8+;0Z PL*)yAzjCe{sKd@FZl24hS8#Klc2)|cE({>aWQWd;0K+');
define('NONCE_SALT',       '2*0@Pi ^V9IR|-3W)$>{E$U%f:WcG0}D_Ky+,fUU~]z+Fq`j4bC>)eqW,yR=Y]wU');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
