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
define('DB_NAME', 'getcoolt_vasevi_trust');

/** MySQL database username */
define('DB_USER', 'getcoolt_vasevi_trust');


/** MySQL database password */
define('DB_PASSWORD', '7ZmAcykv2cVFDq2');

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
define('AUTH_KEY',         'X<pxShE_b$Ux{)+^IBDu;#9W-*e-/ZXID[FHISKYc][cH$UeaD5xZ[}LHq3`1VfG');
define('SECURE_AUTH_KEY',  '*:N%.9Q@A(]~t^w6N{oYTM;iHkKpm%oyyceDtJP)!KnJuFC!6($Td Ii04WV:5-<');
define('LOGGED_IN_KEY',    'gL#;[ek9U2c3Zx|V=L~;h@?+[^C5xQ`X]Us_N5i+x7)]gM9QVTp` $7TQiT_ZIO@');
define('NONCE_KEY',        'MUw2.O*h#8ptw6dznw~0`oF(aoIF4k;MT2=oX#t>c*pC[bZB$G{8<y~8JSff<eG~');
define('AUTH_SALT',        'zr%;qpvtw;`n2,J]LEzlpOP@tl0TpY/|^QQ;MeI~*3!4e2q(c+.K* !vu:Ac^c@:');
define('SECURE_AUTH_SALT', '(a=8Kt@J3o>bg8^$(K2YRFMq1vt=~L>)LF.|| *<MM;*@Zlam<Ie5pno*56d&F(G');
define('LOGGED_IN_SALT',   '|Zt@)q`)6<#c9seRmX%3EWD{%}.KCDB+ux 9N+J07Du0n)#M#Hs7X^B$52%W/jlE');
define('NONCE_SALT',       'gmx< NTtFMk.^LgR<u!-B-WRI_?w$I=0M4l)7pK(_Yb=,:dGng :SEaXFhvP){//');

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
