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
define( 'DB_NAME', getenv("DB_NAME"));

/** MySQL database username */
define( 'DB_USER', getenv("DB_USER"));

/** MySQL database password */
define( 'DB_PASSWORD', getenv("DB_PASS"));

/** MySQL hostname */
define( 'DB_HOST', getenv("DB_HOST"));

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
define( 'AUTH_KEY',         ']E*2$e?Ikw&!Cn20iSF~k}[Vi$mY;otF|5P~Se4$Io~gk;64)Iqek)xJoMK6)s<y' );
define( 'SECURE_AUTH_KEY',  'U;O Ik<$%TDcU&9%?wHqpJ&qH=X7pH4Cg9&7G/SQh70{3>rtoz&UV/pL]:UBL-LZ' );
define( 'LOGGED_IN_KEY',    'XjzXE] gIBs&spt(xvrX[_px]]ONet`!dS&lp?f^uX.jn_3nz%<*-zvf0~1eE&|/' );
define( 'NONCE_KEY',        '2]v0K^4QtX-fPT>r~+yJGN@@CB%+X:p/3JV;}mOH7H;+r%q/2G.AIL@}:gQ~DU+9' );
define( 'AUTH_SALT',        '{|lFV;s&+In5:DtsPFvbRD#9DDSG?R_Zl*):NgnGdI%2X&b[8p[Y,.;MEP}~<%Ii' );
define( 'SECURE_AUTH_SALT', '6r$(:MCM%=dPXsdk?40O1rX[Twc8[$WEG]R[qUU1@0ePY72^tO.V*iwd=3n+YQ60' );
define( 'LOGGED_IN_SALT',   '%J!x:>R(@x~2P!qS~dU),0iC1<E-8hbtnG%H*MxO|n&z%saWhrYPMww+ok.HThYW' );
define( 'NONCE_SALT',       'fpz~eZMvU(;w3M11{KroE;26A$r_dz=Dh!nDRiC2T-z+/Ai>Yuz<)l_0ik-hBi0j' );

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
