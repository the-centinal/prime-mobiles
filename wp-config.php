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
define( 'AUTH_KEY',         'MJ/2=&U?Y*RVA6z#-iy;6Ne=SOi=[yqo6fmWAD.iAL,HHdom(bV8Y*8Pi%<<?vr=' );
define( 'SECURE_AUTH_KEY',  '0xj38qb<.m3MTu4I~Ta)TE~1LK/[Fln3~*2JrlAUlI4</AuXo*  m.l}g=#+bONI' );
define( 'LOGGED_IN_KEY',    'b;fnp=Bf@M6GT9zQRVmjf<Y|S5rXjPn,rI/hLlJsN^.O|@d?E)rGse@8BzzU6n+8' );
define( 'NONCE_KEY',        'Xde|utHeC?a<l-ExjROUu2K3+&tKn;_Us{PFz~Nb23[fD<>EL<x5}paSuol3*20g' );
define( 'AUTH_SALT',        '!_85pdY:j=UQgRKU1UI6vv&qnYB?:U.&W.OLBFq.OXEM^+M{RQ#]QG]FqzI/cx(%' );
define( 'SECURE_AUTH_SALT', ';=/t1GJBKd`]>Us|!D*?0o~&x:3^$v%1)wvZo$Cf~q4k>GD$5}OBl}*Z/R/V0-7v' );
define( 'LOGGED_IN_SALT',   'o?J86yq/+&fz9FrY@`K(kZ8vGYq)a=eEu5l^uO{?[-N~wz^kf|IUr6bCY <Z$M.#' );
define( 'NONCE_SALT',       'h]VF!27 Jr.[6Q@lXxg0?K]Z/3TTY]```5Y!Z#zxLuB?UAgAKOI1%?yK0$N^&[YW' );

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
