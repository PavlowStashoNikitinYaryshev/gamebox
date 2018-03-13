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
define('DB_NAME', 'mysite');

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
define('AUTH_KEY',         '47?/%|7o#{v.OtY#xCews@?AETx!iA%#lbBudd#X7~%~$;pho_;]yBU[x{4gI*uY');
define('SECURE_AUTH_KEY',  '>h&0B{oTA{JoX55p]A*dv&5QRR)/Q]v:$1;1W*:3:D)yO!b_Lz)F2Ga:+=uC>}G;');
define('LOGGED_IN_KEY',    'j!u!! B77>/yw;i=i5|_`2#+=8/FPw%=@h2Y]!,*~+kw?/r4T&&hVW8!5:,sC7g0');
define('NONCE_KEY',        'uQ(nol9fkP<|W;Gkdf[Z5HiwV3d2DQ<]6K,u$F@.{JE!fc_#~NaLqmhTu-V>$]%T');
define('AUTH_SALT',        'XKjW@DPhi{KAf)`l)[i<C>*]8)LH$?1!~tj]]C0eCyOz2r-7|b4!CSz^wm}Dg(UX');
define('SECURE_AUTH_SALT', '^MzGOj>)2x<6PJ`uA_1|=Znd{-42j=qD>/aHE+L1HOjkIpV=js=52DoWLDiK>_s`');
define('LOGGED_IN_SALT',   '.*L#U}duCj[um;aXwY#vo?wcW}C3vuJbizmxDUx(tb0<J{{A}8iz*){n:qgVt/g2');
define('NONCE_SALT',       '&lTDR/rp$^@#q9f{K;ES)e~R=A|hCPniA^psd8+9Q}m3nL9IkTe>T9v.p2]zLVi]');

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
