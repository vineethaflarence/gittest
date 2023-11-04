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
define( 'DB_NAME', 'gittest' );

/** Database username */
define( 'DB_USER', 'gittest' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '3n>ZahNBW!6fU )P@ gVdF/%}aLg>>:%@yv!$=_!<G}]T#>@;i6E;8Hh<VWIeUx#' );
define( 'SECURE_AUTH_KEY',  'gE~}hAJ<^EsK,k?X=(u|-2|9ldr,UkbcK{AdqUo_+k_PFx5UBg(zw0`T  >SmJ {' );
define( 'LOGGED_IN_KEY',    'k1{:tcj&RrrVbvmPF7b2jOnkI-rmwwB<L<tdOgST;@@fY:3jkLV@HGA&Ghf<*8Le' );
define( 'NONCE_KEY',        'K{c!dGfcL4:x7QqqJ|D!Sa(i-ff<mSfasTh9r_vE/dOmf2(R|}~%}g5wjn@<v_W[' );
define( 'AUTH_SALT',        '`F*H;;+A1Z_3W;gR^RW^uvXvmWa(z<LbFDA9_mx%{~Rw5=IRWuq1^N1`GnqfQ$*,' );
define( 'SECURE_AUTH_SALT', ' iwFA3q%6Mu_<5PFKA`.]#X>V(N6D9p}4zEcU?Z2P3:Zw//ryP0OIs^5sSiQJuPV' );
define( 'LOGGED_IN_SALT',   'FVuMKL=K.Ene6[Ld|@}i-L{RwhK6<o|iQ|I~cZ(3?.AD9F`+tC-!utxSf7CV2gzv' );
define( 'NONCE_SALT',       '@X;LBG6w^2oz{k%JEG+&dg 6;g0YNgj!z@Uiv6jh-kY|O7zgt0TA&KvX[%8!#*}T' );

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
