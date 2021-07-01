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
define('AUTH_KEY',         'OqPRver7eUztKvUaxMddof725ZgGtaDL6n+qAoYEJ/9ChzXqYPXi/5HImfCe9QxxYomYSbjbRgchjvSdlWWW0A==');
define('SECURE_AUTH_KEY',  'vJJxX08+Nrfw5xOFGizT27a9R4IrpQSeR/9zMPPJXk0yokY1gwGMvmscEHVtNml1kpCjV4ZeFW8mtZEuknEEIw==');
define('LOGGED_IN_KEY',    'yoSoG8JToFY+ZeOrwT0GVr1uT7MWSGE+0G1n+9lvKsMDxxj3Uwm/47/3zRhEu9yPN5xKb1HZuETc8kvrQnROzQ==');
define('NONCE_KEY',        'a3U1LrLF4oIA3+W2yRXnWE3GRo16t9fSMJXaN7ZR8AQLMrbtkK/i1nSLTFpwxNMF6hUUL4Cx0gPXN+/DdbzDtQ==');
define('AUTH_SALT',        '3PUECAJwBS7M4U93UqZTzi1mXM9/hOreGmaKwrCTGGZJ1OA9/fx+4HeffaWUQ6KNZLa/YyRSxLmTTxEO/eGUPA==');
define('SECURE_AUTH_SALT', 'YM37Zn6OC4aPYhQiPHV8AYDB65Hb+3j/3/oOcuPkILtYJsjOREHmNtXKxHaZXQnXYeGcck57oqlEUGW77jp8+Q==');
define('LOGGED_IN_SALT',   'IfbqLJjuW7KZ/PsDch06sCB0yrzOCfCLRf6oqDxyqvy+ynC9MS1hoxvLeEZ6VsV70PyOJM2cFxWEjywbfd7XMg==');
define('NONCE_SALT',       '0Ld76IdogQc0iqZr+6CAEfSr5oDki1bcj6mqYJUR0Pe+aL7U5mps5pEii9/gGmK6HTfNrjVOLSsniowbJ6QekA==');

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
