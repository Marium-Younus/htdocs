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
define( 'DB_NAME', 'kidlearn_db' );

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
define( 'AUTH_KEY',         'hM$Dc.hy$OvWvrUe,eyeb7=^ =kcK;Zi%Y81 5+9Sx>Y#S@[dV8xZToUll/K-JNW' );
define( 'SECURE_AUTH_KEY',  '}YviZUhV=6_388d^m`R=4y&!eA2zIKHQ>)h|[?M+7Q`c6Vd}g<yR2[c:@5s{@$5Z' );
define( 'LOGGED_IN_KEY',    'V:Gr]B8o[.0C{soc2({Vdn]t>*%/GV^cM0sNg`ie61(Q`2X]Qm!fe46S;_jz<ASJ' );
define( 'NONCE_KEY',        '~<%jr#x<bsgb%e>J9AG)laL{MU|_~-9BLZhy^!d5TW=A],- ,mtZcuKw!-,VQPgw' );
define( 'AUTH_SALT',        'NyVZ$6`9={0|<#7{`-^+/54hi^>{qhb=#hS3I#?uo)Eqm%3wm<0abm88k2nDwDc2' );
define( 'SECURE_AUTH_SALT', 'DXd&`mruT/1O1y[yrEQNJCvo=V_s}6`,:{H;n$r&-(lU=]O-q+^NLq<w&zx}qwH5' );
define( 'LOGGED_IN_SALT',   '+_zmeZ6M2YU$S/ch$McY(j!p;ja*N;y*V+qCMn):.+QP`J]WnHmG^=3P$&|SosNr' );
define( 'NONCE_SALT',       '9b1Fb]JcZdlSsM3aP#c:o;)_{U3}R^^.6 ^W]Y?ZM1j^0>uM|2Buu,UmnFnVbjUx' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kl_';

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
