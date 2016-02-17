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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'q(PS1_hC-UeeydoBwZZ0gCZ*V>=xnwEzZ,0NQNy++J7MKq<lG9)t]2<v7YD|v%e8');
define('SECURE_AUTH_KEY',  'x/O.N7]&f;9%C.JACQ:K=+O#B9*4^`& JtVG,!1$Ek[vNW)n<LgFf,N|l3jY-+Yd');
define('LOGGED_IN_KEY',    '! q+ul^A#r$ICuoaEIEDtYev{.=ym@kQ,8`!s&TUuK,}$n=h4n_By5M1PZ_N+@<{');
define('NONCE_KEY',        'd+1-K&q)$iWQ-+ xCNs[n(gZrZ1$&o+{l=[RctbiKi8Po+hW+`y+]k*J/|dhD0uv');
define('AUTH_SALT',        '%V0u4^}ChHAE}{-A<{c`-wyY`xed$.8z[4oD2DdguN41%Qu8:5vmN+D6codD^>v`');
define('SECURE_AUTH_SALT', '%k<ahGUQV^c&L(Wuawwmn-H)0F6E`}P6AMCJ5}X`hAG+R?h$l^%+kO]#][z{,8mT');
define('LOGGED_IN_SALT',   'e7JP#6VeF{82(U/@1YnQsj@&GQ8pg=;5y1T~6D_3?+cBi~0q[:b$n*-H#DzJd9y.');
define('NONCE_SALT',       'ip~]evgxZeOPGQEVHTlC0J8p(%F0~dzoq!/mH<=`+NroE?J&e)oA4Rdd[mmbV`U2');

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
