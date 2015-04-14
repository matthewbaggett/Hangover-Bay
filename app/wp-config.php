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
define('DB_NAME', $_ENV['THRUIO_ENV_MYSQL_DATABASE']);

/** MySQL database username */
define('DB_USER', $_ENV['THRUIO_ENV_MYSQL_USER']);

/** MySQL database password */
define('DB_PASSWORD', $_ENV['THRUIO_ENV_MYSQL_PASS']);

/** MySQL hostname */
define('DB_HOST', $_ENV['MYSQL_1_ENV_TUTUM_SERVICE_FQDN']);

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
define('AUTH_KEY',         '{bAAXP_a1MZFf*@a#-1LL,d93(SETj7r|5:yj O|.4F@/9<2Kk.n2H?lK|Rt%YMz');
define('SECURE_AUTH_KEY',  'u!KPy%u>vy&MaZStu?FZV_3Ez!5|7(qnf]JF.av@|h).^0<+OJVRA.@RV6Z$}(Z6');
define('LOGGED_IN_KEY',    'dCky](GX)RQL@^V$A_8KSBq/:}Vn>kbkumc`kY~ ;m )DK~0Fnrug-8<Bwg+Z9ip');
define('NONCE_KEY',        '-_0z2Z]s;SM,NS}7qE3<u1eQRBzJlBe%OJM vABbDVP<G+^,.(eDE*phx(Ye1}S<');
define('AUTH_SALT',        '$S}S[(aIXvhZI9]zB7{AcL2t2:5<BFPr^.h1b:p>t7G-vw>6*hKYdrW v(orW6Ex');
define('SECURE_AUTH_SALT', 'A{{&jy!QH6 [V, $Y~:y?5{lR+cT2f}W!PsVfhJ3w9(oDEdz%;,m|n>}[2Pw.Q{N');
define('LOGGED_IN_SALT',   '-=:`-,<AU90[+/[q-VY9*xR~>l@liqTdj5K%eH#vPL[ZLt|-G+0nRB6(ju&W-<Lp');
define('NONCE_SALT',       'Ipp-yANRvYAECKe;tre[}X}rn~g=[?%2^=W}DF.vH P?2$/D_r*^t+eqmb,@(ax}');

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
