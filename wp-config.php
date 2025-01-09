<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myportfolio' );

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
define( 'AUTH_KEY',         'VZqsk4G!*x{h<FCjn*2zYfin7$^c)&chRh!h*&gOrB9!jYv+<#vf/1!F(A.NTd80' );
define( 'SECURE_AUTH_KEY',  'cqelyR1OpEh:(}Se7)W+b-IKI*%+)AX_%*w]mjsYS0yL`oOD;{d8&17@QD<~n8ws' );
define( 'LOGGED_IN_KEY',    '#k*d&XV0YdW;[`!UeCFdG[(|Pa;}<HlY0e?3e>CGt>|#V[H,EZn/:s*jSU!9NN94' );
define( 'NONCE_KEY',        'Lch<<5nD*`uJu[jDi1T}!gv$[M`M(=%hSMGG8hdg/9|vS>=rTKbrXUVRk`ruUvUz' );
define( 'AUTH_SALT',        '/ T6cGvQxP~SpL;??WR;qi&-c7*%G1vsP !1[;. ~wH ;Y5a777pD>[9!_{!u02M' );
define( 'SECURE_AUTH_SALT', ').q]&:D>zwtV qn3Z)sv*0Z{VCXw_q]DDVR]HE5/8AV^zK@R%cLHY@@z.h-0w.[!' );
define( 'LOGGED_IN_SALT',   'beN!$Ei%<<s_dxXqUZaIKlr&niytwXg 4;cI&/4i%W6*dL~#3JmOQG&2E|zjE]c`' );
define( 'NONCE_SALT',       'oNL04zKD8Vjn`2bIRQs, m78f#j<ygKgYvI(CXff!gZFm|ic(8P?^/6dpOlZ;oMP' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
