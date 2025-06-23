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
define( 'DB_NAME', 'thaynadiniz' );

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
define( 'AUTH_KEY',         '_ dgby:ne_.8=BwI0JNIh;QoB4/sOC`sP=kO>p%%X?Nz#P#.9>H@I4;IN6)EKYg ' );
define( 'SECURE_AUTH_KEY',  'faW2HLYteT[]@9m9!y*F`<0q7Ca9wWM?XJ4I7Tn/^]Vm|6fLq7kqc/IhIBA2O$w&' );
define( 'LOGGED_IN_KEY',    '2U$w^:|@#-6 KD.~`Q!ljtOi,_L~8~9#4i+Vl?(Ydn$<u3+52tuZ&}t<OXq=UN/^' );
define( 'NONCE_KEY',        'B}6c1/0%,Te9s7J3_o kIi41X;e;|,Q&%N-!!k}~/(Vm&4-4ohU EKH_f@]h~Pv!' );
define( 'AUTH_SALT',        'zWE*dYwD!1|*c:!`exL>o_0V-jt(I$W/dTNPpH{GLNiS}!hU|o)nvh8&eq_:qG/v' );
define( 'SECURE_AUTH_SALT', 'aT50aMEDQ(??||p{!(pp-ujw@5K@@YvzTNr/aAbsSX{cMv}kofbjEd$FAT%G|eC1' );
define( 'LOGGED_IN_SALT',   'Yc.h$^6jfgpxVxG)^eA?`E0*@mxI`9HM`cle>2qQCqSRh)67O}_{BK+G 3cOG aD' );
define( 'NONCE_SALT',       '6+]=TO8x w1}wqbkA?k$%qaUz>=XAjFY^-N[utU?58|GI6iz.w9|,iX^SzJwJfsL' );

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
