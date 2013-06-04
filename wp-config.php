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
define('AUTH_KEY',         'Xb(`3qTPJTm`BX$Un}&`<P;I<[1KycC3nT/^aGsg,ZVzVvupHQ!XA%kmZGL61N_?');
define('SECURE_AUTH_KEY',  'Q)W&R$rXN|Y<1l?Sv&{lMy_-kiz6gy5]zQan3D34+Or^f8ucui&ojSu#?qC#e|;e');
define('LOGGED_IN_KEY',    '&=yy<VAgFJsval#D&>/lN99nL]74|Xz3y-*1n^(bXlih.!kP_,V+rMr*kwj.wW8+');
define('NONCE_KEY',        'l4g9kiQegF_u*wW}Q_&haJS/OiIcf|S0VuZ891>[a9_K(b@*#@AOWH=q$(>,WLKn');
define('AUTH_SALT',        'Fz+ZD=C+@oj1ikHg`hoy6}K4cnS9O{v[TR*[L_9vkB}64M E~C;vupI``/5<<eLG');
define('SECURE_AUTH_SALT', 'G>7@mXEDShC~5XCiG`uPHXOCTxSpWh[ K{xv!4v;(]>!;v0yispLHD#>dkM`_X`K');
define('LOGGED_IN_SALT',   '?Y<{l(Uq5T5.K|* nX]-^>]-={Xgm~:C!~jQTL#DXF>GHK6eW+=,^yLVnZiJaFp`');
define('NONCE_SALT',       '^:#).DW;mt=>[Abb|<-Z[D5I3864[lru9z<>Y8ie/g=`&1(F18s-NFQiaXN]L@ll');

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
