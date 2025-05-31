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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '/mGOW.^mIW[t1 4WvRnk0;:{yO=0XJ1%+ U?]Xt:8~zW^>eVoF&Igo_~L/ltgv4J' );
define( 'SECURE_AUTH_KEY',   'hdurbr.Pgc/b8hz&fM)Pd4^*e2q-(q#ZTabv0M|0wgL$,G8OgmlZhIw$$I4WG8AW' );
define( 'LOGGED_IN_KEY',     '.p+tutxq~W(7BW}g=Cwfs]Q?}Zo{iK}#p0$E[DnYAukI`#k<d!w43WpfYbYL`C0P' );
define( 'NONCE_KEY',         '3q5}GyrlgA6qbYBoJQr.(%XUO?9Vu _Nlb@BqtE/G+ZRbn8nSH5A<orJHZwMB3NC' );
define( 'AUTH_SALT',         'd CH6Pn@j?O*.}abKVady^u1ZDJ^x*]yw5CeQP*oZEGFAXr/fXnKP[o*AT56w/Wb' );
define( 'SECURE_AUTH_SALT',  'mo)<%BCa$W]A^!:peY(/-nuR|g?)OQ{M!v.uF$kU`]g(J1wce^z+QqtnmTU!lAhe' );
define( 'LOGGED_IN_SALT',    'N9N.(r*YcD/F 1`^+^Rg/prJr!c;dz9fibr[ZD0n6{z|^O1#!{e 6}F?uiEJyjvI' );
define( 'NONCE_SALT',        'v.L<1qR@lL-*<SV<!Cg6od!V{@%0OCb*?4sBnJ4kWYcsZd=tC;`egE9>OT8(+FID' );
define( 'WP_CACHE_KEY_SALT', 'x_LcTq{5klfzZj6JAFqkNum:D*Rn!cPoDSe#.IzA9UbQ6JhaEZykGU+{Y>%#hoga' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
