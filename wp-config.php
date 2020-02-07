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
define( 'DB_NAME', 'itpostpage' );

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
define( 'AUTH_KEY',         'L*?EzG%Q$sI@3+q6hZcbY+9@>h^/#OQb1`%eUB>{pZxfkl%t2u%`Ph~W|T{vyZly' );
define( 'SECURE_AUTH_KEY',  'D8uZT<c!4j3)s_(.`U(4YcvZ:4yi}Y}_9%ZmPeCmvZAfo6o</0C|*)8m5YJ<Y/9?' );
define( 'LOGGED_IN_KEY',    '1lJZF {.yX)Uj.[*<m=bz)!]JS:BQ!_xd>RhwKd/Mb.G~w!oO9#=6Z<j$=>1(`jD' );
define( 'NONCE_KEY',        '&z@h4u1#&1JnR7OlH3#9/2~OcHtXx;)-SqW8y~#T0rb/L>+8`yk4!<CE%gPXNP?7' );
define( 'AUTH_SALT',        'Yb:fP;DZ33at)7%@ohl)``CynNzW?wo*i.d??}cWK,/Wp;*!HxlcBbeRmVF.7JD@' );
define( 'SECURE_AUTH_SALT', 'loixG-9~v3!4Y>S?C0&odHt4*hMVh|iC.BsVmjr1n fO8{f]eVf9yR|VS*_?&X6)' );
define( 'LOGGED_IN_SALT',   ';zizL^R-c.~BaX^N7OA(^<Cf6=3m$W=>W*:|Z&Ek!V,w+T91cs* NSX#Zd@?U[so' );
define( 'NONCE_SALT',       '77B-Lp2<[`[Zv&!E+JC#q;7uKAGXBfY`2hVRgYn!:}.Re^yk6l@CSG6Z,(9`}r~X' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'itp_';

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
