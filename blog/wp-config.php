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
define('DB_NAME', 'montca');

/** MySQL database username */
define('DB_USER', 'montcauser');

/** MySQL database password */
define('DB_PASSWORD', 'CHUch031!');

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
define('AUTH_KEY',         '83-!SGx;:o5oVV59y*`l!2h7ObH`kRkq9QIpnAs=Rndi+c+w=0gKXa}Z3Wo7+/{s');
define('SECURE_AUTH_KEY',  'nA1|1RJ=FOen-YW.@}YTmguC5z!.u0K]^oFEnLyy;`Xa|9QQw<HNIN*o(=Re<ZRR');
define('LOGGED_IN_KEY',    '|fhh&Ej$(6fKmj_0QGQ0noDk4[V#]uqJ.Axz}Cu)_]F]N9bmp)OLFWs]`^}T]5&s');
define('NONCE_KEY',        '3tFc,$i-9nvgG0wu2tx#6v2(R%r9&!)l;!+n[G#[g8RS,.b[gATq!LUYgw`o93!}');
define('AUTH_SALT',        '#e7`D(?=~rgAB5 6I_Mw5H{O8#1fm*6ufg}h{d5Uk]$$j;<Ad/zLtqB[H#t> oZK');
define('SECURE_AUTH_SALT', 'haL-!v>1=UYMIdMc}eA9?)UBF>aK9M2ziwl)r]Ea~3oeF}66(jkyYKOdHqAFdsr:');
define('LOGGED_IN_SALT',   '[UQYdCUMJR`3&8E@^0X1ET7LU64#)6%Xf;^eZx7umIC5J/oshU#/w7Bb.Y5G7s>N');
define('NONCE_SALT',       'FG-t* 2MC]66%hc05!{Pw<jta[^`w:p^Zp/9DwE8$7)8}?~vJ8 dYlL60dt:l}Kx');

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
