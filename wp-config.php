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
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

define( 'WP_SITEURL','http://'.$_SERVER['SERVER_NAME'].':8888' );
define( 'WP_HOME','http://'.$_SERVER['SERVER_NAME'].':8888' );
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'daohannganhang');

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
define('AUTH_KEY',         '?U8a_KwWZ`.]y:{MXMg`|j]/RE<u(&z*)y[<ipXB@kUkjP(pKj=GwBK>*UG]X:zC');
define('SECURE_AUTH_KEY',  '4Xa}_l.#o aG4C 1*1pU?zjLHH?!6qe+;G/gQ]4.PvnQN6t-_HV8/q/3NKsRi4#;');
define('LOGGED_IN_KEY',    'O|uf,2?s{ys[T/E[~e%SyJ(?G+m>a,f-?I/)A*!}yCJkF2E[[s9n`]aj/ORbsW34');
define('NONCE_KEY',        'AfT(|J6qii)LUfNKr*qkZ3tAkn,R>bRcN&~W5Aqs(tWFzdv4JNn;N4yU`G}PZhVR');
define('AUTH_SALT',        'Tw#E1V#xG`ug#Obkxz cLA;pKZn_dEed$mx=<&a?_}QiP1F=|9|a7OeFcc3,CuLu');
define('SECURE_AUTH_SALT', 'Jx:g?3Ny?]QT4gX.xNB]I:>8`c<X%@|/Co@]3>wWq=m!E`_q{ek(^B_&QTK_i,s@');
define('LOGGED_IN_SALT',   'zZ<t49u$eJK1$alzwD~*ZT!?ZV[`O@b?g.|?utt+eW(yW3l9?e@)VDr/tD2I1pVq');
define('NONCE_SALT',       '|oLv7U}xl25[LcM#Y_V~GV`l-K{.CUZ6Gu^>&Y?l^p_%3I^i0u^L_jnFYRA~P-+>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'nh_';

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
