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
define( 'DB_NAME', 'eldp_db' );

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
define( 'AUTH_KEY',         '1++QtfrH{|A-4HCN5%wfI y3Z40N2q#N /RA?G6mn0/cD{>O:<KSd!-,^#7aqFiw' );
define( 'SECURE_AUTH_KEY',  'StZ?s7?G7.Qigf&#~C0EWly{+x1xomX?sF*k8=jiR 9Y^]0TK9QjI<B fR?+~:KC' );
define( 'LOGGED_IN_KEY',    '2oR0XP4Y/r]ZlH,D]sJ}6||2zC|s0!(@/4Zg2B]^0GCmCzKz?27$]/{r:O-Lh_s^' );
define( 'NONCE_KEY',        'qzwl`z6[/$k;79_gX0A}SOESGoqyZ..#?Wn9E=_@K=h)Y{|5NKjXud!G#D#C$OT)' );
define( 'AUTH_SALT',        '_ToIF{dXFW]K,:bD_-Q]mZt6-Y4=DHFe+:CTJ/@aBZ9i(z5*GvvVW3Z j7W.vcS5' );
define( 'SECURE_AUTH_SALT', '/^ek`x2snL!oSl9eYr#5 @X7q?KG95DoT=G7~Ymj>?fv+s%VJ5ub0D*=xU8Y&)f3' );
define( 'LOGGED_IN_SALT',   '],w3Mpv`MmpcMq_Le]k2.k#ZSTm?IW-}#;yjfTCVI9mbpy+*/x9/79]#N@tzAdIK' );
define( 'NONCE_SALT',       'N_K8Y2mO=JP>]N)1hdQg~mELsu#qY5vB<qr&R@eg5T52;]*Pi],5F[gu,:k){`7N' );

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
