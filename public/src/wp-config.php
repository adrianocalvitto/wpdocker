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
/**
 * URLs
 */
define('WP_HOME', 'http://dev.catchys.de');
define('WP_SITEURL', 'http://dev.catchys.de');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');
/** MySQL database username */
define('DB_USER', 'wordpress');
/** MySQL database password */
define('DB_PASSWORD', 'password');
/** MySQL hostname */
define('DB_HOST', 'mysql');
/** Database Charset to use in creating $root_dir = dirname(__DIR__);
$webroot_dir = $root_dir . '/web';database tables. */
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
define('AUTH_KEY',         'l !nIS?]WejZ-3cp<71JKWAs;79Z!Xw,2Qe)w>,rc3rD#`1*tUN@;iU;{aWEY?q}');
define('SECURE_AUTH_KEY',  '@8G)k`a7:Q<3}Qr#NpP7@4_)hO!j}AM(9*<!J0nJ>!jJc;r?:zD43C$TNaB<z*P`');
define('LOGGED_IN_KEY',    'IwmKogEzUhjiH;~rEvWS(*Qy3.)`QLXKGiMD.!q[H>4<dUJpwKqYI@Y8H/hUs5J-');
define('NONCE_KEY',        '_+?1kEU)Two~MDm9;pY 2uVBIah;40$Lfx1FPD;uy(#<tr&11RTCEy/Pw42`(]<%');
define('AUTH_SALT',        'cSfKINnT?[]Vdd;o~1Fa*g+DaK0JgsI,D};b1s|#jt3ap+](dG+-hVqiJJmVv)ZL');
define('SECURE_AUTH_SALT', 'n{Gj,b:fiFyZ3J/JRY_UzI(^oS:cE`P}J/6)QNL-^9(XvdclQg<r,t.lwpYHB&lA');
define('LOGGED_IN_SALT',   'B2B>@DB_U:9Oy_##I0 %s1w(%B;I2#cQ(nv6g[HP<+~8=E=YB!NS~ya^n)VHl0jR');
define('NONCE_SALT',       '*9L&^2h4L5(_=z=M/MuiUAw<S9Oo:dTAtsGz/*/.dE7}mjm ;sCj7LR7SBwS@p{o');
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
define('SAVEQUERIES', true);
define('WP_DEBUG', true);
define('SCRIPT_DEBUG', true);
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
