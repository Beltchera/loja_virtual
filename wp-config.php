<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'GF(oFp?TjUq/ozjd>d9]P}k$^FnkN5aMImaHV)BWc6n](GYpDilC<8q|f(+o#&IY' );
define( 'SECURE_AUTH_KEY',  'd7az-foV;)R72,kH%MY>d|Irfs:TQ $XG1dsM{+E*<a_1V=O(KPi{8f[~N_3&d3V' );
define( 'LOGGED_IN_KEY',    'jcDWZ>yqTr6dQrF#5w+sn;,JN uUPAgrsLl/;4!yWXNtyh)k5+LhekmDgh]/o$q8' );
define( 'NONCE_KEY',        'Z39/}Ny_OJ/rYGRX~3J@LU+?s&ho.h!=[lqUjd[K2(*|KG2(8d@bK@u8XCo$A?9*' );
define( 'AUTH_SALT',        '?w(RI-|U`w*cxkce=`J5#TV)udgKdTj5wG,w2cZOZj6JW~n*JQDL%{cV^arrZBZA' );
define( 'SECURE_AUTH_SALT', '_sYeij<j8<X<A]FJda`=NP k[cPEBh<-lr_2HGmJ?^+M$gf}!USv.DfZ{ F3U^QK' );
define( 'LOGGED_IN_SALT',   'ROjQ{@5;P(PId:buRZf)?_#pR}|V.^BB{^e[~T@dOSL}A_BCdI#sAcZo%mjB:/=H' );
define( 'NONCE_SALT',       'ZNw5NR6S|}@6bPYOJMtz#Zhk&_uwBG`fyrwuBi3$OzNf-T5j?8W3$WdeM7 T8%]7' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
