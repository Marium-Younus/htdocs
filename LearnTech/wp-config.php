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
define( 'DB_NAME', 'learntech_db' );

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
define( 'AUTH_KEY',         '?Y: 04k],?TD.`b^ a|Ty<JS,&<oT>{A/DPnB +h49T1OFA9D]-B_`(cx.`XW</i' );
define( 'SECURE_AUTH_KEY',  'Feq~`>Zw6a]G{F{%r3sjV,5!|~/O|&9Q@s,[%7MzE%Q-S&+pDM7|p|B[z5n6OFzi' );
define( 'LOGGED_IN_KEY',    '9Ly~87XAG,;XlJA9Sw*8}.q`GW,f%ERk8!O&:P;mm[<ae3UJtQ:qszIm]k5B[[gr' );
define( 'NONCE_KEY',        'VjXt_A.=WW@y~@*Nd#Nr/(/z3C0U|o#;]`WgPR<y>aed0t_a%ezozgxPOxmcq-!$' );
define( 'AUTH_SALT',        ')$y%|iSxvN~f;o1I==x?p^~t.T50&J8y5;{,jk,_uM<S0?BRTPC=I*4w?C<-V2Qj' );
define( 'SECURE_AUTH_SALT', '|momQu),;|x{*CU c=u;dRYN<CWH)wXS&rKII>=af=-B6<%M8rQXjq]l* /T}m +' );
define( 'LOGGED_IN_SALT',   'WaF=P2176E U27CV480ME=:oQdYl[|@j${a^:W=+nudgcCB}O[!C7T*b3#|bcrcj' );
define( 'NONCE_SALT',       'gXXu3t/@gy5eT~/7j>QO]?K4?i&@;xTxW rkaSfl6^wHsg/0>~2-a&l?AYn3lL^2' );

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
