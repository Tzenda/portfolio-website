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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '^LhMXNye3Br9F7GAG4<s2SdRHmj<t[:a`YXG2[{FZ(OV?62B(9|c:DQZmHG{sUb8' );
define( 'SECURE_AUTH_KEY',  '&};e1.W>ej|wz~TmUIMWnfA%.|&z/2w5UM|thqC}cdS faVgv!JZL|Pe{Wq!oFWc' );
define( 'LOGGED_IN_KEY',    '?wK2m-~nMQSIN;n)&}9Nko,WmwC]ufiMc^+*3Lc6b|O,-[[Uj[Y&,(UA,yRg{!ih' );
define( 'NONCE_KEY',        '&~(F>BxQ._Q4?Hfm),r!/uw|6SN^z?-wlkU|g$5V&&DL!CE^Ne Q[E)3a$#P#~7Y' );
define( 'AUTH_SALT',        '$<DvAvt(]8~6#.,<~n7jGR*f}<j%.Bg{uCL3TvbubZ~).[lsks//_o%v=ENZ>f0}' );
define( 'SECURE_AUTH_SALT', 'StWUFen5RZZKXUW: NchPrBUVO)fghi@D-Zh+<(59)b2%yg8*fwkWjNeRd[Gu;*5' );
define( 'LOGGED_IN_SALT',   'H~-Bf-+3AvC3rXp|z(21nKb{uv={!8.JsB=0#aP.Ww[w*a6iRVg)VdBO$e=`KdO-' );
define( 'NONCE_SALT',       '.=)A-C]zjL?K XuaYChab^?}gKSN`o8TBsLjadZX%NcN/x|#F[2J!8IP&F}q/yxh' );

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
