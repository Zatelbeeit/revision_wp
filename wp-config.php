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
define( 'DB_NAME', 'revision' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'lou' );

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
define( 'AUTH_KEY',         'VbYt+)W%D+,}TA%aq/ZEN9O+=D-e1U7e{3^{|o|4Wbd~|BM[+|UrcRY{%TlRi4~.' );
define( 'SECURE_AUTH_KEY',  'C9Il72b}5o/{c2}*T&2FRMfGhH>X&E;NqP~qkxVXq.p%Y]-,:1&YIYfm,1 jTVI&' );
define( 'LOGGED_IN_KEY',    'z^3(1Krfk<3!Ds]Sb*3IW5l):mIz$YpqtCz$DuZ~05kYhI-0hB [|L~y`i{Nn;B0' );
define( 'NONCE_KEY',        '8(c7Cq-F$<!jZ|-WC!u3x!&X;;r|I#B|whE4L|b%g6(Whb-tG[d!my,AY2a4 wv-' );
define( 'AUTH_SALT',        ',v)ZfK%kpv c{UXxk2R7?/7&jJrw<;6<j#Ti5Ts$W||<rOP@F[?6_zNC!GhiEpt;' );
define( 'SECURE_AUTH_SALT', 'a,%gF7vrb4M AO5RQ8,YRL!9{R!&JJI)M3=3nzM-|pidzzPvJAZ1JS3pp<1`w(]a' );
define( 'LOGGED_IN_SALT',   '_Tc+1WEwG]G^ouTW(h&7m}h#9(KLSDN;)};mi#5QZIdF`=%qX6Pc=$LeaJwzJ3A(' );
define( 'NONCE_SALT',       'kU?0M!c~>)j):[{81$$*crXmy.5oNxYd*).QO*lGerbdfr&PEO5><S1WriYpUlEw' );

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
