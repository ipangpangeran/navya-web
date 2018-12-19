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
define('DB_NAME', 'navya_db');

/** MySQL database username */
define('DB_USER', 'navya_admin');

/** MySQL database password */
define('DB_PASSWORD', 'VE?k&cHGZz0.');

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
define('AUTH_KEY',         'aQ0FG(?$u^T==l*[{o`g&kc;i6u7X:B&UZ&D,*?W5eJ {4%v:Yw8V[{ P@&P Ts ');
define('SECURE_AUTH_KEY',  '~lSrRxn{dpjXz?W%9GUmQ#iwiG1LpdhU<ROQ@kvj v{sO@|9=7 Lkcr}[DpU0tOm');
define('LOGGED_IN_KEY',    'd+l|M5dAV?QYO|B3<Ry}n=F>SB)jby4s(?_tyAjnmTHjd4JrAjr=etSOn1N@j<=G');
define('NONCE_KEY',        ',5%svWd#rL%U=JuM:Vv#34pc(KgvAgW/tp$Eq&sn@<wnqaMPNfmAx[rJxhW5aG*0');
define('AUTH_SALT',        'TepaN(4,(t]NmmSuy%>-42Bc$d`c9n~H^wiHm;L ZXg1h3}}LHXo(:n_$bQuzsR4');
define('SECURE_AUTH_SALT', '+THBgr%.`/ht*(iI*qaBp/$ZdG;.8YJHO43[c$,L0KXn3QM}oy)zPd]C,Slu_N!D');
define('LOGGED_IN_SALT',   '3rJC^kUjt1dA7xNJ.r<A*/yrknm^8o0` .*NYf~Wm1Z.GGqMWpEmoaw_E^@a=Yu#');
define('NONCE_SALT',       'sZD/kYhh5Kj>$F?g8UY!XxrJQz[=<Ftg m$E0D+PA(j_m`OZiA,e(m[|Cw%a<5yK');

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
