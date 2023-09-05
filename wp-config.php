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
define( 'DB_NAME', 'nistech-wp' );

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
define( 'AUTH_KEY',         'L#me 2=f9D<&(D3vyA;z_}k0Cq4pa-n7*eGr9)0@m>44{(YV|Y%]5v>&Hx4%iu:E' );
define( 'SECURE_AUTH_KEY',  'Yr3R1r*qzK}158EyW8YMvKzO>o|q@#G1m|c2_~XGg}a0^dC9ja*HE!ob(/9i@w;m' );
define( 'LOGGED_IN_KEY',    'qLRpCyf<TAG%yMEEl2X6y?42M#qc|m(i|[_PDsy&np{jQ_t{5oLZu~>H2*!M<Ux|' );
define( 'NONCE_KEY',        'J>C5)l>gkNERJfH2jlbl!a6ok6_e_QGwA^V_<@R8|a+>))XwqA|2Fl}vjU/<)`hf' );
define( 'AUTH_SALT',        'TR/%.VxP~6x*A> *TBcD9I3DU(T[3mr9/Gp (`Ldj)6#onP1.n9H)/qQ#Eu$zYR4' );
define( 'SECURE_AUTH_SALT', 'RO[>v~M0t-cbTRS%H]?s0NG|KGchB9CxirbP;~EZ2 3a*EX#,<$lKgv8< +:NN1*' );
define( 'LOGGED_IN_SALT',   'sLOzL<Hf2#P,J3E| :1hxov>[tysaC:pn_=YPD)rcmOp2e:6{yo::pWO<&=%ar9S' );
define( 'NONCE_SALT',       '6`c1aaoHfum +{LP2XQ9BF#5Yj.sOk7%yGS*f,!?uoTED1G{cno+F:&,j,]JqW1o' );

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
