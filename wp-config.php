<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'honest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'ULyN_`U-lm|=o:qiLJ-i9IpO{5;-p?Pd#8>qisK|=|nOY]=jf0_,tmtBnbTM*)qd');
define('SECURE_AUTH_KEY',  'NT)6-+UX#k+wl5l[xV.^TJ(}$k|~fCFT9M]-SN_+l<`F/AUW}T$#=:dHNv?F->_4');
define('LOGGED_IN_KEY',    'os[G,2|/CZc5pc!3{JCRDeafj6MEG&:3u+SO6H}1ZOXVWM/v<AMhh_&/H>+]VK7*');
define('NONCE_KEY',        'rp5ul=`ZfT5faN,C9 ,mH<gP+;1+|;C]tC&PUMw5j+i:TM9~+<k#7g]ix |ds^.^');
define('AUTH_SALT',        'n(x`UqaJkE n~G%>+:S:g{0bA^}[Mu,cWi18rD[kx;-cA<0+FE`DXMS=HnPOWekP');
define('SECURE_AUTH_SALT', '}fQoc_S}G@>#)m_S)o7Q}Lb9t0V+BF!0Vx2ORvL_9Z$K%-]NwVJJBfZBa.0Q|Y<l');
define('LOGGED_IN_SALT',   'v-{W;SX=%b5P`^~xuABK)@IVZ3;{V<E6~V,I@BX_75S_L`x+Okh|0e<cG,1^>}-K');
define('NONCE_SALT',       'iT?c5fMQV!X]%S^7Gw}1}aRs&Yp#I#V,!7Evu,<Qkw^@_k[|E[^;F)bDi#q(I4q.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
