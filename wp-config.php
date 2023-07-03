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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'h?X#LQ4rrD+1C1M.D:/f##;kRY)l[T*Aysk{m`{2m(d9;Hfa(MGY9zT3^>qTs&cs' );
define( 'SECURE_AUTH_KEY',  ';lzdy9./0A^d| )VAh<7oV.g G+pV@9jle$YX3g0DR2dkQn2#h0#^piK@${?a</`' );
define( 'LOGGED_IN_KEY',    'Pd-bZLVu@{)MX{NxiP][]9M1Qd^v]%T4B7y,7}J`q5vD5^Ps4PrZ{I=~u`bN4~0H' );
define( 'NONCE_KEY',        '6 AeNT^v][H0cuYD6r2B=+_N-@T|DAoJ(7b62[COR4C{@tOf[G7sJWT1b~u; `X&' );
define( 'AUTH_SALT',        'b,;l{b,?S1uM@ ?n#C:3ZDA>KLocm(@fSB(=XP@_-g?^1bKgXX.yyrw$AX%rBl#/' );
define( 'SECURE_AUTH_SALT', 'KSL Wr&P*daOo0_5>1;IY=k.bki-4H&{*b.QCS1k_2Nf2s`9Zf=0pI)-_yd%_lld' );
define( 'LOGGED_IN_SALT',   'U(L=<MW#y 3^A)UEfs5yD8t(^`?F;6%K&+JA,jhL:5!@Z9O;YKm|k;EN&G (&aZ,' );
define( 'NONCE_SALT',       '#^BkHagYJw4@PXQ|.%=3J;7-dH kpzmmUtOG(I-eWh_pX* oA3UHj2Lo^g{WLjmn' );

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
