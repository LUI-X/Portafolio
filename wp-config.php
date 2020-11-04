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
define( 'DB_NAME', 'wp-portafolio' );

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
define( 'AUTH_KEY',         '`QoZ- )9X$_EZdZ25#}5>|hSobuxyZZ:,BXOMfWuOuJ;6[8&9M}|6RW3BW<Sq;x ' );
define( 'SECURE_AUTH_KEY',  'c0:[/9r$HC!KvDPuGZ0!-TMc;MRJnucHX-Z4@%q~g{Wm%uzsf<o{uF)={ :HbTIE' );
define( 'LOGGED_IN_KEY',    '$%=9>I!|Iu`IxmVy0x.CTP)|Br{peO~B~>:*e`zG]zxU`|(bzhCaqNU==CPB}hik' );
define( 'NONCE_KEY',        '=FNn10WiC&i 8ljIR?y_UbpSq7o,R64br=McX(|HrMFwv<vna(dYEqljf)py*e}d' );
define( 'AUTH_SALT',        'e>`2?*eZQkqa]^,I`l@=9Vj*/JybKN/RSt{V9[o>h;NV@`*~!,ZQG0eqiP(L90T{' );
define( 'SECURE_AUTH_SALT', 'JNCn;/7;o{5lD}X{vUL._-9vwFn} Iz$WgOT<hcN&Un{A4pH8/:;B%4/h$G0$-8_' );
define( 'LOGGED_IN_SALT',   'Db82u_zFq#w#[1E/?%U-5l6L_H/Y5B|#<QXa}Nc}o-8Y92Jsb-W-o..MtD.a0wYK' );
define( 'NONCE_SALT',       'PpI,xjE[U(cqZLG8j{e|[/^<s8L&q8d2$&X%_3Ho OLk40Q$2tP#Ejmq)GpNqDXN' );

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
define('FS_METHOD', 'direct');