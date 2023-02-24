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
define( 'DB_NAME', 'assesment7' );

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
define( 'AUTH_KEY',         'W3u;me`E;T:k(?@ciq5vNu<s:-i6;^ptok)&`)n[;+0|Vf.|]RO1%6wH5m^Z!!/8' );
define( 'SECURE_AUTH_KEY',  'Cr=0_+rMh(2.~gu`/33(wFF$+aMN5g|g~{*WBMOM!sJ#AR3nRs$(+L/W8wGUr|d%' );
define( 'LOGGED_IN_KEY',    'K?.kHcQ9=uR_*-($%n2R}|6u4f90oP{!R}m^BKle<]edC7 8uM0z4kv>HEdaf$`o' );
define( 'NONCE_KEY',        '0-8%QQj,$Nk[q&chpRh(t5eyF&8]P9)<,7H[[vbvnz9I6DHd)4FM):xp/`-`K0q6' );
define( 'AUTH_SALT',        'fes:/!>bc$l90S`QJl]LTPQc6&q{ G}mrw9om|7IKg&`$E^l=lcu#Yq[!!Rj4PqF' );
define( 'SECURE_AUTH_SALT', 'nZ+a]uCbqAe(bLZ6aU<6 %i<^ogp31#&b}qd]&}(M^-*R!9mSk?6*4K/@fYuduC5' );
define( 'LOGGED_IN_SALT',   'G8ec>Sc0;1[ 51nN5%0gcecZ{Js_3*<WcG9FM1K!lU;=X9) ,L24#%:;[<Z0(7|g' );
define( 'NONCE_SALT',       'fQ$Bx-B1Wsjz=SyD;{gbvvITOXshx+Py#J?m1cowB:eMs1`wa:ZWv3wgjEu#V7:A' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
