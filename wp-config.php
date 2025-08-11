<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressdb' );

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
define( 'AUTH_KEY',         'Re$1Qes|g%zcvS}Ci)+gwx (S@*p({OXmvpUD9i/: B`fXUFuORoM+!uP+WphR1]' );
define( 'SECURE_AUTH_KEY',  'Y?zNjA`s<*B^?!PUg83%@KRmK/)jNr;wYn6`jN$qx^U,J}9TYTsN9c|sby(JS%Wo' );
define( 'LOGGED_IN_KEY',    'I4,kFYRK-g;.h]JwqXW:29z2Pj,.oz*&8AEsd1}aE){}kR!6PZ>k{GFhj11{xdgW' );
define( 'NONCE_KEY',        ']||gsH[d$eGkb@y6 FcHBb[&)UF7Tj8?0r#4(M~8a).3@9,)elI+lEj}_~,64!<q' );
define( 'AUTH_SALT',        'a3$ZkcSr*viqCBWQ#I4e/y$mB8U*q]l;:.vlu7$O`bLb,8&#/;T b2cjk|X^q#{T' );
define( 'SECURE_AUTH_SALT', 'T;y4e!q][;MZDj,o5xSPWmDwk/bg]2caz`U&+q<kg0~{7M`r b)R%_o|%DKw{51j' );
define( 'LOGGED_IN_SALT',   '(cQk4YXyttt$8K)c0Pfb~s SfV$>)NL#vwq^*![SP0<Ml>Dnb>.kIjA0c#)Cqgxy' );
define( 'NONCE_SALT',       'zUiGnJAI`4hS=_rEKb(-)oTa@B1CB[j9HcXEAhgiR/Y5utsfU,A{4,fF*a O4_`/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
