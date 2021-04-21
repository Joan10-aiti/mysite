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
define( 'AUTH_KEY',         '#}e-(nT*CnSNXq]}D:*{^l/1SfgBX*HP~DNe~Beg&8Ai`9XK9RK=_ZI~ushF Gaj' );
define( 'SECURE_AUTH_KEY',  'tiExzHHK;=R2/*xppy[q#8~7Q;CM1~}FsmxUb6N%O]yYNdh4zf{E7%I7Yr4mL~u=' );
define( 'LOGGED_IN_KEY',    '$j+q4el,4=TQX,.~TG9~pokAolwxlr@!gj|$!+Y(s|42poYf.RX`mQVt/HIO21Y7' );
define( 'NONCE_KEY',        'Ji|0YF7z7,)=a,gDCAgam8s<~0g}f7qUK$HGKUND$j20~!.pi=51K>Nb9-@f:C-j' );
define( 'AUTH_SALT',        '?$J0;f^%ehX}[<8Tx`A)=gC^36o^?>}z5Ay7Hf`_Q%+xWrzUH[={M2Q}R!#Go8qP' );
define( 'SECURE_AUTH_SALT', 'BjV8{^%S6qg:E/ZE}[N(~uK^_>e[fFJ,GvLg]dCU85uis#*_1y*U=xX$G]}2xyb}' );
define( 'LOGGED_IN_SALT',   'J&Gcw65rKr8:acvsOF~7]ML5[aq<N(spIeJ+k!r7Y&L[|V?#E46~.`Hz4JnG2t[^' );
define( 'NONCE_SALT',       '_O.f+jVYYvXy/na1sL jqw/N;#B`>2?>kArTZh}(&lY]p?y~f6:nt5|5F@a Ia:x' );

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
