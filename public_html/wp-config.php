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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_dan' );

/** Database username */
define( 'DB_USER', 'dan' );

/** Database password */
define( 'DB_PASSWORD', 'dpTS<M1=+}WP[Lv:slbGxWBU>' );

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
define( 'AUTH_KEY',         ')n1F8${A:CHDk&Y(>!x`}nj7p>B-Hlu/,QjOgv5Mj:K!jZ7XoJ)XbA9uf&b$SFsP' );
define( 'SECURE_AUTH_KEY',  's:rU@Q/wWopz2Y!b8pj1NH`-%x>a?w8TNKN;!jTO:GuV~qa%rN2WyxE)hFgChJ?-' );
define( 'LOGGED_IN_KEY',    '/M36~L#C>yv<<<n:a#Ls[=8Q%82silVa3S29Nh#f-@H*bMj!E!Viq$}/I+[b#>Ch' );
define( 'NONCE_KEY',        '(}AKZl.Jba{nd$OCyDZ-[zf!?#f-p6:9QfkKGG_U>gz,eY|BqAuro8;M,ay_{LF^' );
define( 'AUTH_SALT',        '$X7hMV9z6Eapz]1rYYFQx;V|boqH2o0YuEw.US% :z@n$$%0x/9Au~4%6;u%ahO@' );
define( 'SECURE_AUTH_SALT', '.^%s|V+$}i(2[ZT}u*=Pa:*5LfyM>|PC:A,(N-}_cv{RRN;ql%y^LuZ68MnC:fF&' );
define( 'LOGGED_IN_SALT',   '=r~yhfa9^7@`3pM/@C!7R{d#dXTG{v*!}e<y<YL$BKVBZ4}laYr>)5dz9BCQQ}aC' );
define( 'NONCE_SALT',       '6jYAOkBI.oaLoVL;s0xVGgacx=<#^ji$Pj-?fGjaQ=Mk-KR/RX[}4(~[AKeCFDhX' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
