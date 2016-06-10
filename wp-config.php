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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'p2l9{OAhAnh~P+|x1ojlD*.NK|gjn9M@JXUb/`GV~G8{LWK9AD@hum(tXQ/ijje_');
define('SECURE_AUTH_KEY',  '*{TwE8^H%!vjakVI.v+JV(@b:;N0NDGk@>0cO`yTnZYg&G^KU^^<*o[f;3+YA3*^');
define('LOGGED_IN_KEY',    'CSWPu~(teRL7&B@)aOM-{>7Fhzy1~Hp4a,uzNr_]!4SgpcU9!dTAC7m]=&- ZefE');
define('NONCE_KEY',        '{N&Ia<j)+0jv-<0p(!ZGUj)mAgw@_u;6(h{ed6E^G%#5;y#1;*v9dDGlO$dZ^;e:');
define('AUTH_SALT',        'e,;1Wwnh#q>34X)HTdhbtW$on; o]1{2P2.LgOM;)F!^g6%kvoC0<MOb,2]lxi%9');
define('SECURE_AUTH_SALT', 'dqdPqG0i!fVr.x%bPK/T#ap*-qf9#*9Ue8[D6+nUpowr;q<G/lM@W;pX*_Y|)xT#');
define('LOGGED_IN_SALT',   'G|1HBx][6|~GDJoRt0cOUEm~ev;9b`vFJu(?rg)BPEd5fnhVPJ$.xD.3fH*&IJ<1');
define('NONCE_SALT',       'IZ<A e5IYk31vQHu?$L0$03?}}ll2&z@ro]F`8yDWc6uh,qhJ8XB OD)Ij:K@vTy');

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
