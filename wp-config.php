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


if( stristr( $_SERVER['SERVER_NAME'], "localhost" ) ) {

define('DB_NAME', 'wp_test');


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


define('AUTH_KEY',         '+ct$6V`A,v8E!z!aK9e:HR+6<,|Ch,4/9uRJD(7P-4-g6(EC`r_uO,u33AzP&c~N');

define('SECURE_AUTH_KEY',  'zk%,11n.w.,SQXJtDoj+W,pPx.6[|*fq]e|eQylU2K+dWm.= =-F5w #@gX)R_G|');
define('LOGGED_IN_KEY',    'i?2-}9J2RAVv4hIc:U{:B8Yjc;x=r|o>KLj+wik[WJ||&E={sVnup5Ys2Bk2I@22');

define('NONCE_KEY',        '4hsZGF2[(Gf_Bqc|-~f-@@2 N?oSy0Vnb|HU+F;9P.->LKWXC,@/V&S&D]a!2^mn');

define('AUTH_SALT',        '9L>Do<+.+>~5j%{.>?F1]1%8(}6aD~Z_M+SLT=0aI6kCkG(7@INjzaq]+[|JT[jv');

define('SECURE_AUTH_SALT', 'UiHI>N%L=5M-f|0iXVOGCAkT__/URR9491-f&@^Cl6_QASt.c)[ihQ*qe[ye=:nC');

define('LOGGED_IN_SALT',   '6;u@RzY1&qb,U}DyDL;fm[x+x5++81U94nI/2V?{#@[*+i+x3T:S2G-|M+|+or~-');

define('NONCE_SALT',       '|Q-1^~hs:7wt4yU]!Fk_Qz|tb++}w)9%<b@vt)3XKc?Bj5nqe[C,_?^/J2|*T]-x');


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


define('WP_DEBUG', true);


define('WP_CACHE', false);
}
else {

define('DB_NAME', 'project_live');


/** MySQL database username */

define('DB_USER', 'project_live_username');

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


define('AUTH_KEY',         '+ct$6V`A,v8E!z!aK9e:HR+6<,|Ch,4/9uRJD(7P-4-g6(EC`r_uO,u33AzP&c~N');

define('SECURE_AUTH_KEY',  'zk%,11n.w.,SQXJtDoj+W,pPx.6[|*fq]e|eQylU2K+dWm.= =-F5w #@gX)R_G|');
define('LOGGED_IN_KEY',    'i?2-}9J2RAVv4hIc:U{:B8Yjc;x=r|o>KLj+wik[WJ||&E={sVnup5Ys2Bk2I@22');

define('NONCE_KEY',        '4hsZGF2[(Gf_Bqc|-~f-@@2 N?oSy0Vnb|HU+F;9P.->LKWXC,@/V&S&D]a!2^mn');

define('AUTH_SALT',        '9L>Do<+.+>~5j%{.>?F1]1%8(}6aD~Z_M+SLT=0aI6kCkG(7@INjzaq]+[|JT[jv');

define('SECURE_AUTH_SALT', 'UiHI>N%L=5M-f|0iXVOGCAkT__/URR9491-f&@^Cl6_QASt.c)[ihQ*qe[ye=:nC');

define('LOGGED_IN_SALT',   '6;u@RzY1&qb,U}DyDL;fm[x+x5++81U94nI/2V?{#@[*+i+x3T:S2G-|M+|+or~-');

define('NONCE_SALT',       '|Q-1^~hs:7wt4yU]!Fk_Qz|tb++}w)9%<b@vt)3XKc?Bj5nqe[C,_?^/J2|*T]-x');


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


define('WP_CACHE', true);




}



/* That's all, stop editing! Happy blogging. */


/** Absolute path to the WordPress directory. */


if ( !defined('ABSPATH') )
	
define('ABSPATH', dirname(__FILE__) . '/');



/** Sets up WordPress vars and included files. */



require_once(ABSPATH . 'wp-settings.php');
