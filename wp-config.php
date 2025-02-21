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
define( 'DB_NAME', 'hfpisos' );

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
define( 'AUTH_KEY',         'rKZIovG&wCP@f-i+y~SJ<tUUL}O?;N7NRB|BaNMvvddF/npPU_R.>QZwh$1iJ]}R' );
define( 'SECURE_AUTH_KEY',  'kB0fXZOC3ES.[|Rr<$ra?=O}:Ctwl^KL+_gM:i1W3vuu2Q>Ei_x1=WPOs2V@uE>0' );
define( 'LOGGED_IN_KEY',    '*R%iis/d~=LRThqVIXi&.P{1K|0F#p6D?xrfW&~_;F:|r<bXI1ZI>J(A1kuS`LT<' );
define( 'NONCE_KEY',        '-Sy)_n@v;>#]]6/3}t__x>nj`^%$Q)=P}8G2lG?-HHcgH3pH$+%6k|9Y|Z;mW@x|' );
define( 'AUTH_SALT',        'f^j+#MF<t7]mUf9%ha@T_dLiv,|/dV|$B*cPW|gcwR9?l`Nz.@~[qu`c,47PDp0.' );
define( 'SECURE_AUTH_SALT', ' k4*D%.1dNXb/fO:r}U=Zwb:z5<:CkX7lKUoqHzZAaPa]P5,56=EHIh@S0W 1@rS' );
define( 'LOGGED_IN_SALT',   'JU*NFO=opXNpwr[;rZrhWx}^[l`VNh]YWEGsRO>KE(C4A*CfKQr~X^pS+ecN>BsB' );
define( 'NONCE_SALT',       '|a3e#a%Khh*gs=rV|y[Y6$]G~~)#6C#}#s7M SHSdBZ]OREK^Z[q*EngSmeX>y5G' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'jf_';

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
