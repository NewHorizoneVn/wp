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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ')LYYx[Xx4?p+!KGH/QM*>9G6!G&`JQP8#-F U$w<q{Egh+Lp%~ueGl?U4x7),tPw');
define('SECURE_AUTH_KEY',  'vn/Tr=WF2jH-o>rA_fgfew_l F%sQ+^JzHYWfCe;xay#F2_Y:XZsrVNXSl$xm$06');
define('LOGGED_IN_KEY',    'ce})LDZn0>D`Dkb|Tdu)[!(y.Fv=,]>/W::(%ntzzkLgW[m7lg(TXjuG=frHvl@{');
define('NONCE_KEY',        '+c~P<1gb|G>}G|kio9(g&:UBFZ>@yWz;Ndc3!n$A ZY<.^hOl=;T#J2h]O2:nY@X');
define('AUTH_SALT',        'Gj-y]Y?s$3;xs@Kq=^6ySv;9o~uhM!lH_43B:=5g$clI[Di^IordM2glA?DSxW.#');
define('SECURE_AUTH_SALT', '^|Q@ EK6*PK8S=/Tz-H.63C,DbM<iJ/REJrNxHA[9iv7rY2S?3TWB#&?dM{6~.nb');
define('LOGGED_IN_SALT',   '3y_4SP,qA`M0hPrt{GXhwOshP6<s>BL-*)-p~5H/??2fT_D7XrTngW)U%H2SVp,*');
define('NONCE_SALT',       '3?d#k L!_VkxSEl$;Wp*m9>D}-I,90+sLnUm%.dcU~,!B{<W#9(d TH;-&mQ39`I');

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
