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
define('AUTH_KEY',         '+iC<8N:=&p`t-0>qDKK)sl#:/q(-Cbg~+BD6P+5a(0!E-Z7ENq$(lPg|7/RXT#)6');
define('SECURE_AUTH_KEY',  'S6*bR97p&Se0:(bP~E>5)gO|peJRNa_|F`pyDO_h}|gyuyf6}-fG|l`PHro>Q!#M');
define('LOGGED_IN_KEY',    'k;|!;[y,M<9sh4-zX+[! keq<[i,iLRu|^K~A*TDpVJnmHs#vh9-ke6YW/LbI6<%');
define('NONCE_KEY',        'f}}kUJDFzF5fbsUV_F2^Lc^]ulO&MiCQTuiJ8A`n9pdW<UnNR-p+ckYM^i~[m{QM');
define('AUTH_SALT',        'e6Hm~)|K96sNSOH8Q7CW+-y%DG(t`*i_1J;P{suc<)[io#T@lD/oV}zPIZv`2s#6');
define('SECURE_AUTH_SALT', '.)tj< D*=0;7-;o9aX?GGp)$<%;@x:/X!UE L[%-;e=z`=Q ^dP%Q7C[;&3:p:7D');
define('LOGGED_IN_SALT',   'c|Pe`2o4n2#i[9zmA5@*J/d.@&/C+xk.;gw_~h+#4:9lE:-Ght~R;-rKhjJuk!^)');
define('NONCE_SALT',       'W%#`UDcorG{3~4HK^vh[YGPfun!(8SSRgDvyRQsep?_qCGN 3+0}nmlk$JN?9EU<');

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
