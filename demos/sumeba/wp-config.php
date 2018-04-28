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
define('DB_NAME', 'creactiv_sumeba');

/** MySQL database username */
define('DB_USER', 'creactiv_sumeba');

/** MySQL database password */
define('DB_PASSWORD', '//sumeba2017');

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
define('AUTH_KEY',         'LyF7[;HQ=h0KvKO2&#^Me3s^#_&u(m@Bo(Y!Uz<4]Z$&m>X(Q<bv78/S@WjujzCb');
define('SECURE_AUTH_KEY',  '&h&hTr[(4]qBft%[fWe1Y~#%#tj=&>o|$6Q)fn:jf~DDVWSe:KmZhS(t3[.3g&Tb');
define('LOGGED_IN_KEY',    '8F6[I{E%,K v<IqdmqygK)2L,/({E$D})#(7/Z+6#=HyASL9/B1AbLAup_LW~s .');
define('NONCE_KEY',        'l;?+rw:<?f_]g/7Ck-ZzHWG!zvu)}c;o#w-[xgjpUxT[C#H{]:74]ia1(#}fz4VL');
define('AUTH_SALT',        'QS%J~=NUv.JAdB5v72vA65#+Kfh,Ti<Gj7f)N2n(X;04%t 5@ch2py<MLTWEBh^$');
define('SECURE_AUTH_SALT', '~lu[hS;6B<8K5}##:BB9w.=sn2!_Sz:KrvP][C68S.%bB/LLdvnn4T|~IzA5``x>');
define('LOGGED_IN_SALT',   'RrT67#F=u;{/K_$u5|B}kyyBNmmdT30Ro?zY_^CJ>Dphi}Yvo+IFIGzK2Pmw[-i{');
define('NONCE_SALT',       'ngoQwTz3@^M?&uF+l>8_0jLYZ_z5jb%S2dqbm-+&lkMiVxK)v$PE>Kg<_b^:4v[7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ml_';

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
