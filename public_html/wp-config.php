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
define( 'AUTH_KEY',         '`(t_$[SRa3dvTz:}G40<i 7o>dqyE<;6!c G])x/al~>g$*TJk,{`m(QrIpz/}ML' );
define( 'SECURE_AUTH_KEY',  '0W_j+MO.R4+7rpt/jArt1K/K0NVE0B?<@k(M@|3C3u9qI[e}`,zZrYr=1q,cJoS`' );
define( 'LOGGED_IN_KEY',    'X*9qA:ZLSy=d{v/28,r-gPZy`$>lqqxP4E2?f!+<,+`nOnLSur#w<,>C:O,aqq9g' );
define( 'NONCE_KEY',        '$(:%G!)D~4M|1f -c$2)^0N9(QJJBP}i ^kB|_3I6pVovD>%#WL>LF`hlSo|RqE=' );
define( 'AUTH_SALT',        'x$U77h~LP8;%_<*OJHR`JpZSMpKAQ5P~bx)0ME$-C#M2JH;bN,^8 I$4e%grtFkb' );
define( 'SECURE_AUTH_SALT', 'fNF!#~G6@$T0%Qa~}9?<Sv}#dnYDMhe{OX.Bx5,{jDYHM(j-;?rua;{pkOGq+/z4' );
define( 'LOGGED_IN_SALT',   'VNQ<5[ZoAg.U3V-K<,ieY8Jt_zdSCRz!8Nw:Q~]v}wl7*Pe}yZd(UN1neMn92]yE' );
define( 'NONCE_SALT',       'FV2gawT9tFx!87%vI#/&b $]ZcWWyWRd]F:|H88(Gq,>?S/r ^;MKk):w%}|Ha8}' );

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
