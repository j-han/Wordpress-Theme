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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'tyHxZ6HzLPHeWme/T1|m9AjiMc4jWkg,0^x)r@J@^N$?6C0Yk6-F@<*8U,5-wIW@');
define('SECURE_AUTH_KEY',  'I@47c :xC}KkROoG;B4-fHP+ aS4}7NWFB(j0X?NC`Qh-lsEaT)b&eOb}Tv-xc7H');
define('LOGGED_IN_KEY',    'w3JYr<;}CYnOeGA!wbA[8D[84fr5iY++{F6a$p3*<?!d$4EGy<u7w`xL!n0e5kkw');
define('NONCE_KEY',        'pm@<:NBu_0h<;-7eYI&Xd_:V#E+2<f_,cckn87F}S)unkgg>K1Suo{#grCg-Rf4:');
define('AUTH_SALT',        '!V8$8geUtkz>/DwY B8-|IqSM:kz)5jx5!:=+WDKe@h{Ci?6zGqa+P_iwb^P{{yP');
define('SECURE_AUTH_SALT', 'G]&/e(2PHGuA&gJbZ_ 3|UD!Fs2;l[^*_*u@e7u@=;IQ|`OID<eTF_4107ODF)Du');
define('LOGGED_IN_SALT',   '%lKk`bOGU*{D6}q0$(yxyI<c$;_h:9K@X!SVwx?#{ASAASSOW}oOH,leSY4e>094');
define('NONCE_SALT',       'aY/dm*JN~pYgT R-I#X(+-@=ckq-izy?NC;q|^b|i8$i`Tx/vg>Y-[bIc}g:YxNK');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
