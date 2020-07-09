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
define( 'DB_NAME', 'w6' );

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
define( 'AUTH_KEY',         '/^T?2E{i}^)S2k1sG]a:fKd;)b=a{hyd{aT.5PkJ?aR(}[*pEMgReb*_o=fS+W,E' );
define( 'SECURE_AUTH_KEY',  '#D;O/oy_+Os>9yv56M]M 06FElnYIiK/q)b5F-SheJr+O!/A4gzOc/d:,t6tD2u_' );
define( 'LOGGED_IN_KEY',    'EKGhzP-vy[%Ywk{}o*lyADUrVqvpr=Y^K/+c>{*D]CK}1QX@_A[g-2}e2{N;0EHH' );
define( 'NONCE_KEY',        'NtZ=g#`@=9B;8&#`3wRwjna^*#Mr%!fSB<G6ActBA]+01%oLqV(Af>=]-f2H#tEL' );
define( 'AUTH_SALT',        '!7Du+D%qG5[72X372[^ge%@tU}+Fqr<}ndX(+a6>WC8N!*3?>cN8EUhfV;qpE_X1' );
define( 'SECURE_AUTH_SALT', '13^=}ge!9$me{kU|7-fBtSl+9y4sd7dIO1(0{/3ua>8XOC~(v2V$%7o}8%eVB2+B' );
define( 'LOGGED_IN_SALT',   'A=a+tK2~H:4=#D6x2b&VxIc=!!X/^q+w5~+=D_=?6p}Nevwv oJur)_w.8(_Z%Ht' );
define( 'NONCE_SALT',       'vk?4s.mRy8=KrZhpG=FjLbx~{)b,Fv#Y/n!G2C--05,z[&F6k[9=S^bi5<0 PkoC' );

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
