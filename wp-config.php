<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testsite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'W#}TEk;cg{S2h+Jx1s!*by/);z_RQOkc#4t5QK5T?/HL+:/},ulp|nI(0o_O}W[m' );
define( 'SECURE_AUTH_KEY',  'lm|h+t51-G#1&+FCSXu}K;chx5Pi(gPY:a[0/>`aPe_!vrLuFsbeCDrjy3]H2Zu^' );
define( 'LOGGED_IN_KEY',    '[7OcXuVG-ey7kAXro>;*[[G/!Xt<?/e1F,r(?.p(yiu };~p$Px}hssa4u0*?O?l' );
define( 'NONCE_KEY',        'Y .e*XKC0BJlb&5++l@]loDOd{p!B/2ponWB?-;Cz:+_^4Iav<;n?G.?l/~o8h+C' );
define( 'AUTH_SALT',        '>^GJ1!!lv,KPfsr_*Y(&%cZ7&PX3SiG&(-&EO_,1R85F3x^cf@x2dA[*,|38viCN' );
define( 'SECURE_AUTH_SALT', 'fV-hzU8,yE_xIVXEuRPrUxc-gBd9TlCx-T^oRju`zACX<#*G>8:IeZ `rQ<;i)$V' );
define( 'LOGGED_IN_SALT',   '{2Mng19.?[COOkJ:s{%a1@1B:x,^/3bT$!|:kx#3a S%}m/A(xz>NqBT)mm%X3]7' );
define( 'NONCE_SALT',       '[<AVLFuNF]9z^$R+HEr-|K;S+-SoA,Kc %#LW??:TR=(`- Mj9oY}pG+rQ%jvc8{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
