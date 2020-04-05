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
define( 'DB_NAME', 'scoding' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'k!Q~eDBu/^mq+%/+qz7KexDcaf.lhW3YXhODMvauhG0%v^Y0`z4*@_QiU2cqgwJt' );
define( 'SECURE_AUTH_KEY',  'G%@ {XlS}_k+-Gid`db<`gJW_A2;@2saqZp`:sIp9r~(8PNU~qB8m@aL|32f>sV7' );
define( 'LOGGED_IN_KEY',    'b1)1?Im%p=;DpMSIr@sd51woRbbQA^oT?-sbS}d2>SxhHtWI.<f4Ha_6y|BCX2ay' );
define( 'NONCE_KEY',        '$1j[^R.wbB5}r{h`aDkpR(okal`rCel)!<+}ftb|->^-,mt#1-30JWLEq(q7p)l#' );
define( 'AUTH_SALT',        'L%M}KPmTe6]m[@0wab+c_>To2ARS/e~Z,/g9XMA5SXXKO?Dga^-@c-,z=Qdy[tB>' );
define( 'SECURE_AUTH_SALT', '}n[:G!fn|S0ZP{?B]x{$:w^V}g-WOR/CfxGIE)?Xum+hQ?6V|yh;x>05G&:-KU3D' );
define( 'LOGGED_IN_SALT',   '0~6jAZJi(~Q;6^hB^knq{TZ3.gE#1wTi^jvJ0O-ooQr;k.I@kQ[Tb>Yun;n@r#P2' );
define( 'NONCE_SALT',       '? 65.y!:NLaHo__RRi;KFuqp%L[)<w@+lw_udQrJ-~5DclG :WfzZ~:kBJv]UlT]' );

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
