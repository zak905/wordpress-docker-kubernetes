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

$siteUrl = getenv('WORDPRESS_SITE_URL');
$homeUrl = getenv('WORDPRESS_HOME_URL');
$dbUser = getenv('WORDPRESS_DB_USER');
$dbPassword = getenv('WORDPRESS_DB_PASSWORD');
$dbHost = getenv('WORDPRESS_DB_HOST');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', $dbUser);

/** MySQL database password */
define('DB_PASSWORD', $dbPassword);

/** MySQL hostname */
define('DB_HOST', $dbHost);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME', $homeUrl);
define('WP_SITEURL',$siteUrl); 

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{%IzFxx^NRC%b>{<3YlNC}A8[e^nsC[`_ g|K:`E9@0K:8FvkdYHH%2`U;W~>uR:');
define('SECURE_AUTH_KEY',  'g;<TQ.iri.YdeQW:u<z]GUyAwcukb.L^M3$VL<](%8R]m6yvi(gpLXY`28Y_Aw&Y');
define('LOGGED_IN_KEY',    ';j;8PJ%~g+k=5oue=K0Zj].QpyVOj|]>6~;&^YFH.Touuhjp:Ds%k^Ej`bANND`e');
define('NONCE_KEY',        '(=zV[R%)3ue2f8XlwN&;Gs I8x3QR!vgsGH(~C)a+P<!-7lZ1^T;hluoa@B%,H&5');
define('AUTH_SALT',        '/(Os}M1~Z&4y:Vs5zcnJb6A)sKHT/4F4~:nl*Tq4b#7|Ty)-x*o O_:50#K) >-$');
define('SECURE_AUTH_SALT', 'l*SpCdaN=z}cNXA7zB6on7bWnTj$eBlB2BX6@@eRc$A.3.:pJJswM~~&3 `a4x=g');
define('LOGGED_IN_SALT',   '8S}8hK_}@xsm=q,[Ga:au@JrpC<S)Vt^@ESXSiJ;#f421QLbrLGJ|J(?vrpcab/p');
define('NONCE_SALT',       '`X5}H~3^(bW).0&g/>iQugz0Ob$JNm|kv#PqZf)`O)u;~euzjj?820>]!Z*]ClmL');

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
