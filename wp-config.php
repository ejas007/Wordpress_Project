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
define( 'AUTH_KEY',         '9l^e/[-lqv0JwK$i+&QlngfTZJy}siTZwqLXNWmJ>EB-c:J@{]d`[=x%}/}D`/ J' );
define( 'SECURE_AUTH_KEY',  '9LP{(.M,)>#dP+,5T:`n:,w[,#WRF%+~u6;;X])XDxj^}wDSZq [bS)^2`/M=-@r' );
define( 'LOGGED_IN_KEY',    'wjsV?T*-?TZCU!r|XZn&9p+N]2UdN`~<a)!^.M%fRaE;:;]w$u6Z|^t0b4D#(_/q' );
define( 'NONCE_KEY',        ']Ar}UKm&X_ym<nB~RvU3 IHsT~k<oH<e7*.6-`GJ2$heH3d%49L+xebXzix~>lwc' );
define( 'AUTH_SALT',        'Vi<m 5,SWt1rI[C(iJ$:<7t8Mhx:Rug?G_e_4]0$eGKq.MCvl*(u8*ujJD_)[>Mu' );
define( 'SECURE_AUTH_SALT', '7^!|ESF :f+g@XuBeCp(v[sUEUUBs*fwd])Cjfe(nLMon8p,5X78%lc9_`L2Z33h' );
define( 'LOGGED_IN_SALT',   '93S&,JMCL_?x!|jn@VUqlSu`sjLlyc1CG.wqc7_IkkIl .0%u!mh9ZN^W(}`8=x&' );
define( 'NONCE_SALT',       'aF-Im**x9o U12vD6PBlYA48atPaZkyt|b_`#@VG3?=*p}k|1(bqhK= Daw)c[xM' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
