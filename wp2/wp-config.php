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
define('DB_NAME', 'mywp2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ']j!jel[t X+1XI.U>Rn+-O&e+m4P<3@y4&Ivss(8.*2}fB8~r1cxhtlLo]fZt*r9');
define('SECURE_AUTH_KEY',  '`*6+Yjb[L!-OA/xhl(2P6HO+)w$aF=rl_,.8)Xn0LW6v2T3%U4ljjc<h[Sm lo&0');
define('LOGGED_IN_KEY',    'DU-:Of#% R|>.$AQoACk#o5-<w?}: Y4?i,(5[ g)z&g.D(piO(rj-/xht^:-3!q');
define('NONCE_KEY',        '^^&hZX)Hc(}+:XXh$?uwgaUi<I/HTynB+Oqs+|<Tlj}?9RFuQx&NP;;$5=50v<i=');
define('AUTH_SALT',        'pY-Z*/h,|RiTQF7< {`T*8H:!X`c@P2Z$PT.IBfg9|f=uAi k6mqWJ0Z|dH`s9rg');
define('SECURE_AUTH_SALT', '!B6AU6v)zPks0b+.q`;|pt_/PL7QLs>TuRcK^!f|SRsKg|p1}mF?TVloS%R{vM86');
define('LOGGED_IN_SALT',   'Qe% Yr@oD`f*}Dy=aj;]ep<sdsSWoPB.HS4;/:m?&;02YSC 8t]*ND5[!7m,@ndp');
define('NONCE_SALT',       '-m6$vd<{(cn;zu3 6sY/3CwORPSq8mhC$XTF8OKQ]{m{*=YS~|HuG#C^)j[<@wv=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tp_';

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

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'umbrella.insomniac.test');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define('WP_ALLOW_MULTISITE', 'true');
