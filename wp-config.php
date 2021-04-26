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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'eXI*%4HO4aK4+dd]$V+rQj__DaaEVytwW;!W6gP2@%T?#n7+TGlH8D.sq<v*&wTA' );
define( 'SECURE_AUTH_KEY',  'I5LjI/XGjg#4ZYu%#v_#l1k9_`d=6x|YyHsJR53IV=/Pq[`&g}%MlJ}:qCarFIM=' );
define( 'LOGGED_IN_KEY',    'B}Z%f {iOtwb>$pSe*FG3y9hac8p`K,}ja@TSbidC7r:h+fDUITil1iGlgbl#gq9' );
define( 'NONCE_KEY',        'p3p][zGhl5V+l*d>y`cD/i6H3*5CLE$ut.d)M*JuPA4BOQP?>5YF4W<eDFwj26Cr' );
define( 'AUTH_SALT',        '-`I=gQif1?4HiAF_[:,.KSCpDtK-#m9ewi}cyIe%`4a3H5]Av2q@->jm*d11I[zr' );
define( 'SECURE_AUTH_SALT', '.0YE{3GvK$+N3Dj)t{NYXoT?[)e.()z@A0zcg@0e`hQr;Fd3#Ev5F<XbnO@.I;i;' );
define( 'LOGGED_IN_SALT',   'Q~fqRK2/H)3h!`t.aOUNa.w mVM|[z*-}P&/&mHGsotJTj9=F*221T6c{]/8M1wr' );
define( 'NONCE_SALT',       ' Tm0xv[n-YN[jbs!|nXx_w0=W0-qJQ>uj~8K^DKA.^}:VVRo/*iR.PpS:Hi`w3aX' );

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
