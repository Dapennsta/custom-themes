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
define('DB_NAME', 'wpthemes');

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
define('AUTH_KEY',         '[-H!eDG0^4:9N[w]WV#`C[r[T$ZbrAIN`{m(Rk78Jw6OhXFmKL|_]E-O@8wwR}JP');
define('SECURE_AUTH_KEY',  'n)9X$tW)7-.=hs=J~|7p=S]es9[T}CHkUc;Km,<LdVC64}=c2T4vfm?K{&3xz#gS');
define('LOGGED_IN_KEY',    'Eamv9v7T(ct4lYr$|Jsi&{sia7mAt>JkW:4Io0NX`$o,@<oEnOsch)iMPmOu$-#Y');
define('NONCE_KEY',        'bA#|9_]I4G;fI_EKr8jn);9CiA-`#@`-d |PyYb4HZ5^/zj>/AF]h5_:j(7C2x0B');
define('AUTH_SALT',        '2qrAaV1fcw!_C?YD{NWxb?=P*Ej9b$p/cl9z$v(VPvAv.WGeF`9m}rKfl9Zy6eV*');
define('SECURE_AUTH_SALT', 'g9TfoQ,O ;nU;!DP0uq!.7L9VTOx)a%_4ebn58>N1{MrG.Z&AU<plGl*`cZVGgVX');
define('LOGGED_IN_SALT',   'C=Xic{h-zT*8LH}md 32G +r*w+tiUx8+i:TPqBrR(UZu-7kS$GAl3r|!aEaX#[f');
define('NONCE_SALT',       'Ix8e Zj$* q#fqv:yh#_J0*uEf6]F2~<1/s-WX/{UA{EfcvO0{&Hwj{&n7iC:BTN');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
