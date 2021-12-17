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
define( 'DB_NAME', 'wp_cicd' );

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
define( 'AUTH_KEY',         'I3[.6xU(`ur#yPoH[`8`SvbmEY;]V*FDen^V}Ka/M.PYxPSFZHV6T%43a=HE5V)j' );
define( 'SECURE_AUTH_KEY',  'USHx5t+bU?>sHFc<AP=5Br/UsqnE34Uga2uE@[d<Io=<|!N>(!Azn*(eoHrlbDC&' );
define( 'LOGGED_IN_KEY',    'O%a0a<HeBjnpAvB4!$4T3@!+3!Rn3OX_gGog{#r4+PGY|mSQuRg:mKfMBi:_sMVb' );
define( 'NONCE_KEY',        'Nydr]t5^>JX#j=z|r:r8w;G_e=$N:,%?t%mn)QpOwJQGn0z}hNk929%<rrQv{ksu' );
define( 'AUTH_SALT',        '9}ksFO9PP?l}]I}dhv+HSnioGOIU<pv%8bt}0E$D@-=&?xv,_mk1WU^t^@+8loh!' );
define( 'SECURE_AUTH_SALT', ',MmY!e-uj/SM}v9uqlby(:x0~;_;m{#<DM`VT) /%g`Oo@Yo&&VnijP0+/*-U<u{' );
define( 'LOGGED_IN_SALT',   'O~.{c~X,0)mbTBae&;]v:Ie:/}RrxBzi1?W!qjYExQc9BkLKK]:Jf2+(,{hma6^Y' );
define( 'NONCE_SALT',       '1)M9e?YK~gihM<#$3.pkdo7>~Irm=_Uqe&KfW&>#llqL>aicDFwRV(;{[t<9)o4I' );

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
