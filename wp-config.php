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
define('DB_NAME', 'shopabyss');

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
define('AUTH_KEY',         '7&L4k/}LpFB7H{%gnZ/rkG@~Ik+kvlC/(tX.=OAR[oEtpg`vlV9o1#U}?M3[r.F]');
define('SECURE_AUTH_KEY',  'c`^=_@0w{*)KZt(&vR,M[BIVEH4F~wTZza,QV#q,zAB[VZ=YCl5}% _m[$ 5uDyD');
define('LOGGED_IN_KEY',    'wIHV;=g>B8p^8r=rq1 Dk-Ba4l=fMRFaKq/$vHH4)oIN{pRx90SeC4.meoeL#g4T');
define('NONCE_KEY',        'wtqn1N@X {;sBK=.zU~S*t4m.MVrsO/` -eQJMFqqFo]TxJN!o&]q0Qvh>;DOnce');
define('AUTH_SALT',        '[!181 g8(vc+Ho>!-ceu 5Ikq nu,)kNoC&)?RXvbo@z@0a0-2W#~zg]8Zmrx{Zl');
define('SECURE_AUTH_SALT', 'Wxn[?kO4b,<=Ph:KAcXU(tvYKD`yt<)W@<NyF_,twVYnQU@zMh%-m8foKB[@E,1v');
define('LOGGED_IN_SALT',   'YGe+(.>74Xp<z#aPO|r_H|24le)PHJ~:nkxK-7p6MC.p1<ysp;x2Qs.VwEr%mGyW');
define('NONCE_SALT',       'd *Qx9!>I:VEMIE*wQ_>%cPe:kY.K8/bP8@C(AL]ne]WM3-0hE+YPe-uT^3 $Zw5');

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
