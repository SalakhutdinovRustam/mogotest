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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
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
define('AUTH_KEY',         'CsuVJyn/hcqBReW07N633asmVLWZosE1UlPW9TycOPD2wt6lokgRJdl48C/ZjFE13hmD5SQsGDAR71g/s39fBA==');
define('SECURE_AUTH_KEY',  'LOeam+VuDRI/Nw3dYDhsQc5hfcizvg39B3A181ecIBJhPPhA5//JVkPDpxXQAQdxbPXV/z+H/XLJWart1tDBaw==');
define('LOGGED_IN_KEY',    'zmUZn/1dJcGe4aAW6hDp/b5P3oYxWmOGsyaFWPnTEa5myrlr8ytBgfvQrVNxLSlkZyecS5O5EqZrj4xvinrQyw==');
define('NONCE_KEY',        '1C+Erum/ASwJWwiXpN7KIc8E+V8gDUzKyRjEysAOH9P5EgbIyrbE2VZP1jD3AImo9LWvIw02EwzOLhOunHf0yA==');
define('AUTH_SALT',        'bximA261D9UWChbEv4HNeYVpa6QYUsjbUg2mx2DVN4rDoFKol52HozzkzetKBDs4vt9eHBVENAkl4U3rwB0LJw==');
define('SECURE_AUTH_SALT', '2gT/VQjbJOQ/d5f6g46Hhr1ZgLZcwF5QBoUtziq7PyivHrTisigVx7SFepodY44Zn43EuA4noL82csT4OSJ6dw==');
define('LOGGED_IN_SALT',   'H/YklY3E3MNVvWlOfRp1P84HMxpKrKtvNrUh0QAD4HOl+YlfPw4c3UIHbugNQczsn1N3vhCT44pOw+h6dl06DA==');
define('NONCE_SALT',       'cbr4m+WfX46Wh52wjDfeDc/3lJ0PSHrw8puIiys3KGDY6/KKrO6bx6MjbE92eSnyCX6ZqAuJ8dTHTDpM0CDzsw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
