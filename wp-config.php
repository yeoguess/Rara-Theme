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
define('DB_NAME', 'rara_test');

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
define('AUTH_KEY',         'Ii_Q[HrBa&{oh-~w&YaeYS<>p|:Dq-c&}tjQnNTyR&LGMX~<6DOQZ53l#Yu?I(YG');
define('SECURE_AUTH_KEY',  'Kr_-6@uB(sl0=Sy8+@1gL{$L0P Vq&n-L0rE>yg7R^i1}{5yj=foC*_$_chR*!?$');
define('LOGGED_IN_KEY',    'oP%^Hh}/74}%9Z)XXa>CEX<([D9xZ~Ym`QjAg 6JuR}70F}d>~f<ceBl6r&rQvH}');
define('NONCE_KEY',        '!DAky5?(abq&,$a{qW^G_^Z0YT53+,SICMi=B|F{9*.QKU(P]GNtL.F80kx]b]_h');
define('AUTH_SALT',        ';ZRN:0UDBMiw%K~,.3d]dd y:_;#Qb!5XQ*B>UeL*L7^cHsX2ANAVW]HWK1@R?Iq');
define('SECURE_AUTH_SALT', '/!wlyu3D1>]V)lOR)=6cE7O:c_]p2{|Ga] >_OeTyoe=Dy!@~Hp2`gS}~+zIie h');
define('LOGGED_IN_SALT',   '4Y^eJ69j1<51r{ovAaUkWsSOusl%ey)9 87&G>wm!wn2uSO;.+DBv>5$twV2 }^c');
define('NONCE_SALT',       'P@~J?b>=*>mib:FtGBUtF9m_k&0d#t1SW:n2CJJTcA<xJji]7WV_5.<a<N%<hSou');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_365';

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
