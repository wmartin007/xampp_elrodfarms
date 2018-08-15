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
define('DB_NAME', 'dbwebsite1');

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
define('AUTH_KEY',         'LyElFZ!.w)o^pD|mdffA;V-k#=wUv7-xrQ:Mzjg{BL=B(%W29(~487DtC5dmI}.d');
define('SECURE_AUTH_KEY',  'l56X]8aw&9]];)].cEi}Fb]|0<}eYR%W093i5X<`T3fW]LL(mi`Nmr{J|WDH,^3c');
define('LOGGED_IN_KEY',    'j^3h0Y1bY5I^F[q}~!L-2V+aWdK%,;9{4sZxSM:pc}h9KOzEI$9-2)uH-vD3SO-(');
define('NONCE_KEY',        'Q:dS-m&^*i9mH+L1wR]T4H$%Hss6b2LG5K:?6&1RcaI.V,~*R_$yYO1-uX>Epph4');
define('AUTH_SALT',        'EfPTUuL^:ic& r;X3dk#OonC+]i..W%jLvyl6K~,OlF+Y0H.XK302t[! D.?qMMr');
define('SECURE_AUTH_SALT', '7GqS%QNkVypa`R# 9K)5/i,E@YaOH0b<2UjORkbVgjnZRJAs~P;N8AM-np 8,5D^');
define('LOGGED_IN_SALT',   'Bp7!L+VfDr}$3Efqz5TLFFIH!{j#-p83avziIYX?sYV7Q%f>U)mz[eOV^l&6M0w}');
define('NONCE_SALT',       '8@3xrLQpmAO-dIB7m#x-Va:vP}B}&B:yEG?I[s]O/Fi=Bdw+GI.uz.qG7NLHu` Y');

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
