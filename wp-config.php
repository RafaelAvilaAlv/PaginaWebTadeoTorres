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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ')}jw!]].aT(Hrl<[Oe%Re{Lbja?05aae+d21iyD:Fd{v0~u:B-v9}t5$riflE4s9' );
define( 'SECURE_AUTH_KEY',  'D+JWRnw%ax}=h*.rS(ZP5A8s?}&1p^,m$IKM>hd_J+{JoTHcwa[dd+sv/GKDiP4n' );
define( 'LOGGED_IN_KEY',    'tQFG|E&z5|<4$ySA747B#mqk2pYBpcA_^@?dYTR`W)/PZf3=pCu @~zg:*20:_=&' );
define( 'NONCE_KEY',        ']{Xl,f#Ps-3{IA`/0,aZx%yAb52v]Npktu;iA5mqpS4gO|{ZG0e9vcpAmxD;PHBd' );
define( 'AUTH_SALT',        'zh):)NEXg^WM]fyo$YH1.F`?4NEsVo+iy[Hc}*^MYmc97mnTzN<;S|1|a6gvSE|{' );
define( 'SECURE_AUTH_SALT', 'X)c]M@~`pdpa|ZZMNe9]uI%GRjpW|iDfn=6NdTou<tgw4os&u%i2.eiMZZy<K{-V' );
define( 'LOGGED_IN_SALT',   'y+M_$+r{:5/< Dj%<os/Gz(jQ:n N;4-DfQ<|PV!WBo4!@I R>U{;uZ_M#O-D:$=' );
define( 'NONCE_SALT',       '^+Fo?slma`N;GJ1CMvs$tRI=5,7&`dt=teAl,o&e;yV8D$ofOhG+&$~#Q4i@jX,.' );

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
