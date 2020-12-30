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
define( 'DB_NAME', 'sports-fanatico' );

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
define( 'AUTH_KEY',         'GoL&37S1si[$f*f F2YqaqtzKdGH1AXd23{W*g%53-`^:S|=C}8WFB-fMU%W[=wU' );
define( 'SECURE_AUTH_KEY',  ',w.cDMpRe)B{t9?YKY5`SF^P@hdH j!+_A!eZq4F#O>{<Fz=Kr>95>;mRyla6ZKf' );
define( 'LOGGED_IN_KEY',    '.Ax[2GtPn_e+i$5A.Ee{kS[KW/XMV+D{?F3SeaH9m,s:1W.j~Y^<M: Rn}0)ZK1x' );
define( 'NONCE_KEY',        '4wyt&(=vm9s-+KC4JKBMH5o>^$=9HD5$es+^E>=qxY_quNEwvxlwZdoVBBFB]pGp' );
define( 'AUTH_SALT',        ')<UQ2mSTGeF{P7sAj|V;f5y%BYKO#] Uq}/%RVDG8Ixr:K^ >lF&/.G%r{7&[=_O' );
define( 'SECURE_AUTH_SALT', ';P1S0Tp =Pm#(1*y~$H-KYTcj=b|rnBwH{m%Uuw(ea lYm]B-9J{QF=463Ga; 66' );
define( 'LOGGED_IN_SALT',   'kqKgag-o-UGH_|I!)pw cH)0 %glF0@1<wl8BWDa|td(dttU-N&*(YBHW/|viC@7' );
define( 'NONCE_SALT',       'Yh/2s5U%HsAs4c`Tcrs%?fA1i}=G,=1?uD%?2iHLkG}BiOV_8rNd.l{o7U5}@<B:' );

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
