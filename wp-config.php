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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'institute_sikh_studies_db' );

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
define( 'AUTH_KEY',         'U1 n*hOt+3e#kd$.}WR}&=FjX+_)#}U6qaEly/xAfwG(irq8WJ$k$xg]3WEE_lEU' );
define( 'SECURE_AUTH_KEY',  'XTV=+L7,x|*Vd4xw^3:&o8)/|KH?00<+a;1+PZ3d(7/c<+nzHf+0I%>@`q7f&w[S' );
define( 'LOGGED_IN_KEY',    '|HS4~a-TD-Gp=)|<-E[{o 6`,uM(QH2_(QeZD9YK.H /L*vTi5_>F]u6<Al!};&,' );
define( 'NONCE_KEY',        '}`2R%ac^1Um9r=W4u}H6kKBsDE) ]}[kkENb$%8d/ee^JTuyjYWaJ(EozLt?^,Sv' );
define( 'AUTH_SALT',        'AE[r,(d3 /w?,9}2m5DvGOt@R?qN*(V$(%w(K,)8B$2/CSp(iw^$@,T|~|$+I tz' );
define( 'SECURE_AUTH_SALT', 'Yb_+8Dia]G9-Ff~XHVbE)Gk+HW<8olEnM<3)p}xs0qB^Y#,@:.mhiTdIHx4i!4X1' );
define( 'LOGGED_IN_SALT',   ')DayyP91FOSUIPl?p-Di, KHZa?~2$ZHsQUphb;V+`W`#UXfA&~gk%gDD]Eu;~6v' );
define( 'NONCE_SALT',       'AVajs@TxtVcI[()dE{Kj4nRUY-<A^_zdxI9*WQDgE[&%dgZXmBC:sgqZNWK7EBiP' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
