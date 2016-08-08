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
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'roslagens');
}
if (!defined('DB_USER')) {
	define('DB_USER', '700245ddf4af');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'steel1992');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
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
define('AUTH_KEY',         '?^gK8/zU=UQ,A1NfFG>X|9P4J%;OmM-#jX}Fbkf5,?PjO$d@m+leQgtjPRGMY1+)');
define('SECURE_AUTH_KEY',  'F0u#Frz))56y2XQV?Q!a%xk-z<)M6d-L/@i+et{V-[x_;1nxeyIUR8/?-Jn*S-&3');
define('LOGGED_IN_KEY',    'N%4-N_$LoHWU-D>m^x,|Z06D~kH<%R5%qkfm]ESBAzYCbsE|I>Wu2&|tC4Vuc{f,');
define('NONCE_KEY',        '86@a,70:sPTVoL1k3|Xp10 3wIw;^2qBQlCU/BE;I|?u}@+6+l<c;We?FN-[n3u8');
define('AUTH_SALT',        'v_*pSK~E>|mxjjAA(+b_@}*^0H0e,V}O_)~dXb|b*e}WHwDP*)l=b&FG| %>t@7$');
define('SECURE_AUTH_SALT', '{3+A[BA9QfNtUd|-u4X;B9K,NGu|X|$(~)p.WOZjS+68Gu#Gz31?gZun.h%4_XC0');
define('LOGGED_IN_SALT',   'Hx*BUBTf.8+]}Y+v-XWvHalgd#{D3,[Pn|gd-tzrnmoc7%+R|>/9-e:q{5c7s[O0');
define('NONCE_SALT',       ';2~O7<kO;Y.bT$@-^HW%gc.:GgG+ASff#!iJ0kw98^DX`+P(pm*T,ALl+YH@Cmh+');

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
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
