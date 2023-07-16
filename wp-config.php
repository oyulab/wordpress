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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'nf+_2uCY,zU=S4<dK30o@MLA^+N[PSVi7+:G:)s_gf5j-<pBmO#LJ0`Izy5=,0Un' );
define( 'SECURE_AUTH_KEY',  '#T9EhiHPr0c;Q>c#V@ 38#4p&jwsB(NlG+5vd&lx5>`A>B1&%tA>GLB-26%[Plm!' );
define( 'LOGGED_IN_KEY',    '`Qq,86z$6cV9 %@=cV&wW,uKQuFnb0`QJCa}*kKq[z=9-8LSp=u;h[-ZgD59%?WX' );
define( 'NONCE_KEY',        '|Iaxwso;a+G@`Nz#1~Tb#?&#F=w+6lVk Ng}lXsCvDdj#E27z:4ng1TeT!Z?w>{H' );
define( 'AUTH_SALT',        'h:cZjKw:B2McHOQ8cj%exw]oS2*H,.z--DGQmes#|f<wlu[P7hO.S6h,1 rlQXtW' );
define( 'SECURE_AUTH_SALT', 'ctn#?$y`;yi50qI`#rGx@n>U^zq]|b<k~7T=QG7}Ucs28Q*h+7~gaY,O)Gov5~A,' );
define( 'LOGGED_IN_SALT',   'Ql%8|X=KbomvgTJsoh5CJ!#u.M.t_0<L6`o9_W$}E4u0F_^3LKkCe.E[#y>J0D]1' );
define( 'NONCE_SALT',       'un^@)|kmm~<$<@E,z`NGxb|+I<H3Cw{{P}}xdeBrC..{L^o)>WlCo~cquo pfnDn' );

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
