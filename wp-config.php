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
define('DB_NAME', 'isc_newisc');

/** MySQL database username */
define('DB_USER', 'isc_dbuser');

/** MySQL database password */
define('DB_PASSWORD', 'iscdb');

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
define('AUTH_KEY',         'xQ&`cV#_+%[T*gIoZkWQ+SB{7I-q,X$Z&&tUD-AUdgtyM@kaG`o9?Ho+c]zr[u@w');
define('SECURE_AUTH_KEY',  '+m;ELF%=&+*b,][iM s_};#Me-l1NCtg`QJM*ac$ZD[DM!?4*EV(V%jTp6YkU?;l');
define('LOGGED_IN_KEY',    '3T/~P#V!M.f#GkP$DG@TDo.Z*WjO.u,A!=d:n<@~OV#-@-5 #;X0->o~U2uNM;J,');
define('NONCE_KEY',        '/ <Y}L8^@v-D61rh*+$d[ed8ok7O`,v^lI[0A-c}+-.x-U2?NXe(l,E Rh6Gx0e-');
define('AUTH_SALT',        ']VJ+#dyuUSRxo+bkiMad O}WhA jro o%H/KfP@kLrS~++ T:vQQdNI-H,Sd=]B+');
define('SECURE_AUTH_SALT', '2{y&+h-L>O=S21`#ej3@#^^JAc&]_qP#cNu:g1FbW5?&!3omRB|!)f>k1*I4U-9A');
define('LOGGED_IN_SALT',   '.t|0?]gbbLa(j[mVbLXlPF058FjPRn-X:_)ip(p9KoO^T?xN$PR6l}G7LU7V}=x.');
define('NONCE_SALT',       '}[QN[=;UqPT@^1R}84>b-,J[zDIXJy+Yn3*Ie-1#$JP~!^mvD+>Qob,r<KWNcy,w');

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


