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
define( 'DB_NAME', 'Trasave' );

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
define( 'AUTH_KEY',         '!,3~-w.awQFv5/tQ6!:y(%[ckVi0?fTJT_v[x:4Wqm1qjuyIH]3h]BjE$Xtnx V]' );
define( 'SECURE_AUTH_KEY',  'B qD|3e;bFI<00+k,:}[Z Kk[ s-Ss7/x1z|z`IK))HBY>Xci8E{>6?HW;EY-k0l' );
define( 'LOGGED_IN_KEY',    '%[Z-Vby;vT6xk|^i%GLyz>sAhX2o_V~<qnln9#,Z`?i|s,2JP@]a[uQfn-U|4Jl3' );
define( 'NONCE_KEY',        'bdHOKHwT<0bz( [>xA52=$rFJN0J%cchR)pfy (8q)olJ}WGuc}goRzZwBGN_W2f' );
define( 'AUTH_SALT',        'w40EO-ipy$Rypk&JZS:Hz}uQg}YRHPmqa(LwQK.HTIZI%u?E-}TUyAub&Hb/yEDY' );
define( 'SECURE_AUTH_SALT', '>}6lvohWZB}z0e0Nxyt2M_2:^1Xg|sU-wD(wa-Q/&D4`NWgYSIC3^x4QdSH]F:<_' );
define( 'LOGGED_IN_SALT',   'g`t;oQ,qb[@8`tSXQ..*k`]g&+g6ViC$!UDK[|m~wwsTsPB$B[u1I)RU$._og4}S' );
define( 'NONCE_SALT',       '9NoqUfKp|Su[Y~<loia;J&is1?uz_,:]l2?vuUAd8=!MC|.Gs]!%JK`%BS2^PeuM' );

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
