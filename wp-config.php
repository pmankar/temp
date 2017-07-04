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
//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\wamp64\www\wp\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'vRR$3>Zr,.e .3Q|v@ym6;V-|W|wK46T!/6/;+I7ppp&?ExE,{~_r{KXHQ7x)c[N');
define('SECURE_AUTH_KEY',  'IFEZ;1uVDdpn`FpF#gf><(JKb!dA96|?1jDDI<#d8anYl?HJ?g=NE]qU9|K^e)J^');
define('LOGGED_IN_KEY',    '*+{J(RWSb67f?=aL*EHD|.._F6;(WRl)08;XR>#@C[B{v;N&OuQg`qV{cXj%AAet');
define('NONCE_KEY',        '>+>4/oE{se 6EHNiVO*^/g7M17pR{5E@n6]]gT)bjN%v:],B%Mc]TD#QyUt3j$n?');
define('AUTH_SALT',        'R%rnXn7IFBs/#;u~9#i%UJ5#6wmt~w)!tW+qf_H0)%Nheb*wta}HE({d~HfOl{+l');
define('SECURE_AUTH_SALT', 'A<UnXAtJwuggRS,_m8aG x2S{<L,5T>=Ym)]]E-oZfR6stUS}y&v4bLIOrRUBit?');
define('LOGGED_IN_SALT',   'jmjpmZwLvCp5}Mlw.TqSwC-(~o3=VN%L9~4!bhH@q9|gi/?5w90cB=gw M48A4(^');
define('NONCE_SALT',       'T;fj?ork,!0)m!`H,io7HQD28OXiB3bujoZ@]u}To8+Y[{mT|s#j bCJp)6cn|Ve');

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
