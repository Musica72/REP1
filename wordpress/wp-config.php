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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         '2?+i7^@JfUa[-=Bw^G/,aQ-RlE[88~|EMo/(1X<oK,fqbSP}luZY>|?/Zz.Y?%zc');
define('SECURE_AUTH_KEY',  ']N@+%$^3J=$?~k&_(8V;;Yx5{Pw&vh|yL,WXvrP65zkHYpVTb+jxTmE}zo|x6wy3');
define('LOGGED_IN_KEY',    '8<p1I|C{vW o7Ux{uB$2X|Pf+-U5MulAX0&+h+ldkeB~~4ds/4$jFaj@YvgN3#_-');
define('NONCE_KEY',        'N9A-2L75yHa#/i1v!+`s0DTv%}6oDP}-$dYc@C|C+hj+C{DZ1nTA26-6z.M/K-5s');
define('AUTH_SALT',        'nh#D|,/h2,z!?#XRozzrn1a03k*n-_v>7jJW_&qRN?.{[5oL=~WfSD)jq]2$JJzN');
define('SECURE_AUTH_SALT', 'O~v$Ss= m[7Y}QcPXK69<EOvu-*Fa|Qm]+$k%uez:Xl-bk1(Gz%nX^-.+K`-JW?v');
define('LOGGED_IN_SALT',   'ja(7GIZ_m@V:r3ZN*VSo&BkU,kr{_J,[e%e55GKQLp,`mHHQ[1MRpv{}4Zh|6Oe9');
define('NONCE_SALT',       'J16DrC)8b~7<$4C(8JbEORd`)r$+Obqf:.nWlk Xvz?Ai;n`TJAs 1RvQ,T}7QUI');

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
