<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ngmn753_wp1' );

/** Database username */
define( 'DB_USER', 'ngmn753_wp1' );

/** Database password */
define( 'DB_PASSWORD', 't723vwg1zm' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'aso]oZ4VEzx;D!4Qu(Vz&Pv:HbB=83mA!D~lk)mD]~,SY ]=R[|f{!Q^T1=?NV::' );
define( 'SECURE_AUTH_KEY',  'toz5jd@jDz4VTI9BVj#8*L`YAq#mh-uAUbMK1#/&NCZCBt;gav+X|2/u,up|}-W|' );
define( 'LOGGED_IN_KEY',    'I*=M1DRrE0}}ku}WecOldA&83w@BXpu3/?3_-&HBS&f4mbtj`Mk%]#Q&{*=e*a;b' );
define( 'NONCE_KEY',        '*Y(j-@&im4__QPV@Qp>?s|b%@VYUsj`O.#NA5Ey%U$4YXS95Za#S8w_x]CugER2L' );
define( 'AUTH_SALT',        ' Y2D.=FWGFr]=x=Z:O?M{Kly(6N_}xi(GA/R&`<0wQ|(:qj7$*tT~@/Z9umD*Y,+' );
define( 'SECURE_AUTH_SALT', 'nzb,:s}B@@{]BgJ7sc`oJ:K%m[>ly?C^3Ck`-N`_uL[y/flG-A=R6E-Put yuoTY' );
define( 'LOGGED_IN_SALT',   'Ik7S5K_c*fV/4tB<Sx%e9x0:f7tVVS<1&5R&WQ:!dN),5IE=3 }xP,A=LsoVR7/g' );
define( 'NONCE_SALT',       '4a2MQA{ wLY][2)6^4+moV!MXJFE#wAsbW|72szoF-X?9nzPHe>_wy#Mj$rhgDg^' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
