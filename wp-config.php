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
define( 'DB_NAME', 'mywebsite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'n<`hr_)Yr{K0n9B|46@4@tu-i9-GD&|2Q*G&oJEZV`j . 5P]/(O8ax2Y8eHNtV,' );
define( 'SECURE_AUTH_KEY',  'K-#rj7QFx*Q@cnE(}p2fH30>FA.nm[x73NuL82gc).y/!-/QtS.o^9ry{pT30w!*' );
define( 'LOGGED_IN_KEY',    'z!+AY+8cnDz$)U)n-oxsA,P2|OeTPa)i|aSoD%su,S5j(*Wo&bvo$GCYjaLs<8&a' );
define( 'NONCE_KEY',        'Ji;)i6z_=02|#1+<w)vg/@+`$&9s;,aI!SH`q?p}zaIOx+c2[W+f%_J]9<58FM>b' );
define( 'AUTH_SALT',        'oAwX?jH>gscH$=zAWY%>.rnS?YS)uHAg!_aBr7:=Hv]#[zwKnbV& .S@|M~mRakG' );
define( 'SECURE_AUTH_SALT', ')),K>JY+L?Vj9M&aL_A8:+6WSrN?>gD!(riI?-ft5& <}{%X4B>}(t%e5r@BBJnQ' );
define( 'LOGGED_IN_SALT',   'H*j]kI}/12%NQl4L4N1Ct^d7v4L2A#G9|{2#+zD|Ey?=yTFDA#U9[E _U$R6hY8/' );
define( 'NONCE_SALT',       'o}_-1 ~J&vWjeIL4?v9PwQ=T7-A1&FWH`(YLBtF<QH+#g<E])u`EBL8J7q|EgiW5' );

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
