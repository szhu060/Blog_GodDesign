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
define('DB_NAME', 'WordPressBlog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'E]tFd062`Wd9,IjHW.]&OXhi 63:on WMO,^n7r,2>4<[/;Z]o53(+?K_ez--~v?');
define('SECURE_AUTH_KEY',  'Q+LJWdT&B2_TG{dkx4Igr$ul(A8ThpM3]jd(Ll{WANK!VH__G9{&<V_4HQRd`f}C');
define('LOGGED_IN_KEY',    'sM`_0Z]!/Q GOynXGqp%5Uo?Dmbuf_g(924]Rlm(ND^aWg]K, L)<EGmR7Yd4M|/');
define('NONCE_KEY',        'L=>hLL`)ztT&Tw}VgvksG#59NW|HI(x^!5eh6TD8oiW)l_|D,0cui8!Ks[ Rf-w/');
define('AUTH_SALT',        't7Iu73I:n#`wF!vRwQfx{hX.KyiR1ZT8{L(*Jm`-EwZ@qS*dNP>kQ}zo]3g1dmFo');
define('SECURE_AUTH_SALT', 'G3zF>S+zS:JrlN/9=JhrL Q)tlc.I{^7S>^.ouRTy!IcVd?u2yr{hP.1Pe_iCxY(');
define('LOGGED_IN_SALT',   '=(jBQfHiL`;Bg4!rul V@#] d^GiMp<6BXB2OEJt$xf5w9ObF$cWN(Nw)1LpgSaa');
define('NONCE_SALT',       'jzGBOSN3#;p90.N-oU9|Udd8>Vs}><Uv5pK(^ueCja[ezL2a&w.gx{yFqqdt%Q4P');

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
