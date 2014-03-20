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

if ($_SERVER['SERVER_NAME'] == "cx-sr2013.local.com") {
	/** The name of the database for WordPress */
	define('DB_NAME', 'cx-sr2013');

	/** MySQL database username */
	define('DB_USER', 'root');

	/** MySQL database password */
	define('DB_PASSWORD', 'alvarpoon');
}
else if($_SERVER['SERVER_NAME'] == "cx-sr2013.sedgwick-richardson.hk"){
	/** The name of the database for WordPress */
	define('DB_NAME', 'cx_sr2013');

	/** MySQL database username */
	define('DB_USER', 'root');

	/** MySQL database password */
	define('DB_PASSWORD', 'sedgw1ck');
}

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
define('AUTH_KEY',         'v=7MG;2g[G}s|^nj%Y6c*oQXXbSDq1?%T;J,RAn1#Z=~R<S1!xs|ejjz<OF<8:e(');
define('SECURE_AUTH_KEY',  's5VB;)W$2!Yw.v;hkYhyjDqn,4P98RPg?5Aj8%<E9Wl(Htgc6s:~fB#l!xF(?SW3');
define('LOGGED_IN_KEY',    'MP@&va(h9CPhpm?|x#UkWb`oA]6:;h>kh+1RZ},sorHJL25:`{pmPG=P-DSfc|3a');
define('NONCE_KEY',        'xjRYGWQ{)k1zb~jrpm6m]EN?(m8lBIYX)VigU.Ls/4]={kQVGH}cfpK^mrtsomYL');
define('AUTH_SALT',        'n~Lv`3OBwA1km93P^75qXM+,%^?@Nzjwk;f>CaF(<#UDnZ3IjC-mt~F=P&T=T?RL');
define('SECURE_AUTH_SALT', 'wT.p{3xKE07#mrBO AKIN, v+rg5l?]/iW g{f(S/z}EWqe&R ~tPdP-Ngmm} Bk');
define('LOGGED_IN_SALT',   ')#;z@1pQ~uN%0a~fBl<8*ImS[w5L/Lz{[dOM%Vq?%K5FKnX+Q63|U@F3W27d@qK+');
define('NONCE_SALT',       'C%2 4~|lKDfFPiD&Df0=`*E>Ux(?P{3,}`2XrJJ1h7D}YwXCptt^NATzIqz_>Gr>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
