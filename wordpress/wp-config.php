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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '13`nR]%YF/i3Qd4}^fwieQ cW^pb6N_ZbO&4ORp]LO>kYi6^pNci;Sa^=_&HLXAl' );
define( 'SECURE_AUTH_KEY',  '*b)_;ms+Yvc7 QF]51;hRwK5{?(sS)Q5>R_v1:C:<+T?#C$Yc0#jrBm4M&Xd~;~1' );
define( 'LOGGED_IN_KEY',    'oziCQHN!k$H/w$z@FeXt(vAP`)I?c=Ek]@R6|sPm(-pQH M<djX^6r~EeISi9GG4' );
define( 'NONCE_KEY',        'M;y8U$#/nn k#iiZv>d-Y@*wg;(]L.alb|0&qx=VJl9(y{AZ}okM77[){q:AQ1px' );
define( 'AUTH_SALT',        'xtbG9%S#2}96K7f-xEzrmuL2y6Mlqj4vIhH}yy2hMP)}XhdN^yo~aqUKroKoYClf' );
define( 'SECURE_AUTH_SALT', '$`Yvr^pK4*1}1Yb|{SNP~HrX,&6vB_e-bl8-}If[`NmS:Rn|3<:jcH(&VWN.yL<H' );
define( 'LOGGED_IN_SALT',   'saU?rA(V9Synk1$x3s2XFH4j56::8%3.tYBBrSwnhB9V8}{+`yM9$JKxNLz%-^Xc' );
define( 'NONCE_SALT',       '#U@@5ig>;8u]P@|Ik;ElJ=QSw>CQ#UQ#07?v0)O+-7HljAG@,c6yIb`B}4Uvq1 K' );

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
