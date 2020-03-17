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
define( 'DB_NAME', 'halpa_kauppa' );

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
define( 'AUTH_KEY',         'Jr/%7q)LryYCSY}bsmkK,sw*}zN]Fl~.TXl(. lQ/&PbXC-!T;R>I[,/Q- rnRyI' );
define( 'SECURE_AUTH_KEY',  'X`gUmxYRm:5PA5/OKkZ?dQMlV{Q4k7PqJI]qbfi%~FDsmQN:=6<+nuG*T4;2Jn^y' );
define( 'LOGGED_IN_KEY',    'I&7S{6pB3[H#*PQR>Lb2;MT,XOl:Xmz&0+xsnjk4<&];6*g=g5tN;&wr,dO3d}2)' );
define( 'NONCE_KEY',        'cu)dg_Df(u_dp{]GR5:> 4N3Q!m$0K!}>Dl#(aQ}56:@6xkL>eHc(q`TAz2q{~4+' );
define( 'AUTH_SALT',        ',%fNU?pi$M1VF 0DAWi|r+F,Q=C.?3mm d$@dN3wh|kH6l!*37IV-]DB3vNJHw@W' );
define( 'SECURE_AUTH_SALT', '`UC2h=zX8`_IphT>6l=5.,M5|.*}{RHL qyYkZ*1oPj)RC!M G1R4W|9KNc;j1^9' );
define( 'LOGGED_IN_SALT',   '7Fl?t)X}gfzy PBk7Kgj#CJEdOnxP.HPM*BnM~OGv/gelL*$)LNP;eba_L_I/v+-' );
define( 'NONCE_SALT',       'S6zbp~a!UGIUUcyvq+yk>[+AD~H+sbdk)}}qk&^PSH7`7:RhapAmg*&;K2G(7EZl' );

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
