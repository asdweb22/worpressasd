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
define( 'DB_NAME', 'worpressasd' );

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
define( 'AUTH_KEY',         'DVfwBh%AT(YaYkl6J,oIRj*ccTTl*p(q]z(yW`*dN<%^%:&W,W-BncJ2mCa#-y%U' );
define( 'SECURE_AUTH_KEY',  'dZ*-G_qz&oKv,Jcs?J3p-MnY&1)o?Ob9McFq#}MZjI2QWVVvd3ft3|*{2=^tSN<Q' );
define( 'LOGGED_IN_KEY',    'Bs9~9$i#NyKgDx5$j!l._6ohysEa-;$?[[}-bv2Ao{(=*ygfka(>b1v$B#k&SZj/' );
define( 'NONCE_KEY',        '%Yiqc^fL@8_t,+#qBe<MtN)`Ab?B)[B{zm6iI!:e?s,iKdfaoe>Vp{0Ar2n/;Y{>' );
define( 'AUTH_SALT',        '_i{[5~*3jJ<u>Wu3 +CSVEL}Q*9XG@mAp{(3+9-@%@&d,f7 I-Y:lUl34p@5thi^' );
define( 'SECURE_AUTH_SALT', '?A|Zd[rrI>=Xm*AS42:rU_O9svbwfx:OM_Q~4f$Lkdid[^d9_{yX%&NoMb<x/BD|' );
define( 'LOGGED_IN_SALT',   '~A 85UD1?GF~&E:O]C~<+uTze9hH!odz.,*8.rNp$x2VO7U=o06G6?`%!y<,_.>M' );
define( 'NONCE_SALT',       '<I e9B|Vg*ivAun>B`!bL:t@`T|kZ 129mSMb|x0g{+{^:=eEy+X:j[t2Ql@Pv>S' );

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
