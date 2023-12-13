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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Zv[#-7Y.H`6iH+bNZ4:#aMq!,<LX>cA8kI(SSd[4ncPGCV+*Y6>]BbX,*N>gDNK`' );
define( 'SECURE_AUTH_KEY',   'b>%(R%kgw9zEU]@@*SrH2Ap5Rw:O+LujLUC!nsu%ZyUiOw}C0x{>*Rs4v1fCb;b5' );
define( 'LOGGED_IN_KEY',     'Cn!JW7)d~$DlZ@doMfF%e!n}q]<i:FWY~Oy2YI#|nj0mW+C31W9YZh:F_#SnA`&/' );
define( 'NONCE_KEY',         '<1|eXZybwq&p3i$]pWu/Q;Z8e]~p1:BH4C/E!yH2zG;<cbX.gh^QrAQ&0cF@~lyg' );
define( 'AUTH_SALT',         '@^A~k {hdF6XxJ>Xvj!I.;y0M@twfz%&WAP~jBIbsA018KZn~ ]C#|bq9GRQHJVQ' );
define( 'SECURE_AUTH_SALT',  '|)AVsXPif/`M=Fi0Nubrl=8>8lLx{wf%[^}&Y$6^&)G.d963)?;*J(@=W|Yu7~Sv' );
define( 'LOGGED_IN_SALT',    'fsqpVt@thoxAmjA;S@ci#_Si]aSa~Ka6X^XO)Es Z&wRo_VB%l/~B7=4hbG!ca[/' );
define( 'NONCE_SALT',        '_e#vORjY,.%1+?*]Yhv$80BkA8I,SW;lAv{$[02H|`dg)e*C#$0yp~BHwmgLPK*F' );
define( 'WP_CACHE_KEY_SALT', '.YHD&bVqGtT )IH85@lVWL+~ RQyn{)l-:o`g2Jf(TJ%MCDj*~E7@N,-qNN5%g=e' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
