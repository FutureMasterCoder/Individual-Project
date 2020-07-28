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
define('REVISR_GIT_PATH', 'https://github.com/FutureMasterCoder/Individual-Project/upload/master'); // Added by Revisr
define( 'DB_NAME', 'caplcezt_wp213' );

/** MySQL database username */
define( 'DB_USER', 'caplcezt_wp213' );

/** MySQL database password */
define( 'DB_PASSWORD', '9]S0.Q30!pq4-A' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'uygkn85zlwkcicdhlrymqnng5ew6xhdrp9zxpqhix9lkvjtkxvsvznzlyxjrqod7' );
define( 'SECURE_AUTH_KEY',  'nqouuhkfz1np1g9eigyxmlks2rkrtqxhrd3ezcqlovqkhuz5admqt97hjcqd4tai' );
define( 'LOGGED_IN_KEY',    '8chmbfgwfnrxsomaa4hixpvmf6nzlg72kp0mcx1vmgy5jxdr3ssryxuq5dghforw' );
define( 'NONCE_KEY',        'om5p9gl6hopl4pqaeoraq1zljirydjghy48wg6ndgk03vee0pi9avs4rc08v7jye' );
define( 'AUTH_SALT',        'f6ykowadpd2spykjakmor6pnzfbegion3joexomobenqi1bekree7ksqmlndzitx' );
define( 'SECURE_AUTH_SALT', '2q5c854ncbxv5prqymlaetnbxsedi1zaq22asdykw1ftw98iatsqwxmmfte1ort2' );
define( 'LOGGED_IN_SALT',   'h3lob9qku4njn0htsigzmlfddn208zd2lll5dgm6eub46vfetivin3svyotrynzz' );
define( 'NONCE_SALT',       'cbpzddyfukfm3gewpb57j01wsbsqqmel5zf1h6yynrvav0i3ooiclavbquiftli6' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp0r_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
