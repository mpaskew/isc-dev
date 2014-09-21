<?php

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'isc_new');

/** MySQL database username */
define('DB_USER', 'isc_newuser');

/** MySQL database password */
define('DB_PASSWORD', 'BT@N8Te6kjk#');

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
define('AUTH_KEY',         '!`mra [Uj=Z1&7VY8Yx/D3~io2F2e}~43M;_]T~Z_@}}:?[F0En*{r Cv)`HJJ,l');
define('SECURE_AUTH_KEY',  '6iKo^{f(-~*Y(-{GJZ+)<2VAzt]|u5U<P=Fc@3|.)diyqQ#O}K-e7O.?#N^+H18I');
define('LOGGED_IN_KEY',    '24*)G1fp{cHk 4bCA2|&2_cVgiM!2|U/[`4888,.> ER||E8pF@+^DoT@5>64:cW');
define('NONCE_KEY',        '=ZEce(FLm0mc@-=^%v269)Irt1z]EK@vw!A}sUW-|TgOVU*h$+CJ]VumCK(jd|Wf');
define('AUTH_SALT',        'sy9hSp=@bo<`._)wJx{f8{BKQvmCTUC5nMe*?aO]v!iY4n*88;I9i_WU}T>V;g[z');
define('SECURE_AUTH_SALT', 'm--ySKWAjzN0KV+`c-l}$PYms, it{8Jd4^t~qGK0/:9S&:-i{h3>2*EJ^4v: M{');
define('LOGGED_IN_SALT',   'd3$7C*6f`S&=_f{Z|pW+|fip4%+|,Ab4Zm$Dv%Vbsn>){_ki#+d<_92V4{{`t#Hc');
define('NONCE_SALT',       '/I[&`ob:s?wc+WN#%`XU#7}Nq`<MWDrK?Rx=aCP {-0R}|/]gLjf?*pJ_jGHrf-R');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpowc_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
