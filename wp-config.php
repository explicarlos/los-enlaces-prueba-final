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
define( 'DB_NAME', 'carlos-grasa-pf' );

/** MySQL database username */
define( 'DB_USER', 'autor' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Program@0' );

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
define( 'AUTH_KEY',         '{|d9dEzp(f$mAhe5nNVKGp56IQcO{uyrf&)EX/T4|e(5EJjBU +k([i?}<n>i#4X' );
define( 'SECURE_AUTH_KEY',  'v-=`C#M+P{b90BxPQ5}(9.M$syTa9AGoJ[N&+=%E!jX+pBJx3e!db#jKCiK^{bvh' );
define( 'LOGGED_IN_KEY',    'UEr&{k0pnHAnq|pR ij~:1!mqIT6w>j?(*[fEc]Tkc]JEfP]@Xa2=eO@Sv%@`pqP' );
define( 'NONCE_KEY',        '{>q2?()!9?6}(hM`bb342]]GkQz%wxKYWsna1nD0Ml.K`E;1nO;v _fzT+-R$0Zc' );
define( 'AUTH_SALT',        'cGi$/.l-tnrfOm.ObW_^[^U,^1ewIRES(UzZ9ZLWJ3.f [lWuk7!udE2Srk[JCi&' );
define( 'SECURE_AUTH_SALT', 'ipe?VT? Wt0eiO<Rq~o3$lP!=AOf>NlU:?7Mm,I d)U!YZ#.EZ5g,_&q$6Qc >^@' );
define( 'LOGGED_IN_SALT',   '2u;>]g)k]gVA|Q^(i#dj.,(p#|BN!KA!*23 8w19EYhgZ+/_XD()lyueSIx54x=k' );
define( 'NONCE_SALT',       '^;ASn9=Qc(os~gv?o;N/A-C?lWmUsr8IzvszhYi9?O-TmpOuRh?KJJ_,7?aQy}6L' );

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
