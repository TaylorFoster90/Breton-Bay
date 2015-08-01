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
define('DB_NAME', 'bretonbay');

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
define('AUTH_KEY',         '.<Si#ab#;{66Nq?cV(>n}IpjBupG_^(gF`y=8=|Z)%$oWy[3|<,$w]rbAdFtip m');
define('SECURE_AUTH_KEY',  '%StL8-><;=&Y|-.XuL !FyD,dm]MfkeX2@y,M;mdgtV`{v;+>v]9y9z;n9SMfU;c');
define('LOGGED_IN_KEY',    '@o0~*p>yAwxTDi[&K}f..{q7W*bTwxGE7@({0P)KTi)CK(-pe3JFNAFb7+1vfAf0');
define('NONCE_KEY',        '?u71p>pvzJj/T2Bsgd~Q7-/(/P|+>A~mk[M*(=16#pdC..UmBb.u/,BP$y+ftEX^');
define('AUTH_SALT',        '#IiW^jU$yB3Acpc7|lmQIF9*)u;J&(^CQ)1|X8C+n;M{@?72-@91(Mr!]jr AffP');
define('SECURE_AUTH_SALT', 'k!/I-Xi!y=ApWD+{6a-om.C0+O2]6k#g]z_hAjSiU`d|w:`$%gqHNL]yJ7ht )t:');
define('LOGGED_IN_SALT',   'Ow?R|#^.acL*N1ow3eDG.pZ2f`|g&P$$<IyEd[KyKTx+v]Z<*$4k_0&H5M+h-%fF');
define('NONCE_SALT',       '#nIUivUspV?Wl@H_gY@w|.+Vdgw@<2,vV$Qlm8e8FuRDQDs`.L!KE/;+pjl&Hd|_');

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
