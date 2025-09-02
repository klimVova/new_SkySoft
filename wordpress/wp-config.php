<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'skysoft' );

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
define( 'AUTH_KEY',         '3D`m+m!rwWRo}R(c=8Fb0gs^pK?m.)@=8|9F#|kBS?cg!Sn7{ KoII/BmXH@uCuN' );
define( 'SECURE_AUTH_KEY',  '.q^t1KCa9e4<AxVOUan%X+ye[n~Ur,(U/1p-z&o6]suCOlIsb$jop$Nu^hUp*cvI' );
define( 'LOGGED_IN_KEY',    '1Ky.sI]hp}53s)1i;Wb-HZ16H<<&}K<BlnA-iYR6URZ1?nN7u[(8Ld=:<ZMp{$>?' );
define( 'NONCE_KEY',        'tM#gxFjIy:Bs/CKs=mPq{Tgm% Wz<x)RN!kbI/jiC#r>ieLN4&AIVr&cOC~,K`6l' );
define( 'AUTH_SALT',        'kpSnTSF{}_wwV+L]EItUGIC&she],AKh{o_m{OO;`5aTc>EtHoa],~ju3j{:<OUE' );
define( 'SECURE_AUTH_SALT', '.6 avL&Zau-J#+ne@%&Gb6=+V9:21_cxnT/mX6_ops?FlJwE+=(v:3Pup(=G+/CA' );
define( 'LOGGED_IN_SALT',   '*WZ6qB=@IM:EGE?b7W{S$J?Z6sD(uFrw`4gOGVTJ1P3vJlg:OV.h93E+0`t?RfB$' );
define( 'NONCE_SALT',       'FEl_mWy]Tu3_Fs8wr|>98Q:ON3x?y*Rf2A$)0@/*>tiI:JX8rkZk1ZC.+soB*Op(' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
