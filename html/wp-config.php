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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'Thuhien@352636' );

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
define( 'AUTH_KEY',         'YSF(M>GnHU!^4gjo_sAKD4RK&X.V3OPN9H}qDDt<s]=F(>Y|Rz*2}G+2EB GG,|T' );
define( 'SECURE_AUTH_KEY',  'J~mD,moe-BBV+/4&R%/.z)eixB(4^=.VmH5@pOD;ixl_%9jAG}J.u!_L5(TX4ioi' );
define( 'LOGGED_IN_KEY',    '`p*%Ttm5Y3dX{QF.C}w[&G11t2vWLSN~j#fFyP{HtH~NJ`2UmtL`skG8{8qWuMFx' );
define( 'NONCE_KEY',        'xE =>Z6a#eMrgps$F~d_]vM|N_Z:pE[W&[rAr8tn_+m`xkY>2q/{x8x)sJ/l5x`E' );
define( 'AUTH_SALT',        'L|S)ARQ$a6-}v4/kAp|TZGS)Ypuo]/pw8(Ubt^pX#=$9]x|*;&jN6I&R|x{,jsd$' );
define( 'SECURE_AUTH_SALT', 'UAs!7L}eM/PbwcBuS?*LWK=0H4fz);!X!vG2@yxG2#08cZJv*`ViMJ{q[M0Qm~A2' );
define( 'LOGGED_IN_SALT',   'Z=&wgV?B@Ee]*NJ}I%Hu:pfebS]:E>F*.kDN?^vMKSjjVEKY8D<i{/bOvw4spXKX' );
define( 'NONCE_SALT',       'mGMJQZO>?he;1ynjsv*cMZ8Rvs.0II{O,Ak7hT$N.Y1|)2=+BSvFe-I-fh<0YY,m' );

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

define('WP_HOME','http://localhost');
define('WP_SITEURL','http://localhost');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
