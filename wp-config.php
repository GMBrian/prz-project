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
define('DB_NAME', 'privacyzeker_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'iV&VbsEDn$#d8q8G_Q*U5l+<^4|C*:7*:2BUJ}yos!A>SWE1g-:-GcsN<owyWK^z');
define('SECURE_AUTH_KEY',  '&LtA>.yi!Is_K1p#=.^`uD+l)#^2lV?1te;Nn^>NsSZYDlN;gR2.sJXri>:&NZr<');
define('LOGGED_IN_KEY',    '%e<S#=~RSng= #KcJdzN>SRT#~j2}?-`F816b<]yyd&ok`EWMy+K~#yKoA/GCwxP');
define('NONCE_KEY',        'gqkoM5Xf X*0-<<E[AdZ[2Spii0,3yhgs=JM?k`/xm,Pgj2MZDF[sx@-H!T}dywD');
define('AUTH_SALT',        'eDh]]^nj]Nn=jTV0fHyo9hQ.Cs9C=(=0zWGXKBSMxUIBDY[:sd0<l~gLdxQ[ t:o');
define('SECURE_AUTH_SALT', 'aLBzvpJ-,irz-&qvrj,VFZ,77G/S_^cwSL3=$!2FM#PNV1/0bibm~>P_qM~Y`EU4');
define('LOGGED_IN_SALT',   '{O[Dcg9aq)F1v1hQ`R=3(M-[6F>sc,fzD8I9N2/I;=#ed/B:8=OFk09!C4?J][6A');
define('NONCE_SALT',       '9`V?-.<r|@`,c8|^LIy[7H]@-N2 7bGvVVKkoFa&{n$EQh8}R-N:|R[wmR4vi@g*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pvz17_';

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

define('WP_HOME', 'http://localhost/privacyzeker');
define('WP_SITEURL', 'http://localhost/privacyzeker');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
