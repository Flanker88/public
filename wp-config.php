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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '=Ez>hai)KV+zkd?65P}v7T$U?.1wH(|)d`,^7H~Mg?I4JRC}F)4gMZKs~yS4R.HY' );
define( 'SECURE_AUTH_KEY',   'w,=B1UDM:?#yH4jOr]J,zU-|}B&KBkml!PJ|S4<<ua*j(!DdG/lzbt&+B-7a^y)K' );
define( 'LOGGED_IN_KEY',     'U?EvAq;{_|t/qP,IKan:#2P]ZL7l8Y9A=TtP;<oSe6<[+Gs+S=Xyr9QNIq%tEr]L' );
define( 'NONCE_KEY',         'GSqu;$PXkkZf518I/iKG9bZ&ACtQ+&okGieV63HT.DGlLc6UfnA*Gl5gElBD?Xm2' );
define( 'AUTH_SALT',         'KJ{M^L^%@sbZ.kqCujcnhut|`JpOY3^)~d>bE57O{v5khiq]Q+~WP/gC7,[5/!5m' );
define( 'SECURE_AUTH_SALT',  '^uw~ cg*nUAHu9zL]SGv+v]]9%]c@t? &U8hQP.Ez 3{C~9T|aC*qf5b63ie`smU' );
define( 'LOGGED_IN_SALT',    '!-OZE=IGOM tWmcU_on<o@#;jUO(|4Si2SScUuZ@}e>.xJ[gX|}nri+K&e}G0q5]' );
define( 'NONCE_SALT',        'ZC:]!3Z@dkVz$&<e8F=@@9K$I,1E9ACsaDS7+Ar@%LBz}?*b#w,=[A^m|W8_VudF' );
define( 'WP_CACHE_KEY_SALT', 'DEVN)op(0w?dEX6!<KWra@RWZ:%z[yi<XQ+$C<YCtH/~-c3E*Hp-tBl3F>:<bU<r' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
