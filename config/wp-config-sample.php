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
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'database' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '$}nR]R8&?NwK6Pxng#K]l%.BSWWw:%A[$ZA,D|4/[0h-8/nyva>un??Y/-0 >3Y6');
define('SECURE_AUTH_KEY',  '@@=PfI%WG-LuNlzgR6Pk]0fwr#)w_{W9+|$_D#K4HsDIpe>yX^xL$k^!Z-x.aDjU');
define('LOGGED_IN_KEY',    ',v)O|J:X]N-GXnco,U4{-TO./h6,b}nX;lQorF<o|-ak:|V!na3 luC*~x6I6U7i');
define('NONCE_KEY',        'mILa9UfuU+yNb,|<1)furz3u$3d&aK7Gr|90#HW-/G0ytTOr{%LA[?(KrWA-(S~Y');
define('AUTH_SALT',        'cno/X)-Qd~wUfNFKV*,aTHglqk<}5CUc|UaqMo.C2d] ~K)zo(-|mo;QwN%2Iyy ');
define('SECURE_AUTH_SALT', 'EU{Wu;kzZ9hMj011l.vxj~G,siXLFv!(SFu|UOtnU?W}Q,!ksim-Vt7W-l6Q>${h');
define('LOGGED_IN_SALT',   'XcE3$$LOBK[TSMi#6o=8DHFJ^c;,5PlX-UT+?xN_9CO|<Xu>F.sQrt5h]0cv[oAq');
define('NONCE_SALT',       'H*stIQs2XZxpW:h5~F?J9{.<6+q|z1[%*>*)L~-k$]?QAvFA;m:kR`, Z|-.[Z.Z');

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

// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Error display
define( 'WP_DEBUG_DISPLAY', true );
@ini_set( 'display_errors', 1 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
