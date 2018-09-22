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
define('DB_NAME', 'ryan');

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
define('AUTH_KEY',         '7hNF&8Rj}7/ jDZ+wt$RbUDx_;*2i[l{wEPJKdp?_p3kvFx%.wr)Xk-6wSO!e[fL');
define('SECURE_AUTH_KEY',  '#aD0p> x?g=mX)>{o0jSNf^c9aIlD=zB~(8Go YfhEU!=+BgVzGH%fi<tRO`^n-w');
define('LOGGED_IN_KEY',    '`}2=Lmss.iM3G;{X8bL8CaaS0>7X^WkuRilP(O| %u3WQ%!+eRVYbp3(#3aBckU@');
define('NONCE_KEY',        'nT7@B?7HIdL~@`rdpD8n^QPI~DhO5EAuD2&@9)@K85iD]Qta}yzTMsJi0}lMiI$j');
define('AUTH_SALT',        'A)2yJcDg_0=sEPdZX]5T#3ha]?>KZ9)G`YHbQdIvA-FLtOo~HJ1=.BdHDs=<?OG,');
define('SECURE_AUTH_SALT', ',()vh?JU/dxI*C{EK{Zl5:6,Pt^l;XP>(UX5h^8P5|p>%:-*,m6k^`Ku<EV+z2m%');
define('LOGGED_IN_SALT',   ';vWtN[6.4^;):;}3O$!fkf!R/5G{Zule{Fbj)h._=oFV-N~G,)mIB`g;ux2G.x& ');
define('NONCE_SALT',       'VWX7R):)xh:4HdUf:RTaNgKusG9pV;/-aHpUZ])5!saQ)7/?1?Fb&bS`Pa_KW#Ds');

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
