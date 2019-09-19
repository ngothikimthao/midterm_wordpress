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
define( 'DB_NAME', 'ngothikimthaomidterm' );

/** MySQL database username */
define( 'DB_USER', 'kimthao180899' );

/** MySQL database password */
define( 'DB_PASSWORD', 'kimthao180899' );

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
define( 'AUTH_KEY',         '6A!/t:8WU3Sp5cN>7-6mui6%<jU,IY7~pQZ[>976p#!NPq3f+B45)9sO<`fjiIRA' );
define( 'SECURE_AUTH_KEY',  'C26zB#Q=cP1DxjOqk.5{.4>c.|*V!OzbTe+Ln$Ll(;Vu%;U9)Q3z%l(;tm^F$@qK' );
define( 'LOGGED_IN_KEY',    'PCqqH:f/(;(-DO[<N&F`_;I`0YpTKP.,W]&_HYII^c<-52_fhLMC^cmg7V:=1V!b' );
define( 'NONCE_KEY',        'Gh1aO~A|yi9VwLnrBgmD~n)@[m]2OD(q/abMtwQFO}-]ew|R|PdCVK?M[WeZ5<d!' );
define( 'AUTH_SALT',        '$BK?tXgBy976##Fxq{uS2f=H]`p%t~@LTP;$dZ35,.-g(K@&f6D#IlsJm[}B|t>B' );
define( 'SECURE_AUTH_SALT', '1%r+cbYBw@:iv$rxjdT]%tE%KF2JDn^Y>?JVpEhi:}lZNK7NEn egneEO2a0rNNn' );
define( 'LOGGED_IN_SALT',   'V]xN!Q[jMdXFbDAr`mp?y?%C^{ Rm07bv(U%}G{ZO)r(c&~k&^;yJ_^4=jchtHt~' );
define( 'NONCE_SALT',       'X<n;V%4W}-Q)@Wm8Ul5Hq]3Yc+pI@X!(d7C(3DWc]SG7s:fudzuP._lFIN]DB>M&' );

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
