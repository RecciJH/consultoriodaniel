<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rechiweb_wp538' );

/** Database username */
define( 'DB_USER', 'rechiweb_wp538' );

/** Database password */
define( 'DB_PASSWORD', '16]7b[KhpS' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'olxhxps2dprhk5erud2xdrwm89cwk1pezyqjm7ib8asdbmcawd2w5vbqbdxxdx7h' );
define( 'SECURE_AUTH_KEY',  'burx5ztn7ameeoxacwa79tqrjbdspjp9ftwgydxx7ced6chy5o9bhylzjhgjwey7' );
define( 'LOGGED_IN_KEY',    'bez35bwvnymfosygzo5d2zkos9tintelfxmun4thxpe618juujymrnmvq2o8u3yt' );
define( 'NONCE_KEY',        '2yvrnd92agfxhepwq19vtw6w0vzqsfn6cgjvxrvlglhun1podgamb8ug0odmnrud' );
define( 'AUTH_SALT',        'hg1pl9ttg9giicfegyecrqmonuckyosc6mh2ljcpiahvcjtjxlpduaasv1awwva7' );
define( 'SECURE_AUTH_SALT', 'r0ztgf9xy05lppbm3nlpsqumxaizzqassn6oamvzdxotuh5ef0jzy3ywzqtaeh0q' );
define( 'LOGGED_IN_SALT',   'bi6a5mtfrqpjxgl6klzoxmp5iathgu6uogzehepufvwlxsmbkxuef2xdbkabnkmm' );
define( 'NONCE_SALT',       'u9uvpwfd7mgy7tkwfcajeztkgflsutxidwnifgmbwgaczial0yepfsyjeavbduwc' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpar_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
