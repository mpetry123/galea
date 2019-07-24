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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1XoYp+3B4RXjvgpSxWUm6/Lu5pK2EVSNCkrLCXEfXxqm/Cn2MIeKayCDmBW2xiV3+/PRF4irKoXUqgGlmfwJlA==');
define('SECURE_AUTH_KEY',  'xLwjRS9+sop5bij2XtBhTVwsBIAg+oTYEyGmD5ySi3swtmIuXLPBbGJGk37FdAMY1NJmMsvuurcYUtAP+euzCg==');
define('LOGGED_IN_KEY',    '+2/Sk3V2UseyBSMo4Kr+XfXRbfyBdvodZ/lCGcvfdnJb9jO6qdN3PgXNgLoTlTza5DixY9Ays55YQvd9vpfcqA==');
define('NONCE_KEY',        'GSwUleWAeLqMEiUWHNkGfbpcfjyYG6Owbh/Tk9++xPQwKL5PT8qz8OIuuAVwu3PcQMkDkDFc0wQ9PMzLs3Cidw==');
define('AUTH_SALT',        'RAoevqssn4W5dVxClYjyG7h+/5LaukG1ukJQmbnZ4RY9ldTGmvN3QtMSPJ6/K0xnLXC2GrEtFgM1al9QAL6U7w==');
define('SECURE_AUTH_SALT', 'ZsMbi01bPesz36LCAO/bIgnupFYnFULivFkjIJwy8acfLbinuR9z/EV6IVos2WmAZ5GHT7vqdTcQPsuXZPWBlw==');
define('LOGGED_IN_SALT',   'KU41TkBzaC6aTTb4WKguvFGXkEX41BzyDOwr6E/fpAibHXhC6N13p5mGYN9puhdVMtKtDr8AQzeoeyhybKXeXg==');
define('NONCE_SALT',       't3yuKoqGTL02CjhnLrC36GFGy0RnChZTWhmNxX2nXc4+0FRUwJSHdrcsa8Sg0SYZPoqKvECG0d/zaNxfsU/Yww==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
