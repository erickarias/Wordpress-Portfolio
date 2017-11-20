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
define('DB_NAME', 'wp-eastwooderick');

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
define('AUTH_KEY',         '5wfoZRgxyr8Yg24YspgSbSe1vWY8bA9vyIs4u3tjeCp6UJw8L9NvRliGfmvrpE61');
define('SECURE_AUTH_KEY',  'cBMHAJLDdTlzeeX7GgxOtTCi8OaRtvu3IPhrxr7VGOhBZNIMceAvHQTF2rjStYAp');
define('LOGGED_IN_KEY',    '0mn2tN8A5aeAfgyMuXuvmRT1BtnspPXifnl9kXuvq8W0EuMg2GyChPTl2qGsZMgH');
define('NONCE_KEY',        'bU4osVcb7VMhZmQSOWE1sUhU6ebfC18W4eUSXXGe4iCROVqTZElzY273jMbz0bDP');
define('AUTH_SALT',        'Vd2EjW8mddxTeTf4ouYQwxpZaJPhSgAXQrhtJjg6ilBql2uAT9gXF1ir09oD0CAN');
define('SECURE_AUTH_SALT', '1iUyw9hjyC9s56SfSF8IlxlMC6mKn3VdYRy7ePnPWlSxoohbQOAPNGc4sX2XFqfo');
define('LOGGED_IN_SALT',   'iDk3K7b1AUDb5iLGbQqhK7NcFiQY2fBOz3pX98Vg1sAgeg7MNBJgKkZKTLYybcwx');
define('NONCE_SALT',       'avvTwrgujxxqu6LFwDFN11qgKEDewvC6rLxcLmnqKG2gb1cY1caejHc1dHeGx33s');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
define('WP_CACHE', true);
$currenthost = $_SERVER['HTTP_HOST'];
$mypos = strpos($currenthost, 'localhost');
if ($mypos === false) {
define('WP_HOME','http://erickarias.com');
define('WP_SITEURL','http://erickarias.com');
} else {
define('WP_HOME','http://localhost:8888');
define('WP_SITEURL','http://localhost:8888');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
