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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '>3IvCG16e|*?ky wDlY!(0fHq:fF Hoz{m?4O2eEhqQN<^8rw[n>_$g|IxurER[,' );
define( 'SECURE_AUTH_KEY',   '[76ck4K0K,*Q/i)S^(<~`S@3bvq&Rl9dGH,)JR|,i^9wEqE+fXIigC !9_.[^2{(' );
define( 'LOGGED_IN_KEY',     '$wU,_}}AWAxSKM!DtOXF8CUO4N57gM9LlVAN10o5P/R53Y/3|0>8xZTf4cr9gwxd' );
define( 'NONCE_KEY',         '[2@Nq.pg;J_=U38<!AGTq/tNhsr0V;.#sbvkWr qNL(F2h6kIzFZ6WqwpCA_jAN^' );
define( 'AUTH_SALT',         'ge-VUuw0x?B+kO~DR*ZTfbMg:KWsLQe([PYfG`w!X_{@c7bn_V^9Yd+.Le-,/XaF' );
define( 'SECURE_AUTH_SALT',  '`VTSe[2Ok6&$$s^D(ixERK:s_T(Gi]GaPn}DO7(.w3#]$[Bu]S]e[mD<-PEI>pWP' );
define( 'LOGGED_IN_SALT',    'oj-X4Q0*8RL#lS2W_rhN_Ymy=:(JoG7F;e#E1a?CniqNQlDSP{t<3FV ABiUosIo' );
define( 'NONCE_SALT',        '2O |+&Q6,wZBTIrTVrA!Pq(AinmGE+D>_LgeR{u(5|b]E5#Hgcb%WN4XF:P1F=X2' );
define( 'WP_CACHE_KEY_SALT', '<2&EXco[0C2U$3$gkq XQ8zOW&@M5UbL_*1(LVwQecO0:+S#qY&8YK0hzI{7$4,0' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
