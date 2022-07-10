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
define( 'DB_NAME', 'price_list_db' );

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
define( 'AUTH_KEY',         'w,kEJ|s;)1FQJ2&B+fBE|;cwvyrH,;}>#-{Z2f2m,<e!$b2-*l@nTNZ`+,r<nNqJ' );
define( 'SECURE_AUTH_KEY',  '%Z%Htu ze[!;b|_.%qP+/4)XVD(}[iUXWZccK;Yy|(TAPHUJdeKg^*(SVu`@;nat' );
define( 'LOGGED_IN_KEY',    '?Hz~of=t)}Hs.ZjpR3I][tu$ic4-`]s_^;dIs_A3a^4^Rw+7Mq{(Y)0di`u0ROnV' );
define( 'NONCE_KEY',        '(XHy6FEO%>&&rr/_&4MiXh[qpG*N~$XJ,-a^Rnop!OSBw#m_AtnVm,7MlrWPuph%' );
define( 'AUTH_SALT',        '(#je0)fNHJ(7t<]x$vb<@2x6k^Sl(8a(ZjC=/KF aZjr*4&%RK~?$rORtREvHY8K' );
define( 'SECURE_AUTH_SALT', 'S.-pHv39V$??#;M|0J=%tJoyY}e<4Duamx{k#$N*aJSX?,~m!6Osz@)40MR[a_+}' );
define( 'LOGGED_IN_SALT',   'xjuTns4u_P]tYWPi.+x12~o5L9~BBI>3NVkN&ReHGEKD0@iJ|ro7bl~xEwQu`:j.' );
define( 'NONCE_SALT',       ' ycki edhg!v:9=2>S>{06 d=7EBuIRpZ{v?$dm~|&!lfqJ)K5GB81y|qy{rbG^_' );

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
