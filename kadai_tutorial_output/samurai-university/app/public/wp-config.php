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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'L9Ey1=n5Sgo&wb2I2]ez`?X]#^A*Yrc&7}>NY;L}N{9O{~LW]KoS2IGZS;.U0CI[' );
define( 'SECURE_AUTH_KEY',   'M4@ 2y.%9P3Z8qZ(FMm19?Ineb*^3JsNtmS{r5}qn`,wF.ebqukWD])>}D (3L5]' );
define( 'LOGGED_IN_KEY',     'jRwv`i+/|30cWN~tDtK!sKLC|a~&a&RZ*<9drqq,PK=1GDs%Z&(?v#o>s$A1=`xd' );
define( 'NONCE_KEY',         'o8s1uLXyjc-@;ASy5(/D%~UvmcUxMf.M^}=T1hcWivRi|iVX%eMS^)g=hFrP4:)Y' );
define( 'AUTH_SALT',         'X4nCSndANIuK9L~<(91*R03bh _EMg/A={Jz>(U=of8oP-w[J:rXp@C>2-4*@x^8' );
define( 'SECURE_AUTH_SALT',  'hhJ}78YQx=#T?#;_JG#cA2A.M*rl0Yx?fh>A(`Z%/prQ5H4f-Xvb@Z^hQ/NI@@yy' );
define( 'LOGGED_IN_SALT',    'd&hp:Is|BJ-Qg^2uW/q>z+a5=--3t(&wuR[=rS}I*ZCAN3^dlHyL*F)Xaqant9xU' );
define( 'NONCE_SALT',        'rFcIY=^h)VnW--abS_h#|Jb?;#G2#r)xzwfKqv<km;5*C!4;p9DM=$D;4Ero(1Et' );
define( 'WP_CACHE_KEY_SALT', 'a-fb*vy:4nhI@%t)b+6!ir?{[20dO48m~ckvk<|Af6K>6*c.#Aruxie)l]I+i?BW' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
