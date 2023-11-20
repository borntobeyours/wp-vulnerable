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
define( 'DB_NAME', 'devel-cylab-demo-va-internal' );

/** Database username */
define( 'DB_USER', 'devel-cylab-demo-va-internal' );

/** Database password */
define( 'DB_PASSWORD', 'Ay2KpQ85j1M1xWQWuXWD' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3306' );

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
define( 'AUTH_KEY',          '5D-G?E=Hv%~Kw7u88R]tsu=lJ}iD C|V+b0~ ;]1*CO|$~HFk]OH-,~8zQEfjd6<' );
define( 'SECURE_AUTH_KEY',   'i!#YL4xuI4O*%Hm>i< si3.ODOJm(<8_}tZuaI.*A*KA 7h}pS!&GF!B=0n I3?U' );
define( 'LOGGED_IN_KEY',     '`n+P=B0uc[.gYf<:$zN&&4@|2_B-!A0ie `I.KR:2/,L~M~Is}JbT!6DT3J|Q6VK' );
define( 'NONCE_KEY',         'oM82FmFjM7[Vx_)JX|]hN*G{?}KB*%x|CD{w8XV$L1|fyFCtj}:c^_M[EmfK$UkT' );
define( 'AUTH_SALT',         'GQ7Y<Qs4mfw<3 F#k@4Nh-e#*-z%(ly/>OJ^`u&U6 FkYx5JuW7p7|Fe3/Fhe97E' );
define( 'SECURE_AUTH_SALT',  'DRP-zuBNfQwrK#NFyH1wyR-4R X_(eaF%H=m>ic&:Ulf~6y.i?a#BKQNb{;oe)[v' );
define( 'LOGGED_IN_SALT',    'I5J%}:12*)&oD2$AFs8SyscNJ}LL;Y~9@a^<+,MFi5U)Fm,wio9IoVm/b|B5*:%W' );
define( 'NONCE_SALT',        'R_m7HnC;)h<EJZ@`b0+tY,<:<%B@z~$NdkI)v2hF[TY2#Ir~n`[=f85(+.B).Dm{' );
define( 'WP_CACHE_KEY_SALT', 'TV^NC+):[&smk j{m-8-dl|^tmxm~%-y2<c3oCbYDR+?GYP8e&U 3UJPy/%}!k%1' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_MEMORY_LIMIT', '256M' );
define( 'WP_MAX_MEMORY_LIMIT', '512M' );
define( 'WP_DEBUG_LOG', true );
define( 'CONCATENATE_SCRIPTS', false );
define( 'AUTOSAVE_INTERVAL', 600 );
define( 'WP_POST_REVISIONS', 5 );
define( 'EMPTY_TRASH_DAYS', 21 );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
