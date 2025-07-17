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
define( 'DB_NAME', '96 Collection' );

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
define( 'AUTH_KEY',         't_E+VUJ.+WTG=`5} lg+IhS,CW%g j8sLYfBO3Jdp3miaQpQq$z}/ct~+E2Sakh<' );
define( 'SECURE_AUTH_KEY',  '(#;aFgj=/{>LNP|,pG`B8aYo3BZ<)mYquCQA[5Lf9]>9G<VK7RFG4aX8NF(1([.*' );
define( 'LOGGED_IN_KEY',    'q(FMi6QZS8K^$dNUWasBS7hW8xM][|zONIUOW43#|8h#wvtN5^c,p]Jo~1jUq{|^' );
define( 'NONCE_KEY',        'I).WS_`TH^xeU-vVg,Fe/,lRI`hXiJqmKZWAZIldp,YvL,r!EBR=J./s~Zc,!(Mu' );
define( 'AUTH_SALT',        ':ym,~6ztu vcROIcCs_|`!F?;/L-$Do)gh<4I+Kx!(PfqZk@7d*F}oF&{N2Z15O5' );
define( 'SECURE_AUTH_SALT', 'R55H,.^T%B{Up^acfi>qR=_t2ewO-;R*[YDH5K[>e7G8-AJ%m?skBFz0+iQ=E,qz' );
define( 'LOGGED_IN_SALT',   'i~lh3/[?YFX1&wCo@)HOyK9#>[*q_O;M#934;nk,K~#x:8Qg~xV!qj]r[h;B:rR@' );
define( 'NONCE_SALT',       '/Wg3HIm^{_<5J7i(8v}D+Ba4aABY3p6rou-:XvCA>$ax}7>.eC]$~vr0|AX|.gw.' );

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
