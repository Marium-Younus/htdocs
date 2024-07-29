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
define( 'DB_NAME', 'wp_dbblog' );

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
define( 'AUTH_KEY',         ':lzU<U%2k E90C1+`0r1[I_<z3,4a#KFzbSdi59yn+cGL]v</K)Ao#W~(Ax%|1_ ' );
define( 'SECURE_AUTH_KEY',  'YVsflo5m 8/(UsB7c@{|fB%2Cb7.jN;k$#0I<csidgz)EalN{]LpT&w)sHkMXVNv' );
define( 'LOGGED_IN_KEY',    'II]&hW}qB0C/ D@]p8(bjkaWY~~f},V@pjr)j7v;Sj~0<G@vL)h#_PSIUW0MvWu<' );
define( 'NONCE_KEY',        'xg30VH=8OzQI[3_n4SOD{9PAT)R{D:nFkb6i+]WI93#pG&Oh5F<aey1`{T,J`Nm.' );
define( 'AUTH_SALT',        'y:(DJ6zQrnT}*rrP(g1H*7guacr!q&#p=m:aQO3H]]L78 (4r6FO]J3Q.I-P% 8{' );
define( 'SECURE_AUTH_SALT', '(:]&!UEIerwpI{%sIMdJd1<-W(wl~<{mgOkvKtK24-sQ&5;83fpUwcxPPkl&G|cC' );
define( 'LOGGED_IN_SALT',   'ps_`ARUe$8s.sB9LcERNv=`^-<}x>[d*uh[_Z lH=C6!e/*ByhK7*09=:y ooB7c' );
define( 'NONCE_SALT',       'u>fE_;>YK]~9xb_gs$zltJ+OFJ,qm^6a.f/!aY>3pLl?z9anp(AkWhndjVL.Io![' );

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
