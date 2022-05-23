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
define( 'AUTH_KEY',         'UX1gz 9^xU3{[l)M*FTkS&c*d/={hVS?2Y*.8E7u 2zfZuZ4>?gX[*sw}*,wxzPc' );
define( 'SECURE_AUTH_KEY',  'u;2n%l$Q8O0vt#QJc.Qn1X0KDjK_cPeI3<4],XPBVF0>JCb<H3$qD- j<;>XB TB' );
define( 'LOGGED_IN_KEY',    '#d]SiX)EIn)%{H3QluG5?M Oj0eOG}:p]74^EYfAL[|Sxw7,-M=wRN/e/df7U?RA' );
define( 'NONCE_KEY',        'LNU4<(8]D:?f$ZCk.>sCVQ?xqO+(5ES%% s_gKSu>x_oADSN$4TPp-VSI{WIg|i3' );
define( 'AUTH_SALT',        'iqYdT.#cy@)-3r`DOE2|~/LNr|R+qzf{SZ,tDB>!e}9x=:h[S|RuGzY%cXE/:9-W' );
define( 'SECURE_AUTH_SALT', '!}A%GkWJPu<=`J(wDiW?e3#[c%A%pZ7n[9dR)Rp~{@`1y/*@br$}SGJc]R#`a`?]' );
define( 'LOGGED_IN_SALT',   '>:+%Zntvd1kOT-Raf|bj_;PE0>,*>(*g3Q+muI!YEIk3CQR#wWkn[Epn>M8n2aj9' );
define( 'NONCE_SALT',       'jfo0Z!r^T:1I:|uxQP0(V5;oY{p+VhzoHha<jM3_hg~4.vvHC~j)=PmdC$6D7o97' );

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
