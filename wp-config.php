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
define('DB_NAME', 'kigyo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         '4fGcG;linY}{R~t0Qk.VX_E1N:M8[J^:U7,N]Fe,%/1k&~Ux}+7-kMWNp<:]CY<&');
define('SECURE_AUTH_KEY',  'N0.GWh#*p0uSk*,1wpwDlW[L0S[yG#P667]*.tZ?eW4tJsY;OUd,EY9j/vDtBbF!');
define('LOGGED_IN_KEY',    '.Z|@5LwO5| Q66G9mQLgHN,RT.*~D4ujWT[,HnASut6~?:/,9nDukmGBx-( `M+x');
define('NONCE_KEY',        '^Z*iof=mgfb=w(om&Fq7c!wIIy4;YMpou*sK;w0J`0c(MW{}R9g!^PHA@((k_jYl');
define('AUTH_SALT',        '-N|%Pedv5Q}~~W-Bds~PFz*#^)<qi3<JhYpRE2w]aOb(/-n(H4nphomKO0WMb.IP');
define('SECURE_AUTH_SALT', 'Jz>gkHYF|82p|WnX^#WBnF3p9GJ=cAM8y?1Sts,}!1#2%s$7m|`-WP GoL$5M-{j');
define('LOGGED_IN_SALT',   'dEpqxSE=P=ZMMp/.Nkqq`uU 2e0QVl:[[AS~+vllmMtLGqju|hl}%wF4z1n@OUoz');
define('NONCE_SALT',       'aeFYeB0#7~ANDKU3^mR=:?!EYvDmFyCHa;-bONt(Cs6kJ}xV3)6He8LZ:d1Cr)EP');

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
