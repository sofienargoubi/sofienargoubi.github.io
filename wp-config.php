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
define( 'DB_NAME', 'b46nxy5cba0w9dfzwvej' );

/** MySQL database username */
define( 'DB_USER', 'unlulm57vuynddee' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Zb7W10wfnY19x0TNgqP5' );

/** MySQL hostname */
define( 'DB_HOST', 'b46nxy5cba0w9dfzwvej-mysql.services.clever-cloud.com' );

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
define( 'AUTH_KEY',         'kKI62vY<r9]_%`gYAv7T%pfJImLVF>Kr=gPAo?azgFF7)3&<ZG|x,]%2xi@M_E(:' );
define( 'SECURE_AUTH_KEY',  'nj/i&6pVVlLn[)2l@^Jd{{+jx4D=IT$@41zruhKE;/2127PtcRpcPC1%zZ,_Y]=b' );
define( 'LOGGED_IN_KEY',    'zLLXU(%nh>BRBcw=vlW=RFhS0n>HxezhmQz=h}xsYs;K,_iHQ^a*+|,`H7Cpo;zE' );
define( 'NONCE_KEY',        '3%B<5JotT;v/QEJiqeF5}5tanKb~YZWaXaTg<2nve5sFz`R?v1*9c`k)>T(QXrjk' );
define( 'AUTH_SALT',        ' L(7,4X78G%%:aD9S4Cg1-DOw>J%($L^YGcJmb0YYf%Qe;~^fP0DU+DT<:Z|~nYr' );
define( 'SECURE_AUTH_SALT', 'G~JW;rZlPi^4XN.UAUxZ$@ PMy$*N#(/YJUo3fOd%A[(w+)WUydyL>^w,C.!kJka' );
define( 'LOGGED_IN_SALT',   '6Rw@b814e--l+R4TT:(7O*dyUYkFHB,96l2~`O`.w}qhYfjF #WI>j[pa2Wn483/' );
define( 'NONCE_SALT',       '@56#fZ|~zg?+btdQO3<vjN9~IybL=7L-$tXXzK^]c=-+V;VcbQ7Z<8qS}Y(98[!;' );

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
