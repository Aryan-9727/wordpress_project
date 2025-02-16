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
define( 'DB_NAME', 'naruto' );

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
define( 'AUTH_KEY',         '>HsA})`=5L@|Ki`)jr4V_n8IC{$^Yjf{W+6J08&98cm+4ifm]JxfF$h#s$E(Sf&R' );
define( 'SECURE_AUTH_KEY',  '29vjk%Pz^zz8`jP:j;0vg&w0v%{Kr|sV9oE-_O6iu0.7-J1o<1>jI+2JgFa~9KC5' );
define( 'LOGGED_IN_KEY',    ')X_H+6O-{S~(8sDz3Xpi.4XzYdpgu!Jqdd,B4BSuVipI%q2<<s (aLSX^x}h{7>a' );
define( 'NONCE_KEY',        'G+i@  qpN(5l3jf(/,h8Q:6{RKtZ_^|d+m]Bxq=b|Em {rbC;OxiOzIxD%C0;^W&' );
define( 'AUTH_SALT',        '_eT3QQorVk~1dN0jxRV09Q[Wz1t<q5Jo$wj+Pd4Vuh@9T=m91;.<bCoaX}zy]^,]' );
define( 'SECURE_AUTH_SALT', '}O6sa[00HK9N]H|0qP zuJ]B8Cu>kxb2hoekI/iEgw%2(jn%b^tAb?u[gEeBj1Cz' );
define( 'LOGGED_IN_SALT',   '40NpqN&T!YOr$n`sY.X~7%ta!{Z6v=?<1K5yC$i!@H>w2`Y)IS+3z^*!td[Ai$Zd' );
define( 'NONCE_SALT',       'C=E$DfijY[5_D_,j8KQufED0B!ipLTOY-oFLq)VKN/Ka$z`G@3r`Nq~ctv@L>1<t' );

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
