<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
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
define( 'DB_HOST', 'MySQL-8.2' );

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
define( 'AUTH_KEY',         'v=8Dm!Uaqt.ki1q}H->y#d5:P~:gJ2_#Rk>Z@.BuzFk*foMi(q6Z::{g+L!#.]qT' );
define( 'SECURE_AUTH_KEY',  '(c#}k8Oj`xm$$`K&Y9wzi<!=Rd2c]os:L}a`](aCw:=x-[ZpiKv0]GEr#AxsTCS%' );
define( 'LOGGED_IN_KEY',    'v-<k^&ILK,!4&6><|4t(ZX5e&wMr-2G7KpL&~,3L<h)b_c]w8+#h!/nt1*_JjYzt' );
define( 'NONCE_KEY',        'oNoO2FAD<1s=d>JYd]aT82zY,?X1V$o5{z99Jjlb+ypi<tX7ew{Q>qf3[q&n$ZHE' );
define( 'AUTH_SALT',        '_f9Z^^RdA-!in#:OHXWm+Y!`%Eqka(N9+zS3u|62xw~YIi*Z_qe>iD.CzP2{7x0r' );
define( 'SECURE_AUTH_SALT', '20}hg orgq;qO;$y%htC8:W=)4:|`E.cm%vES5K%C$mS=_N>ox^w];wK{zdwr=8?' );
define( 'LOGGED_IN_SALT',   'r^P%>XvXXo*~1E86~K9hb.L$Im7{J9L=Fy(BXF]MZIO%c3HtxK?ZO7DYq<()5Js0' );
define( 'NONCE_SALT',       'v0)Be/:UAu@mmu}uT+C^QP_wfa~tJB:<O?cVOd456:6C*jt hUlNuPe]]kG:se`E' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
