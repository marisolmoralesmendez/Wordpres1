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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         '0;_moCTDeKgfB]Mw]xq_/lP([Y-q!ogw?Iqfqdr]N@X$y~*G`SfUfea;*Yc+35a=' );
define( 'SECURE_AUTH_KEY',  'L}bC9&gvjS`*x$wJ4,M_:7T<8>Y#PXq0z]ntCv$%RDC6suMT_R)EE(Hj))LR[^]?' );
define( 'LOGGED_IN_KEY',    'Ar(CRzmCmi}g.F`PNGNj^f&EPU(<{>TB8:Ic`IawJ#oja&t^,T$HHHcq^A< E[Ul' );
define( 'NONCE_KEY',        '1S: PY-P%@QW7EW8Yzz0dp6(A`c.@!|Y`>BAun@FLp7).cLkB6k<:T(~rC,W/z`>' );
define( 'AUTH_SALT',        ' Nb}%#wVI2+KWXSG9!hhrrGbj(o9]<F6M$Ui{|@E=^2}v`|/{UPN6o7!Tc%Xr5~d' );
define( 'SECURE_AUTH_SALT', '!%|<FQIq+QkUIB?fi$0cSQ.[HqN4n`6fy7#ha$p<Fd0`ep+xPX:mn-,wJS*h^Ct%' );
define( 'LOGGED_IN_SALT',   '{jq,{wH3o(2K+7$s?u1K<n/+i2P.*.<GN(<4j3_e7FM7u3?OfBR>A]6IQt_4<7B+' );
define( 'NONCE_SALT',       'o8A~IwFy-s8KrA0xv:)FQ+ZCn~P/PP*ajre{|-s$_?B,dMxyF%aZG`rcm&EhX,QR' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
