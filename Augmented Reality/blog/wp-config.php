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
define('DB_NAME', 'modul_blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '/?eMhQ~,@F)|&d3|+(Pt;nb:40C)3vU@($=?d{gKm6: z/zNLXB U<e[UP$eW^Z0');
define('SECURE_AUTH_KEY',  '+Sn>tcWq0|rVss8|L>!R&wVtWAvGr#{JOiH8GR!y;DD,)XBa#Y9-$$MyOlo-JiVS');
define('LOGGED_IN_KEY',    'x[*+!D #v<Ha:8+1<Orn|A~kxiLAPDP3aS{ndoettM{O)<D%FJ[!:>K%=v`.m>jT');
define('NONCE_KEY',        '/z8VXKA;C{~&~M,yy|WYPgPq),<K/jly9@n|m6zRl$A&_35fiir7IrQ`l}4qN.)=');
define('AUTH_SALT',        'zg<w3#4i}D3/(|i*|#@,KNN W)+Kb!p$5>Y;4rv29V^l4;Cv~i&GQ3-LBM51nf]R');
define('SECURE_AUTH_SALT', 'Q}-5bDDS};2^2z{FI 2HX.<-TPh?9~8,g1nG)4O.5TM<[q^=14WGGYJb.qhAGa#O');
define('LOGGED_IN_SALT',   '&Yb1h&J+Gg*<q@&4^b#nhxYU|1w}-5`?P1_R*f2o`WbSZ]c?t=fV9IB-ig83g,6v');
define('NONCE_SALT',       ']S|GXajefv6>WAUaZaGKN@|w!+|R;$vAAQx87)dHu%%FTw>Y>nP1j64>8;:V+7J.');

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
