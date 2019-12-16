<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */
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
define( 'DB_NAME', 'gym' );
/** MySQL database username */
define( 'DB_USER', 'root' );
/** MySQL database password */
define( 'DB_PASSWORD', 'root' );
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
define( 'AUTH_KEY',         '-*4*gJ ldEhtkH3kZx|l$i@HyzbLm)dE^weD5.g(7sO5nK{igj&zr=n)5_w+fWg5' );
define( 'SECURE_AUTH_KEY',  '.Jm]^?IG6S6>h4YcNS.,gNpw`.#gWF?l>hAhyyY1PAk9spf[Qzu_j*hDrF2+:Jy1' );
define( 'LOGGED_IN_KEY',    '^`?1@Lfv!W.H.YNM`~e]ZG$<a=y%(1.K]Z3Ezb+8M361C<<Ksxdeb]<uy@ofqqEP' );
define( 'NONCE_KEY',        '69g|qa%;iMJ%Xhr}@o1MhPRq:^&Ib&ST(PDT41>MC OwtcQ75hSXv$hA2j+5Ct-,' );
define( 'AUTH_SALT',        '%{o{au2N&j{DL0G BlRn!XNudv3-dHA[b@>hh|~pm|t*6L~K o S{4()Zm?YQmZ1' );
define( 'SECURE_AUTH_SALT', '_q0g7SF>9nQd+#!FbQ7cNqOC[AT&N:6)J{O sZy^1;;GVk+<E/l`wVqx&h#V/o]m' );
define( 'LOGGED_IN_SALT',   '0uG@Iq_u%pQ_~Z,N>=X{Hxz2[4KJIOEi]II1P([n1c*FW}%JT1CQF6h,U)7x^9n_' );
define( 'NONCE_SALT',       'qt2]H&v93EgQAZRE@FvYT}_`KrV%SZmt=av@KEL;:3t8]-+h+Qhl9PW:1<<z7a}P' );
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