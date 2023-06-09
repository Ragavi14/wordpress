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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'passworD@123' );

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
define( 'AUTH_KEY',         ';K7f9BY9F3#C(kUKkHsHfL|]=O85&JP@)cfRJj~S-iiJdFH?ySJ-duqiVL(uOg)g' );
define( 'SECURE_AUTH_KEY',  'Y[X{lNRD@v<?c%k=|m?%W9SG:>yolA6LD?Z`U9O!]tv}sNsEI44Hl}b<N%-][|JE' );
define( 'LOGGED_IN_KEY',    '9.=f%!TP]atfMvUriW;WYt69/x/iK</okN})^>*SOi!Vl2<[m:7vMbucv:DzkZF^' );
define( 'NONCE_KEY',        '9m_Ud9hrme<X)&)4j<EF)?c4qCAV*6G,/%wF^B~ Rz<nIUm3}]lewAqG^^kch_^]' );
define( 'AUTH_SALT',        '!U-VY<_i{1`5d40<1G*2oTuWXL8^.>CbhgQ#3V`%VCddH6S_|;es|^{M0_ZIiE5}' );
define( 'SECURE_AUTH_SALT', '_M[5+ bi_KU!m]4>,wR^bx`Dn8h<dMcZry*ZGeh$ub%w&lK]m$9@8R@nbnRpbLO ' );
define( 'LOGGED_IN_SALT',   'XX8KT*,$6%IN_5^gZ1+j#T4fqO6Eqr%Xj1*YG_p }MaP)<HA6HS7Z~?GqE65w/R[' );
define( 'NONCE_SALT',       '46y;([Oe=6e6w<L>dVFv-&J0JT1{0=:M4=&yS(rH K^7NCG6H@;KvBpFwh6Dfx&H' );

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
define('FS_METHOD','direct');

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
