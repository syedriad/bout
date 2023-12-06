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
define( 'DB_NAME', 'aabout' );

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
define( 'AUTH_KEY',         '_ftEs_52jmAO3xqfD$/]w{.&])6R,PW[j$rw}6f:UD-U&0 7~|GoN=1hG_[A#Pu2' );
define( 'SECURE_AUTH_KEY',  'PhnEgVo~0nZ^~)s1vv;]2#(,3ms^:,zFYuIF)GAs?F+so7(yz{fE#C4~yo?<HHu=' );
define( 'LOGGED_IN_KEY',    'fm:zV`M57,2+-K8G!}i2WM&jE{q3$2[v<Z8XH8.}(]z`?[jeE?1|oC2=Jg.|%4PK' );
define( 'NONCE_KEY',        '%>aIo/W|XSZbU#r~E}M3V_|iaY:AC>=AE*1%v*SokWsKr~:@l5`)g3JyqDKMFxS7' );
define( 'AUTH_SALT',        'k8gC-,iV+* K?IkYRMX57<u8pG;1B&>5s8YKz4?phT8P?DW_Hv2kg|1nwW,^r)ak' );
define( 'SECURE_AUTH_SALT', 'N~uiP=PV9JTt9T28A_iY6(y<:p3dW>K_Fjz/AFMszdsHR(EL9x7E9Nzr~FZLqNqD' );
define( 'LOGGED_IN_SALT',   '?gFLSbH4nGgQA u/dt)_<8|&;)sL.3D?v }o2M}%R{s147S>aLprcs{3-}zXn-Af' );
define( 'NONCE_SALT',       '@45WnY++]XH-Be{XAEI%40d3disLJN2a.r0XP]J:W<v!qP=-~rd0UUi@WeYX B[y' );

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
