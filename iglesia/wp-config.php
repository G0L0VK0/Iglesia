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
define('DB_NAME', 'iglesia');

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
define('AUTH_KEY',         '>c`=>]QnCKBcb$AdKdEL(+b.5ufl`/hkC0@a5r&1-vN*m,6C:ZO.1 NJ+#H6u77?');
define('SECURE_AUTH_KEY',  'toAMj|g`UfT<p!iojWwjH`[(EJ]S,6/uPpyC,2^uN}Y*#vw*7HRm_G^w-}3yIvT=');
define('LOGGED_IN_KEY',    '@kuath!i0>mlso;bSZw2dpIxOZg$s($FuFUc9E.4nLWOxl||eLrxQw:|@v{qEs/1');
define('NONCE_KEY',        'doq75vrY iv 9Lv(o/1r2!~uAA^f(=4f)[012Ui`=:;~h6Y8)&J@=8!dghqL5{9T');
define('AUTH_SALT',        'qUkAFK?B4S;#hlr;E}*3~;y|)51b[bf/gDG+K{+rn<ajN+^SW}O8vKMzZWp4<n4t');
define('SECURE_AUTH_SALT', '$, Qfzk{V^W$<ljLk>_A09`6gm45`=wBcL$Y>p}y(V!!mGy}g/DlGj#{t9fMD<f:');
define('LOGGED_IN_SALT',   '/Ioh_,0zq^E_9d>|.]r~H5Kz*BbnfE5KtG{7*dzYy;g0D/J9KkmQC^A>9#)T_!,R');
define('NONCE_SALT',       'z%i<?H!$Iu+#@v<7Wr!|OW4V /P_5|YcAbff7R$Ye`IX6:6f4KWlT<(Hr!?MxUT/');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
