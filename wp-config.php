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
define( 'DB_NAME', 'portfolio_timber' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'pro3620' );

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
define( 'AUTH_KEY',         '[qY::up-fJ_(@@El[+De{>MrU.NB{^ATe*d~5ot}mZHN,c& 7M) -PWe#u-_m/O.' );
define( 'SECURE_AUTH_KEY',  '=w~w44WRs}dh!e%Q~SrIzT^=P(fK*CSW)T9y9zs_s)OC21g+n<v<-L}U4B*<Cni<' );
define( 'LOGGED_IN_KEY',    '9d28TF1.P#03lUkux82rIdrQc]p@G7H)Lv;@^5#bbA0u$H&+jshtrG]9%xJ 1RTw' );
define( 'NONCE_KEY',        ')_k6(,#kA]O|YB+JO:7<q$}Gh)Ed`qND}Xz%jAxO#1>70naRX@I|R`vv^>FP%9{d' );
define( 'AUTH_SALT',        '=S@wL^/;MHj:x/;UStk!C/{plaE4px?wf)N0~{^II7eBo3YjP14 S*T#[R[S6!x2' );
define( 'SECURE_AUTH_SALT', 'ncV2^).gkvi7JGCt;k][DIiK-t1)RF39`9U&pH1n8?!|mObL&zOl>.Y[oi[D-J9.' );
define( 'LOGGED_IN_SALT',   'j$L5$y.CTU|3ysHQ27zA~&b=R0FUF/m:n!L6.I*G0Al:sE@VNdy~&Cw<n)WbkLQH' );
define( 'NONCE_SALT',       'k(pRRmXC!JpP#<8qR7<v_3G6>Xo*XRygh@u&>_E#b,gj.u!2#+V<rleKqC Gt[@-' );

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
