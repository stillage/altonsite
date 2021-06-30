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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'altonsite' );

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
define( 'AUTH_KEY',         '#4=Tw(tnbiNRW,r?l{Bj3!X@KDdoPFJJ>bUVikC5%:rHwHe`Qk_Xg%o.TAu!Moxw' );
define( 'SECURE_AUTH_KEY',  ']lRrVwU(!P6EE8MvtECnE=5`lr57m$5]5;vf!4vPk%P-S.p,g,+!y7|[YoP^Q+}#' );
define( 'LOGGED_IN_KEY',    'MR[sWR> %y7}-zg[SK)Rk3B$[lVnckKQB!(#}t~<Lg10r529t;y[yy.VWp5|^@7~' );
define( 'NONCE_KEY',        '*R~XUjE3.TrTP_mBz5Ws=YaUc,fD`,Zu1=WfS#N]~4S*-e[H6Co9)S=B5NyenrcA' );
define( 'AUTH_SALT',        'k[}E2)y;tWr<$tW=+hFH,b9(u%VHC5F_xF}yC[L2b:gAnjMru$zuX|J<yQ>PEf[w' );
define( 'SECURE_AUTH_SALT', '2q%,821N5+o$<c)vtS]i%d%gl4; XgF92=51[ Pk#ay8Nz,afd/<-3U_H2Z>p9}b' );
define( 'LOGGED_IN_SALT',   'i$n2htjEYiYVw(463brP[LsBpEikwU%z{bS8^Ec7Ca:^h(sb6ZgQZX;xQZFX+#^u' );
define( 'NONCE_SALT',       'f,THo6*|*K_$T1J-IG;u<PQaX8*izHyvUNmz@[5~B%T04QHvh~|42S4l#~pPk.[j' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
