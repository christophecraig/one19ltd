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
define('DB_NAME', getenv('DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define(
    'AUTH_KEY',
    '$gO]A}c{@W,@ ;:VF=H8Yl/!?FRCan-V@~:MHG|%;at~%*JxJ%)OUB-=l|}s~RX+'
);
define(
    'SECURE_AUTH_KEY',
    'Ty_qXY7?fJ8tjBE4NF^3Rm0T)b:}GP6Q_R6|E-2)7[!t+*xBIS:$?@o<}]]D>P?D'
);
define(
    'LOGGED_IN_KEY',
    'OG*ao<Sz&dljzgfECP6aWCb;vz@8OttX*72XGJJemBOQC|olkcybHIRZ%[S&Vt$)'
);
define(
    'NONCE_KEY',
    'd>cT&v }k_fnnmriu?hW&mwn!hS,=qiG6T^2aoyjA%u?k2~/2hLY;]!,5#7B2#C&'
);
define(
    'AUTH_SALT',
    'u0PaL}Pc5!:e01@d5,w&HixNoX-@^%2#c8zBgUer^)BmUM)uxRH*E%l9rbQ/KP!c'
);
define(
    'SECURE_AUTH_SALT',
    'QSc7~+^51fQNn3J9~, ;X$Serd=%2c^j,B;;8n.YD#yh;<FF:<AHrxB;/@xv!^E9'
);
define(
    'LOGGED_IN_SALT',
    'c}6l>?l]d4+V&Y08I{j(dPRg.IJjRyKw+P$%Z&i?YlBscFyK$3M8;`vNG-uITUw['
);
define(
    'NONCE_SALT',
    '1NZDBCl[@#P/%^tAK[QTJ5zPZ|Ye:4@1=6g)iONpd1CotuWu?{<=IEV*;S1M_Tn>'
);
define(
    'WP_CACHE_KEY_SALT',
    'r.$[mD]E^:McL&J7xoq)P`5J9`7[C(LW!swIP~21&vxW}i7jQ|c{-A~ Xf&wLVm3'
);

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';