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
define('DB_NAME', 'willdickinson_db');

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
define('AUTH_KEY',         'bv>#]v<L)rI4pNeslRy22o#qk&[zh.U$A[/Xh~nIdd.,W;5QKS0 HV[<3*[7UH[Q');
define('SECURE_AUTH_KEY',  'h}#BD}cQ75hv.0~9}G2`>M2/8:2dshz=sdDbse_O)IUy7KIP<:xGE~u>j06)3shT');
define('LOGGED_IN_KEY',    'kY_u` ;2,L$Ej?2Ako!L:iv4d$KmK..Q-8;ec:=xWbq9W0]*ZWt7eTpzo!qXQ)Y4');
define('NONCE_KEY',        'B**XHW0$^rz^,/7M;^i-vB+.F*M84WI 7 |Cjxz3^Sz>lC^3CV7nDCb[L05&@$$$');
define('AUTH_SALT',        'p&>T`6nY_L)&AjeHZ65tdp0*52Ok|0@UnJGCe:m18L;}kN_rFXG`t)v$e!|0V5Bz');
define('SECURE_AUTH_SALT', 'H;it~.@.>KmX#w?F?}zN<LSdCKT3OSua_JnC[in>dngg2T.-bslu:fz]M=f_#psW');
define('LOGGED_IN_SALT',   'A*_8#rL {6&YmP@u(55S}`P:0z[:|oYbKoEYGB`Rfo^zdwYJrCljR2#hQslM`x&p');
define('NONCE_SALT',       'g//3xsTKr>1*:D:NM/6#j|)EA{amw~kn#Ag6*QSs^uUu|e` ]08Uf=d2+XiwmY=5');

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
