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
define( 'DB_NAME', 'institutoaury' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'F],+.$b/,hlp8!?3[gKT/ L!YUf!C^dx7%3]Xj,GQ?XA!&cA@]B[3zKh<SD-45Dm' );
define( 'SECURE_AUTH_KEY',  'MLQulgR]_UH5kQkBr_24c(-*)4q-|p+bhqz|>a[PK_.~6%2}l*V/`Mj1;aIig{>k' );
define( 'LOGGED_IN_KEY',    ' @n)#vn)IY=>VYRO3St|A.mCj%|%e$,}=`G._f=3%^6;=s*JewO?4O<pa#[(oVnU' );
define( 'NONCE_KEY',        '1aXzc#LL(Qo&n-qO7Ybvl._wu]Vgny!Zk:B&}[r%,Zsh>Lu31UOv/F;Z+Psl$wXw' );
define( 'AUTH_SALT',        'PD*4<y:>4lWfI($w=<=Q-7hr*_.F}%XJb>2t^;s4Iyx f*gv$8EsG,$[[B]tY5f,' );
define( 'SECURE_AUTH_SALT', '^SKV!`#9cOKU(UOkO?C=oxF[#oy0nB,WZzU+v$VEvH2UnPFenszQ#Z7FLv`6eBF?' );
define( 'LOGGED_IN_SALT',   '|looybJg3L!oNRbWl:.1(fODy69|%9@s.S/pq_)RG< dv:y>SxPH)K|Oc5o^$X)D' );
define( 'NONCE_SALT',       '%5JAx_imz#Il0o`T^bCVHcVAq2.RHYxK$AsOoH;oh`q}kZbMAQzfU4lpu5,b?o>X' );

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
