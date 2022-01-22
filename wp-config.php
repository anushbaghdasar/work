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
define( 'DB_NAME', 'user' );

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
define( 'AUTH_KEY',         'vu<</i$>L!|HRYu.Ul`hU|=L|+$vS>S4SX+k7Sny3+7m5t72Nt|]qXd(j{:j[)#P' );
define( 'SECURE_AUTH_KEY',  'd7K>rp:t4p,qM7F`N 3a!RQav;uc/9sduBOM%q<.T]X(^h<r.,HNg ak;KN]BFAU' );
define( 'LOGGED_IN_KEY',    'fpeqJ| {!0PwTf, aZ?}|>Z0@k[Kn_A@XCe+Cp$Hrs0;LsSKKD}kD_zUTC]9G.;i' );
define( 'NONCE_KEY',        'Qwkia?y[U96[_&gXS7MQ]VzS9<#=,{tZl?e^JzD[]n;JwW;(Y!1ELYT=uJ,kn|8@' );
define( 'AUTH_SALT',        'alpNo~tZbVgpkHax4~ez;jyQ<w0zi*ZBgjma]!G:UZ4SZ b`CH!dDj&?xBHDl#yM' );
define( 'SECURE_AUTH_SALT', '4GM%z0/,5oeW<xPmD8J6ial[4)zF_H{)lt_P;EkHC`d82`6jDdtJh(NoZ@>y>:gi' );
define( 'LOGGED_IN_SALT',   'AYj{gu?}aC8ZM=:#`9rVYr]yGcz#XQGO<Fzf[=CvB^{RP>66@-[E`Tmht9}4aQBh' );
define( 'NONCE_SALT',       'dCEO1lO!~!3E-yRy-Z-]m_6Ag1XZO5F,Gd}}b1]niGv~~M~fZ#W)]^8CDh_#yLDw' );

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
