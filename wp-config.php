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
define( 'DB_NAME', 'infocimol18' );

/** Database username */
define( 'DB_USER', 'infocimol18' );

/** Database password */
define( 'DB_PASSWORD', 'infocimol18' );

/** Database hostname */
define( 'DB_HOST', 'mysql.infocimol.com.br' );

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
define( 'AUTH_KEY',         '6[p5)>GO,*icV!ss?5rsnV~NnQRk*mejsd3NZtvLaeR$_X44&Sk4|lSZgJ]OUMsl' );
define( 'SECURE_AUTH_KEY',  ':0Q|RcpB0IUCY7#} *Ad[Dd0tY)lsb&3fV6/sp>xheO{Z]_B [9DKF?WhkMZxD-Y' );
define( 'LOGGED_IN_KEY',    '.I.un/v_aEx?sAB:+^x{279,ydtSg&{qxu+9N7:Upq#p=RF%;BxAGOr(v,q(av3|' );
define( 'NONCE_KEY',        '0BpSN>dQKt4(kKM}oe~!KFs0 cA&Fm7L*+&Q+<qV&T)G<(;5<&rJW6t;uM.(Rhl)' );
define( 'AUTH_SALT',        '.SuvRRRv5=%cC6.q^|05X6^{IY{v^^~xX<IxH=I`v@H(|MW/9j.aAjfvuV]6>)D.' );
define( 'SECURE_AUTH_SALT', 'ayspi0uX!~?1j w8+nz&<n3$O3hF#fNd)?).>(/;A&`TsVQep}&u]:BW0J}l|N:6' );
define( 'LOGGED_IN_SALT',   '%@)_W[8wK j2WS/3klGM_M;+YlPU!qlntmf;ZH[xC,|eqt`UCR&;Av&?FOjx <W1' );
define( 'NONCE_SALT',       '!sf(SX qhW6L_^}%$3-I-u,E]55LgoJ&PdbN;-?24orD GFu~*MXG8U=oK:vH_=/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'info';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
