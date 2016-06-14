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
define('DB_NAME', 'amenities');

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
define('AUTH_KEY',         ')jk80.:qSO,?R;c+j~P]}pwK-_b[eYbF[?hPOo]j4S 4(0 )(?:~3#S)g,6HKUe.');
define('SECURE_AUTH_KEY',  'VanZ?%cnA0 d8O6Jw^]I9@,#M<`:tMh1N Z`nD[SS+GK#K z%q|o/4~i1G~#ytL=');
define('LOGGED_IN_KEY',    'Y.xdA#I^_n>Ra-hq>G;1]D^Y! M6ZHZ=UEA@_f]oQnq|]%)O`-xS Ucg/)cl.4.!');
define('NONCE_KEY',        ')%WOu2uMk!#%|#7;#bB,%08.Zmb>q5BO;e(5=Esh()F>;mH],>FPGP8CG{lJerj#');
define('AUTH_SALT',        ':+F&q$-{ODLBDUtR1tN@gx_ `v4XK~:QCg2*zw#8C$Z#iONw--L**t buP{|Fw>z');
define('SECURE_AUTH_SALT', '#p9g%L1d%N3amZE$=gs)X`.?1<*QqT=*1ts@dLp)%l(HU$IG6}o():Z@J~KTt1xI');
define('LOGGED_IN_SALT',   'l6Z/N$m`7Op{/7A_?:,WN}jY$9@h(O[,I Q/BMU##0T?%=/}^6;&pdmL9h}~a7:Z');
define('NONCE_SALT',       'W6!%hH`+A*B4<=O>pYWH5z8G+W0Hr2bogm(!zse:m{+p,X}1b, YLtkWvZ=Opw/q');

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
