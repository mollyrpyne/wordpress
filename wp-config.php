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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         'o5-%6P0b`C;0PqwyR^sw@;8lgq75*nRsVm+/gbE:Z5iWI.ptfzN8=x(dad`8B+}G' );
define( 'SECURE_AUTH_KEY',  '!9F7w0@3cO|<+X4_22:PW1<9)+-!;VS63Sp@/!ccG#$/mAN5MIi!#pw.42~*jB0=' );
define( 'LOGGED_IN_KEY',    'M Dg&gg8b,>;$ 4F){4<oY$WBL*jj.EGj]`?d._b`xJI?s)r/Vvz0`NB9AS)<L1B' );
define( 'NONCE_KEY',        'Xsf=!#jHopPN,.9gKwK4Icy[;G^uVe;Xy?>B7ZAPL6dWp~bc<)iBoA}:5h6w3Zw-' );
define( 'AUTH_SALT',        'eQ2#F~[e::qENFdh!3AaizP9/)}4K^-Mco?j07Zrv%C;S0y_3#D|Ih4VLh^=GkCY' );
define( 'SECURE_AUTH_SALT', 'Ce(k3YQoTcvgo4%oJs.I&3 0_..YE/kw:p3TZWn[b{h7:B..7T?Dz>rOK9aDc|i_' );
define( 'LOGGED_IN_SALT',   '&M:r*Y{`VQ;+O@:%e&I6pQjOEeR)F5E[FSVF*VM)iL7N#K[- $_s(n~K5FIi-4+0' );
define( 'NONCE_SALT',       'xOICN4ntcru5=-l;}Km%)QW/U{ZM_F?*Vh)b1Jc9KZ7`U 96Y<Lhrxl(0[1aKuwm' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
