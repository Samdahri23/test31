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
define( 'DB_NAME', 'site_db' );

/** Database username */
define( 'DB_USER', 'site_user' );

/** Database password */
define( 'DB_PASSWORD', '123456789' );

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
define( 'AUTH_KEY',         'T=>eJxtb=5jd^A5iPN52a=[Tn;qEslf#X;aRon;LRz^1p<dPQ,y,oB06Nj?w?/Jk' );
define( 'SECURE_AUTH_KEY',  '5wE*kQ>Y1 ]B:VE{RhNgEOp),]ry Bmlr/V~]<4<r/+E7O~wmsbD0[6H+$*S)w),' );
define( 'LOGGED_IN_KEY',    'tT&=,`-nBB!h*Q)bi=HJR~@C>H,Y)<9iMGTiy8;D&T&gIA(+R#j.h0%ZqYZZ0a$/' );
define( 'NONCE_KEY',        '@uD2OF Mzs.x@T?!i>M55#![s!)1;]nZ;T2{2nr5})u5 cs>2ZcOcqbWCRZP7EzY' );
define( 'AUTH_SALT',        '{#ASlY5it4]]u5KsM#.i!l$_d#,uOt}*z,N?jU[czP3;fgU`P%*qN$E,2Z?WxO:U' );
define( 'SECURE_AUTH_SALT', 'Yo)|o>,A<Cf$m.t3:%pa+:k?T6Y|GA 7wG?@CZt,@l5[$P;cvE&D2bI{@y=`Z--,' );
define( 'LOGGED_IN_SALT',   '+(n}hcij$1@z|zf:~A$ycO5,CS%tRc7TE]9dS&?YkQ,10M^*1AQArmq!{pukG{Ih' );
define( 'NONCE_SALT',       'CtM?N}9zP!M)lvquh8PeP:3%?eh?jd6DbjRFX]ntp kat>/YRKE&*LBQJ,fvxZ|f' );

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
