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
define('DB_NAME', 'root');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         'q<=v:h1)9n[%c7#LwXag_6,>Ebw;w1#9lr~n89YZ(&&);T^(a<0MOyI9T)rU [jC');
define('SECURE_AUTH_KEY',  'ocjoHE#NTz>?sm<}zqlNhy;5iz0/b0&yr@T8-LDm gD&{kh8WyFBrqi34_ft_b81');
define('LOGGED_IN_KEY',    'mwh=2R+{aMi*H/neL37.#^l*,^D^;:89BM;m)G|aI<_lVONT6!.Z yGnA*/SU,i&');
define('NONCE_KEY',        'mAho3^+t7g2kQ]Er@T;@UzTZ0p},jN&CmmT>F7d0@%GVQQ]P+E1fp|&2t1GN4*d_');
define('AUTH_SALT',        '|J;^6K9waBcbK?6{-|W4b62PeOFVf(<{IItQX,oc~P90(]u<t/h:AO;DH[+fj^dw');
define('SECURE_AUTH_SALT', 'bGqC?0`.TU[C$vMMlS7b#SBH~M+R>wtCv` INMxm-!{Bo-QKz$k,6yl-ru1au2by');
define('LOGGED_IN_SALT',   'bF6J!juOR(3WI&=E`gU>Bmor3Gr>jbwgN-hxa=67qK@<&ymX?b8{=Dzjr)F%C94x');
define('NONCE_SALT',       '9m1n4%?6ECR[^%CDKJOr%SVqsj8<N;,RO%|oPCuvfqG_`+$:m:AEwYj<,lfp81O8');

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
 * fa_IR.mo to wp-content/languages and set WPLANG to 'fa_IR' to enable Persian
 * language support.
 */
define('WPLANG', 'fa_IR'); // by http://wp-persian.com Team :)

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
