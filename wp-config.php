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
define('DB_NAME', 'dolphinguy_test07');

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
define('AUTH_KEY',         '-Ip<9>|`%Y>Xni~Y;cwV2dWU[vkR6o)U||,R93kcq{!~Es>5-y8)$5fBqIb:6aZm');
define('SECURE_AUTH_KEY',  'kwn-4|0% |l8@z-L{Z8iZ|{@P3|b+g<q~]-aGul[O`~`{{~h^R/84?>=1s[|$3>+');
define('LOGGED_IN_KEY',    'lJA:L~ z<x;ZlG-|$VDGTJ).pzMRX4E^V-Rn//a=a_O%(fLIU,+bn c?IO::Pg$c');
define('NONCE_KEY',        '|?5*6^.qsL6V.TN=}(w2u$GL1SzNK13gP{nM2}F-zUQ!p-9uw)d$pNi4;m>2+,t_');
define('AUTH_SALT',        'n5T-K|fj*DEvJ^bm/9O2]N@6Q&_!Be4*(c.`D^GX~DAI4j(A3#G/-&rR,(1LutXa');
define('SECURE_AUTH_SALT', '-/2$2`%K|-ap^12~Fw7#-cMrJN$%AMV0Xq:/aCg4_Jr5_&xu=.W&XM|.<Kl%kW@H');
define('LOGGED_IN_SALT',   '^x+6w,-Y~)SE6[Y.^F>Q]:.KK~7U&pi}I/NDQnWn.f1WR0Wg*q9VOyEk,4Q@nr%<');
define('NONCE_SALT',       'Hr$/]]lX`n#r6 U0/D$IP(Z1s8A|b83G,@y6YAHz>x$o`Mji5/}E-$St 49;]pAo');

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
