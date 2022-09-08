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
define( 'AUTH_KEY',         'Z^/w+`.kTq, tWV1S!P3n^ETDSLYPP^f{)a=V8C$$O_OO(tD)~<EW0&VsovecXI^' );
define( 'SECURE_AUTH_KEY',  'V0=2t2=|I48;>3axz-3gAe:Nbl.DaAT B-fCG%&/%J.8_`Z6YV&cT~g`<>(vS<}j' );
define( 'LOGGED_IN_KEY',    'EY4_?H^<]Y[b<*~=?)1~e`>a2(!`h6I0Vv*|nWOth.ijzPTi{?p,({-3]afdquJu' );
define( 'NONCE_KEY',        'T<XB>5Q7^k&eCye07#A D~Hw9SfU;kDRfVre11f[HE{>-]x+~a g@sfP>J/$+Z6&' );
define( 'AUTH_SALT',        '(:qHxFO vEY(9yF--@M;n(#u5As6mz{Of@uwi1Q.%]Z0A<tyn$M(B7_QpyCL|B^#' );
define( 'SECURE_AUTH_SALT', '_5`{f4Uq8D7O]1,52ePl>8eKc-UbO4~REDZYSo#}#$qp+YxUM{G|ajJH]]|)wJ$C' );
define( 'LOGGED_IN_SALT',   '0re+3wis2DB!E)L6Tu~m#Vfult3;@8xS@mdHw=a!z3HSm)6IdI|1!G%C%[g95DZE' );
define( 'NONCE_SALT',       '^*O13BSoy>S<?wTTU[)~hu lypvS/mX:xQ@;n~P%93V]!yK<$6B6f/K:$R^=9,rW' );

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
