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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'phutai' );

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
define( 'AUTH_KEY',         'nGLmLSO_utbVuAi}eED`j_K}.qL*jsm%+l%`]KB4KHY&63;[c&`?;m@3K}oUY6j!' );
define( 'SECURE_AUTH_KEY',  'h{Z*Y^4&{s&Nt ]5M=+RB4E]D/+<~2IkVMW>_awx]8O1*g{cEF7Pw^XuWyQHilFp' );
define( 'LOGGED_IN_KEY',    ')/-VY(Tt7~b7XrVA@pe.dbrM6WFSUUDipQRN6l+sK7aZK<~mm/ZG0lG1+7PYO.9`' );
define( 'NONCE_KEY',        '}}C/?o={I((dh4RQ=f8>aYb?2;wQC[*MEFvO1YE)A3p.@K$K3AzUQ1&8/K,!{Aq2' );
define( 'AUTH_SALT',        'uBXE_yk*j7>}5w-+56CN2|$tHt<OY;;/.aXx,0V^~wSsSY,z38%@UZ8{vDS.=37R' );
define( 'SECURE_AUTH_SALT', 'Y|Wu]Eon)#[k$E4)DnyX0TXhH)p$WD{1UcHeo;(mJ9HWBlh},9@rN!#V``E)n{!T' );
define( 'LOGGED_IN_SALT',   '=. oP4:_].&<X&izx^>Hanh}BdVNx$8g@!Lp<-a<SAshuI4z*Rcf+4TKOwr{0<@U' );
define( 'NONCE_SALT',       '%h}B08%Tq7:*e_^>5x39]`gU[SZSOtAoVPtSNocMGsZ0c>GWEO_oV](CqJ2baU8_' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
