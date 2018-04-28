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
define('DB_NAME', 'creactiv_desvan');

/** MySQL database username */
define('DB_USER', 'creactiv_desvan');

/** MySQL database password */
define('DB_PASSWORD', 'nU1MsC1sv7qw');

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
define('AUTH_KEY',         '3#=o^Dl3EE&A[paYU`daY~=YnfM}U>*,=X:M^:7_oM ij})&`+&;M@nFE)zKQ-R-');
define('SECURE_AUTH_KEY',  'h`+0V;_o:vSd)pOfBwop ?>=o&c%uQ5nV{w6,~rE;&nD|W2|:{/dB5~nopY~ rK}');
define('LOGGED_IN_KEY',    'rs4XaFssZ2~<bQMY}MUdG>|`/n[y7!jRLQ,Gk9,F&@yEQK=E*AtB$9NYh)bR2g{H');
define('NONCE_KEY',        '7ENL:S#zWKR_0<-9:Nw$4woOM(|fY#?;8vEwPuj8~i=a5&Q@_If(hKy(6Ojo|Ox.');
define('AUTH_SALT',        '4k>2F^JCO^Cn|4vlGS~B]+jlIl0ycmFit+u@FdFAB!R*6sM-_p&]-@T6N)dRF?OC');
define('SECURE_AUTH_SALT', ' q.YV8uMg|TeeO3D*e);{yDZnIod?G+nZ<>jA uQbfl4u[-FPH,GRU#`L?qF-Y#K');
define('LOGGED_IN_SALT',   'MIGGQ]gd]4FNZ7UJ#Yr87u4){kNRop%A<B%d?=Oqm.O;[3QaBP|^e7-pA7W2}$z-');
define('NONCE_SALT',       'OYkR~g8`,Y!hHtFfs&oui~l.18kZSnD&yhzSeOZ$~xIB&hCf<N4ZOe;?N0O5S)~=');

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
require_once(ABSPATH . 'wp-settings.php');
