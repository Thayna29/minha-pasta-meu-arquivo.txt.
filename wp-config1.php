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
define( 'DB_NAME', 'eternauta' );

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
define( 'AUTH_KEY',         'wAYVkH=>T.vJyjir1THV:r(G!C;iw[7`y + bI9a/xo*Lx0oXJbRC)x)N{jP}WF&' );
define( 'SECURE_AUTH_KEY',  'WUD}8#H9$@g9k_i#vw9z(^S*1^9vD88h:g)j-_JkGqzoc DgkRThmqW&#EkNgY*X' );
define( 'LOGGED_IN_KEY',    'zeI97V4)q o,*vuK71tmAYRFa/Kfkp0j14AUZx)t8$A>B5?W(b<Y7]?LU3UqTZcV' );
define( 'NONCE_KEY',        'qh?P7iO~$Xj9@9rq[MWUi@xbJE9nnD,hnmRQH<?5A*7H?ciOqS(ECR@myF.)IS;%' );
define( 'AUTH_SALT',        'HfU({vRE?:U2YhL5QU2tD2pmsU^Ent7%5Y)F;ZcP9Y;+,13b/=Q8VJ@U+.q)~J:,' );
define( 'SECURE_AUTH_SALT', 'Rs#1~~qf9jd$$oLSCK}tLlLgOQjK%fr5&FA:!*s?r12;Yj%9=-Ps-&g#x<uJ%gkY' );
define( 'LOGGED_IN_SALT',   '/2Qo_U*9<F8pl4yn,.MKf!U&210_ 4;zdYYA?`@?:!0D@3q;em`h7^>xB5Xs=o]d' );
define( 'NONCE_SALT',       'o67x-4T}YzM}7|5L0=JdW?iC)JLD7p.>-Xlbgde oQ{-N_.OKXx33q3cS!uO{0wj' );

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
