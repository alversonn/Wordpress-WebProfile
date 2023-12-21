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
define( 'DB_NAME', 'alif' );

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
define( 'AUTH_KEY',         'e37fb[ +XK]Z]^hl1X7y0<x!{]K!UDw.]Z@AhIv{KX?U_}pvzum^=b3lCA(*,_lA' );
define( 'SECURE_AUTH_KEY',  '3(VQfr5wwzbxQ9fG~!o3g%B1HH^tJs=kH&2}j`Uh@6cSNqfo}ws)B+K}<;yOd#(y' );
define( 'LOGGED_IN_KEY',    'H7N:QT;2]O42{`w% H8 ~NsKEILjQ93]{FM/~91`-F|t!W<%>PBG:X<Cpf] 7U1h' );
define( 'NONCE_KEY',        '@VJ*jO.x!+q0r,)jMpUl+s pAAtp0gopdh)y&^kvG[b2DSqWw>ymK1;FJJ9BC[$f' );
define( 'AUTH_SALT',        'ca/tWpDb_OA3.QC2Cc1V#@/0m9 1tK=|ijb{jy27ptU?<2%=0Iu?;~[gBmsWi(Iy' );
define( 'SECURE_AUTH_SALT', 'k;ot]SB#N8?[kduxKyJMwF:[(hkb@2I 5Ezx6wW_zrTF1[A&W,fl%_9b{kQsrG,c' );
define( 'LOGGED_IN_SALT',   'c}S3}B6A7f9nbNPqba#,O h^%d0rI S9[0bRsmQ1F;MCa6MbeRtn+I~`wb^RgkKn' );
define( 'NONCE_SALT',       ';p@m@cJ=ibehrwy24VhBGh#5Zt-,.xu~<Tzja~k>m/Oy6.76:ejIjJ16YXjy~9Go' );

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
