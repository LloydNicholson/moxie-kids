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
define('DB_USER', 'lloydn');

/** MySQL database password */
define('DB_PASSWORD', 'Moxie92..');

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
define('AUTH_KEY',         'E&ng^0F$p#.87x.`65:{yH  ZPkox|#p_:[@, _<yU~Z|*&i64:2DGPu`0Z/a7Ck');
define('SECURE_AUTH_KEY',  'e+~.%)Gnd!GvyB]gl}UXM<3Tjz@<Lo;%;8R6.<fAt4 9 8zH&7>;Qq<}?0r$T!^2');
define('LOGGED_IN_KEY',    'S@PTzvnQ~A,5/n5>*MkBR?.U5VWvd6%Do?Z!*C]rG8 pak{>IEjI2tap|@+&,52K');
define('NONCE_KEY',        '4i~abp`Wwn/MlX}801.tH6$r5:WCosRZF(N0NmyCc4>wXHvQMla_OMqVMy@S`7:C');
define('AUTH_SALT',        '97d!&$CUbX[.5HmHi3:25xzzGo)t_AmjtN>?2RUh6U*j/j&wRcF)r!]lxN(:ttl(');
define('SECURE_AUTH_SALT', 'oLSoi&83w@=eQ,Nkxhk#IULZ%5~4<?GSzM6MR<#}j_tmJ/Al4ZHyPw5*lP2@m/_G');
define('LOGGED_IN_SALT',   '$p|)$68%r]MU@:u(tE+lrMWT&r8*L0]{+p>`Rb&gSXJRz8 B`G5b;f(M:UQ{@D&f');
define('NONCE_SALT',       'UKVGCpEjiL?-ySPsfLV2,^S3y 0Z<6HmkT<#a7T|:H)CYvx2-VRymuJ^-<;XiM|/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
