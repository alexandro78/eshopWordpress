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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'eL@CYm4ABRp$8|+v)<q:lY%p#AUsY0+~}]~{-+Uw`{j4z7vnNNxxnYC;$iD.qmXA' );
define( 'SECURE_AUTH_KEY',  'Qm#*4CD:o8xuhxD0g03oU#COkh0+d2>UuZZ$PU7r&XZOK:_kf>JvoucwmT!OU?Dg' );
define( 'LOGGED_IN_KEY',    'y.OYD4er;U`+-}(w<M=<WqL88-Z^2DYMDh8EBay__T5yp$~;6.rdZgcnO@h?i;qX' );
define( 'NONCE_KEY',        '2pd`_#.2Z{q;Ej(dq-<Zu{p`x<qBd.,0mh513gi595*1Bc/}B9ulN4!qNfw3_6pc' );
define( 'AUTH_SALT',        '46_CQa<#}.b2N;/{_?p#nPq4:*K-CRr)@iJH>OXU+I,S*a)m57~coe]& K}/Sl$P' );
define( 'SECURE_AUTH_SALT', 'UZ%G+ZfKfzRL>L7}*qvLoMbhLfKh?^~.kpB>sq9q_}gD#TSl(WB-`M_vw:D78Pm=' );
define( 'LOGGED_IN_SALT',   ',Fu~;0L~B)*V>OE4W_9{iZLJwZDe NU7.f]2&cf?aV@W%s2xE8U:oPq(X&0?q;21' );
define( 'NONCE_SALT',       'Ve)<V4]`Ebw!kcXku$![O)Ekio/l)vQyV9EjKoQPM4jgv=+E~f2MMJhP9uqI=_u#' );

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
