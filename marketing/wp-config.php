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
define( 'DB_NAME', 'marketing' );

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
define( 'AUTH_KEY',         'MwdT 9e+_XS4<Ybpn~czpi;aI<9+XfK|&@N1^BuDIu&G.DTnE.WLn8x[1pbwEy.;' );
define( 'SECURE_AUTH_KEY',  '/o~tn*T-7w$qO)r(OBO*N^AL*lj,J+9ofZq)5hwr %Y5N$a?64N>NhA|[FZ8_Us`' );
define( 'LOGGED_IN_KEY',    '&bZm>xWv^Z<9XVzMo|yT-Lp43GVX5P(qNpm=GGmiiHH}m#5eWn.R8[LM|TcW}k*n' );
define( 'NONCE_KEY',        'Nwf87swyFX50@,*W4~-nlI2L] :;0i52TWuc6 ++Pb$-,oIVCVGE:JL%Skp]8v|h' );
define( 'AUTH_SALT',        'V~ ?9T5ul&JC{HgY^M)]Ct_~?:,8IhI;FB9!tK>tNQ$2EI8AFU<3ZbjR7vb+_ 2k' );
define( 'SECURE_AUTH_SALT', '-nKYHXnA5laAw@(q_44)c[bx,s[a/w9,t-D-+Q*?pCtsO#+<XCYr6M{QRfs6B~$[' );
define( 'LOGGED_IN_SALT',   'M9,(O%>N; C{PmYc@86<I,1s*+DU6IjY%.a A$ EM=F2:CQd)VvEG{;NV9X?7Y1E' );
define( 'NONCE_SALT',       '0z![5`dqq&v^]vG|4DKgmP.y$;uk1Sfi_v292M/Xt;]27i^R0h}cBj&g;]de+L?C' );

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
