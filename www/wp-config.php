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
define( 'DB_NAME', 'sindigraf' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'B>&lH7&2tHdyFE]GnXzJpncK-lCebA5b<6U^C]SF,,cbYHtW84j;5`r_.uB#njke' );
define( 'SECURE_AUTH_KEY',  '3QMP{mZu^{d7jiE,XBA2AEXL=(Ck{.^hrBLEqgLW^xT{ntZiE+4J[enXDg$>0{ba' );
define( 'LOGGED_IN_KEY',    'e_xBVGOAyRlt6or%LIXUBTpB[:|]S3LuCFHM<((@wfu>9U1!Gcl#Upw7xY=wal/^' );
define( 'NONCE_KEY',        '^x(nR;}[>l%+:&!y_FO!G!m;/CkmQcEXJI6;`7@n8}GbL}7K(5j&`%sZGZ73did5' );
define( 'AUTH_SALT',        '] @EnBla=*A4er{j:;][00oh&w0bPl71ni{`X@oqJSwq@Ww0x>4i5sIiQ^)$$?%.' );
define( 'SECURE_AUTH_SALT', 'o86YRN+5?=>Lx)G%;I6?@bW3J.@Or[(:C9afe&.:Qydu$:r4@9c&N><=G-xsy5mB' );
define( 'LOGGED_IN_SALT',   '.D}Ab6J~![!_Cr<ex7/Hr^#L%g!T5X-9spYA*~ycC4A$CXyu=Nnv:N`U ZU|2a4w' );
define( 'NONCE_SALT',       '46.d~ww:&8PqR$wh]eafR(.;n#t`m3WUvQd8&N}71M0$f2->NYYeAdLT w8J>V(}' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
