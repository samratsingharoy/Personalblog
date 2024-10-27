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
define( 'DB_NAME', 'personalblog' );

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
define( 'AUTH_KEY',         'JjTYA3thpz6xCI<&9UVX`Vb&teh]qUGUNmz2OBMSrDPk:)^+;88BYU.h8cG1M65l' );
define( 'SECURE_AUTH_KEY',  'n_ 1G=II9^nAa=`TzD)w!~%w@s?YA$q,tN4x)wqsref~d)d~JGfV^t=utB>>Cd&V' );
define( 'LOGGED_IN_KEY',    'rOPEi<Wv17DDuq~sj..nn_Z1pWeIbB6.V ydd2zs8T31{{s]?R5XT1%Kh#D9x=td' );
define( 'NONCE_KEY',        'J*VvdP}Wt_-$FX<VfU?6-Lapb*fmijVr~/x/%v/&9KX!?~xBpD3k&<4-Q4`y!~c,' );
define( 'AUTH_SALT',        'gGb}3R2OJ_}eLk!}[X7yqfP@nDVjyU0AH@g(;*T&o^?X0LHenXQ@<WGdq?Bt;>|i' );
define( 'SECURE_AUTH_SALT', 'p/*Ku*UeNGMD4;R:ULX/HzLAa.oEzaWQhPUp`8ywgp=b5RCIp9H}^[WFATLymMD ' );
define( 'LOGGED_IN_SALT',   '|qvhI@9%BM0LX2^Cb~98XCa}hJr|l4wY@e?KC,||oQHYBA,H,#LD3.!~j$,R}y?J' );
define( 'NONCE_SALT',       '#Q+[nX=(cR5$caR)?;f9HGRSGc9ue4d68sf(c.fS07)c4{ekj@mNill`A+Q ~e(E' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'blog_';

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
