<?php
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         '+huqQO/bWeIb/FeaNKm6Djhj6UU38DjYmklAWN6idDKTYInhJHckbenWQjmDGhaboKghQnyp4c6dZ9C9WJZ8jA==');
define('SECURE_AUTH_KEY',  'B/2Ev3L6dZrtbsiZb89Kb8EGMCR6ROkw2vCsqeKS72E3VTP7+XbtLevuDXGEmOefi8x+iGXvErDuuQDf7Stz4Q==');
define('LOGGED_IN_KEY',    'renSClWfTpVMSm+XS11SESib4tQh8RYuDMcROQhjWuKdCSN0NucRhwR+eeUK9eVLYiTGx1+8jDXwbL7YKzj4SQ==');
define('NONCE_KEY',        'b8WECBZ2GEFQuIj0YOZYGG/EqbkKZbrVw+4bVcVAWskxPv2gLxEY4m5yhaln25tgna5weubqMDKwgiKZJ5TD3w==');
define('AUTH_SALT',        '/1lD0sSHWY5+9V8mmNIi55P1fmX9Tm5UbC+Td+TmkwbqpBtVqmc7uawtZIv+BkLTArXhI/7gEoQMwnxyKXfuRg==');
define('SECURE_AUTH_SALT', 'WDHxT76XUSrQXyKh0qGIAuz+hNDyYNlpE4alEfcTCDX2Hnz1eNKRXjwfZmeaAy3heRJroPGxQvuZGRqXlSTsDQ==');
define('LOGGED_IN_SALT',   '8pkEjpfTn61UZILxMiWdtviFPYq4UUSIIZymF16fnC9V76g75CsGuKgh/H5/y+eaVmageiv9sjyEMsKENfmFmw==');
define('NONCE_SALT',       't3epxGOq662OZ954E/k0QWSvArS8M98+F+mA32PwDMhqI1tmB6zSNcp28AgNhbNcoT4jAqfPnH2mF8QqhVY6JA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
