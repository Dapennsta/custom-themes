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
define('DB_NAME', 'armsite');

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
define('AUTH_KEY',         'Lk)I^FO%QYuyO9;KWDiMg{|[V0cQsdG_CU<XPq;2rSi!9RWG*+9Xzr`IKEx`$a6~');
define('SECURE_AUTH_KEY',  'M9*%Y2iXRF)+f8buArQ/qjCe,^X]H`15F6QG23z+vm!*f4UpD$PnUhfZ8k Rasf]');
define('LOGGED_IN_KEY',    'r6JmB.j!_*eLf#+nZJryPdB2>FQXpwKI86^tul>cN`Du0Ws/Fn9MGJ*cJg:F|zc&');
define('NONCE_KEY',        '^roC9);(86%ef1^j=]+SW&c,VjZi,)Djd}`l<+hFKhKE##T_X%{U%ez-ab1zRn?;');
define('AUTH_SALT',        'h]JJxTZzn,E*,s7Y%dB.chu,HW,{{I zH(vz>Ec 3!An=4h_2VkvWT{i7G)]C#+1');
define('SECURE_AUTH_SALT', 'dM^bo}-H}Vry : 4PM^$0O3]dtQMJy&ogCcMSV#~~!}T|#?CT|!ehVxk/qV]0G%2');
define('LOGGED_IN_SALT',   'D 7is3<M/DR#^!9gn2= 0Uxj2+J=^CwXZ,Z$t !RW0SBXJ(+/<6h@7$/FDykQpH!');
define('NONCE_SALT',       'ff0~NI`>$4y.3X5r4qTv=kC@LmhhO:>[9+QbNT(`gN;32{bPJfq3AuKQDBrk]-O3');

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
