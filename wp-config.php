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
define( 'DB_NAME', 'tribeshoki' );

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
define( 'AUTH_KEY',         'Z%3K>cM8,HXD]shh|/}qZGA%AJ4E~NRBoHdv9}hY&*ovv0ArC2pm{|a1OdK=hN*D' );
define( 'SECURE_AUTH_KEY',  '$.i9Dubo(_>0:O$1UICx-wVi$1->-n5)}S|O$2,C6wK%aw*HccU0Vr**@B`h4l(j' );
define( 'LOGGED_IN_KEY',    'nbIrSORt*Ss.d@#!U`Y_DMxlr-ZA{m8)ak}bFF/ASMtxQc>WLoj%*22N1>}sL ew' );
define( 'NONCE_KEY',        '0LxHBTS<Ims?j!sT`$W$2J>KR-+S=Y;UNaj s0(LCrKV6zTDNaQoO{vH9f~DX14J' );
define( 'AUTH_SALT',        'oZL579lkcR|DtdOMu-%o9A*M3aRaQ|c(1TT-X/LX{faig[?;ou.~@T@~u|7,6p)P' );
define( 'SECURE_AUTH_SALT', 'Umg{]$1,Zz-d3B+t~vrPiT=gA/(*Y^bjLgu%^T)f#d:1&`O I]87/uz1bq*{j(vj' );
define( 'LOGGED_IN_SALT',   '_[.xl EJeUUQA;5P=Y[1Cc3GYr(l6[Q-nz:^&J I52+W1E)(] t=~_wjF}|D2(s8' );
define( 'NONCE_SALT',       'u1llmAi#H{qTY)d}AR*`Ku G9U=wtQ<J<;YBcz v88^G?ddU.UWmw|`8TiEXn4G<' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tribeshoki_';

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
