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
define('DB_NAME', 'ngocquoc');

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
define('AUTH_KEY',         'r?CsigD[BK0Oy=ZU3k!hnAsvWoO8&Lv~YcdZ%(h%-o43bbA]V%`Iz4,QMAv~=h}V');
define('SECURE_AUTH_KEY',  '0;t5+Pp-rh}kE(*^ghc?W?,,OMX .x27Q@81Lb<=;DhoN?+h.!`1yN;?c}>:k1:<');
define('LOGGED_IN_KEY',    '-smVODna&L*@5$U8ZWDu8k@]a2 rWNVE3_7l0dIV%UCXBTB[r6$da_G!QMv10TI<');
define('NONCE_KEY',        'lK?N`TXDi%-~D?b4ETjzqiDhC1v6,em/m*yO8ju`f 6D4ih6&>?j9Ho%ugL~C @G');
define('AUTH_SALT',        'OE!$H-,LVayWpF5cG{uYz=fk8sY0=MSFUHE3u!R9C3ADAB<.E8ZrH?%eP>f`.aJY');
define('SECURE_AUTH_SALT', 'L#/,fOeWF[;`7K{<+{Bo}KVXDo1@:3doh#MLV6+G}o8cCN8vT6{LJ90l,<kI0QRS');
define('LOGGED_IN_SALT',   '+iMf^+g69TnOnMcu_iaQ$z-{/Qe*?{{B@1$4R=<0V^Qqr0KKoXe)hj^=~YVJ0B8p');
define('NONCE_SALT',       'p|NG)m>knM:i5I7c/9bq?q6B6vk(4)/cm$0`5I z<%U,scFwJ4+VSX8aSS56Fqe,');

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
