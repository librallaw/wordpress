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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ' >I0oeBu[,1<noI8!@NXQ<fg+N7OyDrsL-1:@1ET~/LJ(WBV>XtfME~v3A}|jm)|' );
define( 'SECURE_AUTH_KEY',  '?1u8XQ:B!NQx%Kl<f.)mvn&^fk~i8jKm4kgRXb{HbN~:<uQxf<K_>I)4bGgwXe5G' );
define( 'LOGGED_IN_KEY',    'Pz~U2?tp_f`%%+fp2+Y=7b^sWY_9KWG~w~87.<D5-eRh>&gIO}gO[KZ=2m},Tb1A' );
define( 'NONCE_KEY',        'H^dX{9tnsm9&}?v]FsG6fln_.J,0ZWv%<EK1CDH_wY@ud7/;_E)y!Cc#-LHpE/@-' );
define( 'AUTH_SALT',        '5/;brl7WGB_6M.?g @ xa@semOG(6~})eb[Th&<H/XoMR_eeky/txn//N%dLB0Ps' );
define( 'SECURE_AUTH_SALT', 'OQ M2@/d9E(85t;y={NH=ak3i?8u8KlJ+)-ovAo]Nv}X=V}>/PU0CJ/@(UYfh@[q' );
define( 'LOGGED_IN_SALT',   'd)-czVwv+# *#B-8/ijQh$b)0{pFFiVhX+ECCy]LS`-+hPbEw40i^oczuK^VxV&=' );
define( 'NONCE_SALT',       'e_cMbHX+ViEpwc%AnRL 6_MOtm9~9fk,{0#r5]QyH.>8tN}XQy}S2r.RH|>2INvg' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
