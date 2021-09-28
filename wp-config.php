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
define( 'DB_NAME', 'jackyxie1' );

/** MySQL database username */
define( 'DB_USER', 'jackyxie1' );

/** MySQL database password */
define( 'DB_PASSWORD', '995599asd' );

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
define( 'AUTH_KEY',         'sJ(@,JoG2(jvgH:FZHW5_rngC<a@fi/6;c$Nh=mP4^`zFQxt6]dP PZxIfj_GxbM' );
define( 'SECURE_AUTH_KEY',  'C4Z0h!Q$$a!71MGMLN=,gPQ%yQ:b2O+aYV:IP<1jL:W>F,z^ A_! x:-5.mW%v?[' );
define( 'LOGGED_IN_KEY',    '>iY#~3i0r^7T1DU(p`cXNNJM%}n!JQsOTS=o3cJ5nE^S-X7Wv~hYY4@mJ( X-#.!' );
define( 'NONCE_KEY',        'eh~vn?[c80Ewu9=u832[vqi`Yo5+Jh=sBn!Q^T}D(/vT}HdvXaRT{32RJBmraMc:' );
define( 'AUTH_SALT',        '(Elsu*IZj*/pz?}s*GAD:s/)UYF?sFe=.C47>t@;q7%Fb%j:DTmQ9N`~)Q8(M,#=' );
define( 'SECURE_AUTH_SALT', 'i_ WiK:DkODhnxDs(&g(Vm0V/mltz+}nc?3Oj[*1W)%y@VTT0&i=f&C_o~S+dv41' );
define( 'LOGGED_IN_SALT',   '_L:Zja$UkuFtaQ#yD<{_S7T|ysd[~`:fzfcx!x Yd49 X=YHCmV ,>L:5_+}x-Z3' );
define( 'NONCE_SALT',       'uw(}n`-4#`Rwl*A;3:jHJNaJ2D^qus)+2][`&7{_k>7;3T+MRLKaT7>ly0<UJ^<J' );

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
