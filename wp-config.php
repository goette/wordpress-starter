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
define('DB_NAME', 'wp_mrtngtt');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '.C?Ibs}v}Y-S-H .nF_F+kh4JE|MZ3k-+$v]&XI|P&AL8fR%@K5hMI=-H]{6w$7d');
define('SECURE_AUTH_KEY',  '|vCLK^G&r5=zK0ueHEP(|`.1xP-{d14iN490tSR,m/^E&i#{(+W#l;+WREA}f..J');
define('LOGGED_IN_KEY',    'JKqRx}K,[G[.f{`W?>2.XmV*a=#%*YXa{q{q;QTh99tLkI*_im .nmoUf2SF=c|t');
define('NONCE_KEY',        '>2Og}$0jS@52I$/Z@qwVf@<< lnZ+UY& 7tG0H~)`p.0AxuG>|}[!kBXRwR=%!Q@');
define('AUTH_SALT',        '0|E=75QQF{/HI1Cs.cSirOw+N84rAC8HH@-wvs;8]kr}-cgM}m+?pvG?!!<EWh8J');
define('SECURE_AUTH_SALT', 'X+W8YZ1GX1[9HhD+;b*R,I%DLIi)!IrPkfUApfPyyy4Td?o4*v.poU3|+q^dpSe/');
define('LOGGED_IN_SALT',   'hf?X%s0c|W1mkYD(]^pDa>qghCpws}cEl=<3)*-7yE#*Wpsr(K+<;yS;]-7-G4 o');
define('NONCE_SALT',       '4#&q1.-j#P*!vjwTU[97/,K#kBT<H,mJG9CeCGsWFNnJ7@Z?P-,PmJ=p~B5]Pl#X');

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
