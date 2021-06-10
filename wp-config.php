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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vente' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'F{$<<y6c%`Ma{VKtBXPn9*VX[f]!PJu9W:z~6<5w<]4tVyGc 9mTJ5He{ x,NV9S' );
define( 'SECURE_AUTH_KEY',  '-vBAw%)OX5>E20b;^4`VyJL{z]+H#DKOyZ$6/|SQJ;;C[~.MAp_RF|%@Gy!&tgEh' );
define( 'LOGGED_IN_KEY',    '[APY%%4og@I$>TMO25}F;jIu^7(W~l$I383wB+<z5Sf_3GdoWGgj[CWPZEFHBH}Y' );
define( 'NONCE_KEY',        '{@7:ta$(Lovwb_A6LPg2Iu[S8[pN2peg(>G`8/0X=9nV:3!Ad^Jmw4?ZR)q<ke:]' );
define( 'AUTH_SALT',        '*cK%lWL=,&Qk7Gphc,miasv|5i1kbCGP2f]egaV-$}2h8.gCU|E;v_##|^k2YO2s' );
define( 'SECURE_AUTH_SALT', '{2T,bH:%x$Ki_s%ys :h,*#|2]wSx_*@cmo65 8I+[;f!_Ecv:)%71pdn {`)}vc' );
define( 'LOGGED_IN_SALT',   '%QKfE&/b`B AZj2c!pqS;E8>(j5i-:7h4#AKpFd*360.)CUSX]O20ABKN@,blJxR' );
define( 'NONCE_SALT',       'iCQ!R(<+3&BBVp?kaE*p?0VGJGCgcTP% R1{8J{xN%$=,6PBn,Wn{u{^S3.S{0<b' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define('FS_METHOD','direct');
