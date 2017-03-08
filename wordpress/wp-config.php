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
define('DB_NAME', 'nea');

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
define('AUTH_KEY',         'lG-s2.E+UNzm=wV1?BM=,GJP(tlnxjw7q@sE,w}#Bdi5=:;_sZ!4Qr=(;rz7!=!%');
define('SECURE_AUTH_KEY',  'g^j,QUp5{QT[6jcB,aacHgHTfPy)zNo[B$]$_#F|8V14GH;SvbmR%rp>YPL/Ky@u');
define('LOGGED_IN_KEY',    'JIM@x^G`%LN)?sz.j-<2]A=U I+Zg{81|oVvh[FaK~@*och{B3.kqQDY}EGXS P$');
define('NONCE_KEY',        'Fu8vR#S3eQP3Fp-S^~M}ws-Ado5biRAp(K2/_zuTzXwPqT4Qg[R0b#}6Ob_R)dN,');
define('AUTH_SALT',        'QP(Q!&;{t>N!)3.CVL>%KcQq[?V2DE5<^`sL*-(K)D@DX($BFFnUZd=IZN%M?eq0');
define('SECURE_AUTH_SALT', '<4kKqniNTIRo(4%0qaL1mC`&O:$JV}?,MWl0rDMkCp3*]Asf^ZA@mf$[]RW3ULXm');
define('LOGGED_IN_SALT',   'Z+C _W:y=-mn!HTZ-=|hO&S[Hp9?-3I7LpcB+-TN[IYSrX8k*GTz`%Ap;Efk4^Z-');
define('NONCE_SALT',       'OFDO%lQ./r:TJ1L6;f`H$/~8#8,x(q~Ej^ke^}wOuvViF?.TekG3,,1Z2T^4m,jm');

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
