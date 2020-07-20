<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('WP_CACHE', true);
//define( 'WPCACHEHOME', '/services2/webpages/e/s/esntechnologies.com/public/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'esnwebsite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Esn@2020');

/** MySQL hostname */
define('DB_HOST', 'http://192.241.148.26:83/');

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
define('AUTH_KEY',         '?Wy{rkw}rO]*Af!o[#DIRJ$-JBU`PC2|b 7wkd{!bFbNPN&Rn^}g]ZoNTKL2?1+D');
define('SECURE_AUTH_KEY',  'PSid~-hX5!Je2Y@|pw8g=qR`WYuQL@SzSZyw53^fp}BrKeG76Hsph8!w&<nl@tbi');
define('LOGGED_IN_KEY',    'uS_6!8G;u-8)}=u6+vmk> r?kvD+gF#uiVT|p32I?i$Z@:w!+<)_Eg;}i-u~IW r');
define('NONCE_KEY',        '-7lCDjM@6rM5Uv{4>=~webSK|9)5-)vqo0HwX-U*Z0K8-&>szBSZgr1_dGiU#(!_');
define('AUTH_SALT',        ';D|KC;.mX+|--rMtL.Bg7--%-M-~+H?zarUWyj?z,ak|]o))=hb_PK?pi{H?4gA|');
define('SECURE_AUTH_SALT', '%<-b>>|3uMtxFscBQ#KSMR +zfE,~RC{LRZ|[djV<y$.skgeprla7&2H^)O@ATSg');
define('LOGGED_IN_SALT',   'IL5vp@@+M&U9qFD<S;%a@^|RrVd,sr%3>47i+KY{uPQ[::h>cBX>*&m^K}Y@5*gd');
define('NONCE_SALT',       'xK98KN!|DgD@fme;0T*0UMpUdZ%!5cR%t-h+7pI|Ec0[>ag$bYg|@-To+b:.W,p?');

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
