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
define('DB_NAME', 'everywhere');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Oh$fi>joG]q/ K*fTw=={/f<Ito[g$J-Z6!FP%ji22[^/K}:7({eEc+r(1RhE&9S');
define('SECURE_AUTH_KEY',  'm}m%*Q]t@NDohF |)f8SB fxP7/ vq){U)/{AFC|q^h4R|LIlVHM_w9.SH{<% /Z');
define('LOGGED_IN_KEY',    'Gc|J/uc<g21}lYwzkRmf3WL&osS)hD=!U4BFRM7r>4Lm+[`-jo{AM7HXa2D~11:G');
define('NONCE_KEY',        'H(7u:d!QRCr[>W+t{M_C1M#L:}=&,<V+r Lle)E6*v:9%Dd@%UOQV),3_IH-[%E*');
define('AUTH_SALT',        '{6(2RJ{q_8JNW$9-J0&)aTeVNL8P,d&Y8@L}$+p9EhJKXi4>]7v^Q;S&di0aJ3jH');
define('SECURE_AUTH_SALT', '/Q6LNtskr[X+15@*Bj.FW-fBb(2`Rd>(L2{>fA=i0>T~R}dPfDPru`*pL,;dI4Ei');
define('LOGGED_IN_SALT',   '=n$^,IA{]%OGlKKsN&3)?:-y^08WFOid,XOJra_5nZ;]$u6m(_[!weL|bN[4&pUr');
define('NONCE_SALT',       ')<QY|6{lDp6N,j$l$hUp;;]daX]BNt!q<{ca$).LSwAyrH_(YKZ /}#kj:5eqo2|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
