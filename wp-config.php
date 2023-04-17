<?php
define( 'WP_CACHE', true );
define( 'WP_CACHE', false );
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
define( 'DB_NAME', 'u335488220_annals' );

/** MySQL database username */
define( 'DB_USER', 'u335488220_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'V1#c6Qq#' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

 define('WP_HOME','https://psimj.com/');
define('WP_SITEURL','https://psimj.com/'); 

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '`$:S=TMc[gEZpL*uH%~5i2b=9cDh0Kp{#wNIG7r-kGj*+o[0mh[*PP<:S{oR/LXE' );
define( 'SECURE_AUTH_KEY',   '6bN>lcFmnMfk7Y0)%Lh!.#v(QHq|@ZUw1|u6C{1HK&|]{QA;cfp-xr]3iu5o;.cq' );
define( 'LOGGED_IN_KEY',     'JY->uSValT93GeEI|.NZBjyQ8 .jbbn4M|#Q2z#IGNIh`:?hol0O}yoXn:X0!;tJ' );
define( 'NONCE_KEY',         '*2ouc|^FbdA<(EQ#rXS^MbT>T%#laEROSfD8?Np!0$C@gBCcW(z2tq1ZBNBy8lg;' );
define( 'AUTH_SALT',         'NooAA^1<[4kNtr$8 D;Lqa<W4D }-PON+e?{pwj7pjVg=3`mCYpg*!^|nr|HQRVL' );
define( 'SECURE_AUTH_SALT',  'S4{M!^W5D)7*TOqS{-HHT,kL00<]6YT?MibV,O*1ma;R NrS4.$jzh!(j.}={%#^' );
define( 'LOGGED_IN_SALT',    'M~+yy>]v8%BZ @+!H#py:CTA@mY,WU5`4iCZTT_locbA>6$V2i a,#}:2K8`3yoL' );
define( 'NONCE_SALT',        'Gq!zDPcsf.1h$HY~_(].Lq~`9VYRXvYl;(hNaJH<K/~(.%hoG1zeL1N&z%vr[A5I' );
define( 'WP_CACHE_KEY_SALT', 'i_^|$t$[aeH+m*>_e,vcS-$a~t^mFxO55NG+Gw8;`Q:e%|FM5EB1>sTRw+f+mJE$' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
