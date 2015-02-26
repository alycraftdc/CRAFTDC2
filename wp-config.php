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
define('DB_NAME', 'craftdc_services');

/** MySQL database username */
define('DB_USER', 'craftdc_services');

/** MySQL database password */
define('DB_PASSWORD', 'Cvbngh123!');

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
define('AUTH_KEY',         '_xFRRMpNMA %`&j7e*zT3&/gxNxI#z,Q$N/yJWP6hcO!69$>A4z2boT=r=]Hz+z$');
define('SECURE_AUTH_KEY',  '^Tt<.oI*S8]-mUkxh&$21ClG{K*</=xJUWSc^Spo4.(C%SZ&(e9]bX@gtr.eow{j');
define('LOGGED_IN_KEY',    'g2Q9^qycjJ~v<1ZgL;}mF#&hGx7yVSyJ}aqTM >a_|!&s{|8Ua:l$o49/L{>|Nko');
define('NONCE_KEY',        '-w%`u-?H<DcK,1uRzH}O;Yf={U| ;.KfTnP<sy{:%[c,|/;os>c XWwfGyEoArOl');
define('AUTH_SALT',        'WO*C{(EU:m{U{tIih;~6-qu4GI{[N.@XaDdy|+6V>D7oP]z{Y{3}&qGL`HZ@~f=7');
define('SECURE_AUTH_SALT', ':T!cH2Fww0I|fnOeX1/C-U3JC.BS&+@1!7rM9OUeg1u<v)=Bzju-+$`c3<^f,;wf');
define('LOGGED_IN_SALT',   '9k-EeaV%x8F8[W-J)?+)5!q#*+uPYweh3j.3Y`K&63/UFlYkl)rX=`-NfmC)fSy}');
define('NONCE_SALT',       '!T[ dX%y4F.vJ+h_P+7Z;I$_cJN_xf!S4qW+}kzQ0M?Hqn,9tR&s~V2X^y^n&E{H');

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
