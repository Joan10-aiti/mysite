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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'i!D):gB]0kF3y-vDdRnA7[(=[@<mL2--ZQpEh&~*AbSKm1`CC>@z{}F3VEC-wP:`' );
define( 'SECURE_AUTH_KEY',  'p]i]`x(MF6P&U1^*Y$*tt.!lH)Q3a.^ce6A1NsC+9#4(8/+/Vpf>.8!v>D*~g]TY' );
define( 'LOGGED_IN_KEY',    'F^F?()6]L v-f@8fb j<JxS^|Ro|5`}pNt KZxrk;(xLF{-D_CvRc?e:cGO&t$&3' );
define( 'NONCE_KEY',        ')%Zas9)M:,]u,Vaj?WG/eV.!IJ5w!wRR]V@&AOL?{,cREAjR(HEv+PGSSuvlV<(v' );
define( 'AUTH_SALT',        'SFvJ[V#!I|vI65{Qppqq~f`G)1{s{#VcoKZ%L6G3,ms-t^mvXDfXPH$m@]@UzVW;' );
define( 'SECURE_AUTH_SALT', ';YG*s!$G?^3_):YB,Y|Yy>H;{op(ysxdt^eWZ$W[+`:8q.#w:#K^]U,z!@IUqCql' );
define( 'LOGGED_IN_SALT',   ']P{+.[4%{MvQa0:!Yg?/J I,mt/7m cla*+xmD8AKp?f=)LnSQ#xG4l^$zNcL2bb' );
define( 'NONCE_SALT',       '<YEv!RbPxf(_s:wgMsPEy^2YZGo;B}ZQw1~v3fbB$E*qzC;rAkF7sltVF10KtYwE' );

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
