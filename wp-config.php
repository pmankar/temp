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
define('DB_NAME', 's2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '!]FNf5%[m9q`]kIJQi54JdSN{.4y{3uqjSy~rIf],iwek9ss 8&&5e#7H%M+W^gW');
define('SECURE_AUTH_KEY',  'cCp8X>AD5Vtl2,0oj;~+&N:COyj:Pr<C &H2UtGJ(`0q-8AGI3HI)2Lv&NVX%4^^');
define('LOGGED_IN_KEY',    'LLISRb>56/Y^ly&BVSH|yp/@3Bo1[Pv5TE5D~w|t]H2sC}m#Cl>]B`*4cG>a_i {');
define('NONCE_KEY',        'tT U3]#na{Q@BA.5 0Ab.II[&1S@7hbB<;#~7y<)AxN)iK07`MIC~Tf2&Amq@EF:');
define('AUTH_SALT',        'hwA02e{9w-urBy4;=rYR8vvIHVbX1)ec{OB3 B!2rc^xWU8,_m?h$-n;yd!q96zo');
define('SECURE_AUTH_SALT', 'ckc/H(*E1s`G>8sGzF8G6G=06,zkIX6XI5wYD+ PgJrH<WQ3]za0z=?7k:NW47Cq');
define('LOGGED_IN_SALT',   '!hAw}z@)~@m<J9O:#D)MSF(s%|*D2mW_Q.M3SZ/:B.@cc+Is7`{)Mk/(;P@m`<gQ');
define('NONCE_SALT',       '[+r3ku2B~n)Jqta~/C&h.74lUZNW58,GRa/}(?Em*I1.U+CsU}sIVGM1N[9LKd{9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 's2_';

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
