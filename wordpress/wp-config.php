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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '-fn$?&GkG:3N^/rs<37J]N-fM] +0sN U<yt,dQ_[:(>!.o]x0&9-Qj?u| [)RvJ' );
define( 'SECURE_AUTH_KEY',  'zKShwt~XX@{A_9hjFzKBfc2/RAZh!|p-H;V3mggLwb+S8#{O%Dh<!O6E7KhzK!MJ' );
define( 'LOGGED_IN_KEY',    'X]O~FM]b~pbksAM-~2.D;X=woXPxod=b34j+TSg;4VHI0a{?O;=! 9#t oTe j7Z' );
define( 'NONCE_KEY',        '1`0q3$jh_{taUKr]APk{;m<|;.F+V?4%dy3&E/Gmwf:`ko^pA0~AtD *pQ$ZybZp' );
define( 'AUTH_SALT',        'ez;{B!c,e]:X5V!^hjs)3&NeGmS@HA_>+dVqymibT_O6L;=X(_fbjcx9>{liShJz' );
define( 'SECURE_AUTH_SALT', '?]c<q-v + 2f&lb#&h/P+Oi}dprv^BPLP!X2Q#??9mfE2uz2b ,S*gs7zb=WXV)r' );
define( 'LOGGED_IN_SALT',   '(KBq!%p0ok)4l29#`{.SBQu<i@co i6iDf5`$1A^hr#n!v)Z3h7Kt?-DT4rqyL0s' );
define( 'NONCE_SALT',       'QNeQNBH/5ICyO}Q#=nuY,?F&bEy}@RQ`vT}t[0}~u~ >eFLw*[wST;l3f`$~&yg]' );

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
