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
define( 'DB_NAME', 'mywordpress' );

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
define( 'AUTH_KEY',         'MNSE6D]8X*4tREYxn}9Na8#me#e@C8KdLX=hr|=^,o./F/%40K3g#xg*vSQx-1A<' );
define( 'SECURE_AUTH_KEY',  'HZv&$)H`T5D%gjiH(vz|gbX%(OB(M-gQr8rf.]e$iwQ*AR8G/BiDSI`mf9|0Im@F' );
define( 'LOGGED_IN_KEY',    '9eq+t(wk8./[r2WW>9`Q=NkLy9V)j=%}lD%TD$&*S|_Tj`#i7I6nIt{/b$_i!H&R' );
define( 'NONCE_KEY',        ':,S6XSfaLJXZ~!N#m2ug*PYh2hq%z>Fr,}72@>Ze5mX^@!k!nxBD4_oC>wY]cEIQ' );
define( 'AUTH_SALT',        'mlj7}N(NrAzzV+@6Y~_ZT:^C(6e=ku^dvAF@t8XEoX^R4JQ?Bggu]f;1^7_,RsT)' );
define( 'SECURE_AUTH_SALT', 'WQ0qhVc77xbX1g/Re}9(H6E9#hZ`>k?Nk8I<+dXNab} vO-dYs*P;WOzS3cw62ol' );
define( 'LOGGED_IN_SALT',   'h5J37Z/)6DzdA4fhY%EaZRc{lJl3p|m1yjEll,^$T *=H*B^Ma4aZ/=[]w=a2_cb' );
define( 'NONCE_SALT',       ':b:c#H6qc@P8*X+1dj.^];W))siMPx!>dm^np^rS!ry~vs{7! <?;:)sbBhhw@? ' );

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
