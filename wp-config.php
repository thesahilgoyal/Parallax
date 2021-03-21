<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'parallax' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'HPlPz.hhrqjzxloe%pn.Y~8L6$C#GLS=!0q h)NR#4yG5D&4I-0e283#!UjF(N-T' );
define( 'SECURE_AUTH_KEY',  'o;pB^:-8%;CG+_$/E5=2WA &&f<R97D.0#(`Hg::pBaNkfD4-ysy#eqzTB [=,!S' );
define( 'LOGGED_IN_KEY',    'Rw*gD);`z&6y0{hhhD|ooG=pL/T5N_z(w=4E -Qs%Yjb%C-qMiSjAbGHwNE9!n!Y' );
define( 'NONCE_KEY',        'hTjDR #z_q)E6Q>b?$%Rh[ 4@|*6_u;|]eu0bT=D+Of aDg:Q=([oUa#2;<qg_&V' );
define( 'AUTH_SALT',        ']::e!S]uoTMcU_Yi-zK#}ndUNBZSng8wePNz[>jJ}=8RTjP]v1h/^([`&MgXDFys' );
define( 'SECURE_AUTH_SALT', 'f_.*-Zmb{a;A-do BY!uBGl}N6{H<z8}X3rfd4=EQ39LXP^()Wj.;5Rr6hK;9jOx' );
define( 'LOGGED_IN_SALT',   'x9Iyl6VmQ:GU9@.bKuD!rTMVihk*}y@I=YMiL)i~g.j08na#tt%. $}0%zYi%|D*' );
define( 'NONCE_SALT',       'Dblt<VzJgNR}a?XP]nN8ixGC$F@Fg:-h@Eu5E9e4+d{EP0% U|?}Puvs}eH]9m~m' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
