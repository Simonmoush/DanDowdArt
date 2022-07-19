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
define( 'DB_NAME', 'wp_dan' );

/** MySQL database username */
define( 'DB_USER', 'dan' );

/** MySQL database password */
define( 'DB_PASSWORD', 'dpTS<M1=+}WP[Lv:slbGxWBU>' );

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
define( 'AUTH_KEY',         '>oDV{-6wLw:#H{=[Q4h;>TdY5@0qs&~=A(#W C<5=b!:6;5~KVd33/y4E30X2;*&' );
define( 'SECURE_AUTH_KEY',  'sQWlBXbvaWuy#@rHtqf,Nats0;HPz+hMvv^!QY~So{,od?pI_Q,t(:R$2Vial/[k' );
define( 'LOGGED_IN_KEY',    'Y|yJ>V`]261_KpPqf&E$CeTCN&TRAe~i=3+hAMN3zi`Hq>pu(Gi8~XZR[CNc-Ab2' );
define( 'NONCE_KEY',        '{*~s}@W%5y1[gH|b~h>2A18k(E$bW~*6b<)~)HRvOI*i]QOg]Ke~<3n(]^88kJg2' );
define( 'AUTH_SALT',        'WCrA84.p-ik.fY,EvBp[B>[[r%tA5k17hWu[[`.Mx.lSkI_)7Co:w`)kqj*]}FZY' );
define( 'SECURE_AUTH_SALT', 'VoonFR{`+ f+LAb9e 7BEah^fjG2>-qNpKp&ot_m-8yUxlK{p|(EFs_,@8%gC1Wm' );
define( 'LOGGED_IN_SALT',   'ixR#V<W$&J1?Vdv>aM~*)Hoty(O(7jaF`mI9pV^twa[%e8v9oRRf]::4Tgcm9*Fv' );
define( 'NONCE_SALT',       'K%~?,>ov-b0JRxRLY.&x*(tt{o5)58SKz,(0 _]w[}8Q_9KTS#B!Vatvxc5(Vf6:' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );
define( 'WP_DEBUG_LOG', false );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
