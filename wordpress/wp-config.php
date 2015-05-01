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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'kim123');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         'wU!!<Be^mMv%LbXNlW}47~BA(ex;C6hcybNK7lT/jH#el%Y;^0!-/vd_4#>vH5rf');
define('SECURE_AUTH_KEY',  '+/RYM<K:z<rPH:`8f 7 TdVz2c.nWWy>uo,Qc5+Ep`0e%c^W`bGz0S/(e|AkH1b+');
define('LOGGED_IN_KEY',    'W}|G@y#Djz|Ec+r4[%J<B^nBs%Q1SL|:H3/RovX+/-3r}AR.4R%.shw>Wv:%/&]Q');
define('NONCE_KEY',        '0I~hhOL|%0ll|TMS$Rh)6YB/s(2.%%BUQvP|h6&L|_-KyCdO4aK%]5J(*zwTF,c7');
define('AUTH_SALT',        '(!{B$H5Cs-.zJ@vMS T^N|p6*w`-$U@q%0N3neeH5{}x+B:o8s+igi)0+ +5Ep|[');
define('SECURE_AUTH_SALT', ' 5-gLPd+m[UFrDb2P-7Tz9HFr;U >Wwx>o(e6_BQ9~?]A,QtETJ^d3pBDz[$PpDL');
define('LOGGED_IN_SALT',   'WiQ=@dmad_+KQ+>a!/PT|nLP)`OR({=xQ-Vv=0Rkwi?F)OwP|w5~Kv9?):a-GIX>');
define('NONCE_SALT',       '!+Qs&@f#!+JQ#FmQSGuny`O.X-{QZ?5lKqD4xiS|:t6-o-&n.#&S#Bi4?OvF437g');

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
