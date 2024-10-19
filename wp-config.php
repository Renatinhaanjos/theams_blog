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
define( 'DB_NAME', 'theams_blog' );

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
define( 'AUTH_KEY',         '3M]K{l[r:bVl[lc>+DfBKe jn.p7im-Ch_&}a@d]]^_>!B=UHDDYF6#562q_Z&5P' );
define( 'SECURE_AUTH_KEY',  'FMw=10Z]]cNF+:Y1E9b;2`0cg(=]siPsGD&w/@sh J)H3?E>bR5x-7G1oSezI;mw' );
define( 'LOGGED_IN_KEY',    '!}O!`8_>[Xs.0iQeo#gcvF2??uOb?asUE/V8RwS+~k~:eE%g[;Ad *j3!Lb!7d~W' );
define( 'NONCE_KEY',        'ZaZ-t;Ce8R1mma_(3J`@zQ.SGV_5wFn9MBeOXuwPL!DIAau.&699h}uUZILb6yeY' );
define( 'AUTH_SALT',        ']=TzWB0HG|T2q.`dOfbon@r+wsu=OUDyoikA*i:?np+*3y.`%Jqk?)NYIHl`qyg,' );
define( 'SECURE_AUTH_SALT', ')h}F<JTlVSb<{SXS}]|hV1be:ak,MPGP_N]lT_;C8C/5n64?UqOIasUd[;vsDT8t' );
define( 'LOGGED_IN_SALT',   '>|d%:#hnJtb554lukz0mD8&$/a5o^ )Sx_Wz*2L`6EP;sKr+hZQ%I/-^+2pn_%p%' );
define( 'NONCE_SALT',       'lGZtOFkr8HiAv0N?#1FS9fl7u3r] $3Ix ?rJ/pl(z68CGSHI9QIc})m!kh#^opq' );

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
