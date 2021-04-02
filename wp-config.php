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
define( 'DB_NAME', 'child-theme' );

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
define( 'AUTH_KEY',         '.l5N0.CFcQ7 wRN8d#0U-Kpu^Zt?;>nA~sFvv23C?$b7*Uo/ZcD3=yqEI9q-]I}@' );
define( 'SECURE_AUTH_KEY',  'ijV9aUftTIo!iddv0km,jcko4KjLmi[L q1_ZFL45ob@~z%[;1j&_(0a1.+RoFAa' );
define( 'LOGGED_IN_KEY',    'OJe/N`U|[1I#q$N!|aO)#Vmm ^CnA&4)YVXOb2pf8lun+anIx[}+aix)@@VZzUHH' );
define( 'NONCE_KEY',        '+)/GmcidU/x8t4MCPU2PU9kC!U)ng VNA%AU](Pob;X8x6Ud31^1vnJuskTW}$MJ' );
define( 'AUTH_SALT',        '7fn]^k^5uxLhG_[i 4n&$BL0ca7m,:U$tt).)a*5BCx8P/y1g9bJuyly2s)>t^}V' );
define( 'SECURE_AUTH_SALT', 'towxMLl57&KxFd/R;Hj!R.+~oT6CSz{1j:S]&O=},f*8%a`5<u%r8RlP>P*`d(%F' );
define( 'LOGGED_IN_SALT',   'w/hh>%=QOwMu`Y=Kc~CfA_na |;aEy@?1-|y*^gzM2PV6s-2pDT;B1ZIGA<Z1)C9' );
define( 'NONCE_SALT',       '_RAW8ij@73iw2;p|68VdS]nGnn cD7rsb*uw`EPlRIJ=dSt*=ZXX|_6VbvFVKd;n' );

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
