<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'mneri' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define('AUTH_KEY',         'L~%@!/|=bJBi;[?sWU]@]<!%c^}|-a;|Z !**@QK[Aw0t$]lW>FfY_lvk4 hGiBY');
define('SECURE_AUTH_KEY',  ',gJ=e<~zP/$8%/`r`Nj,`iZZ<0J8=ITKXEmEeB~s<1H>&bIvI.wxh(lxqhmwqWaW');
define('LOGGED_IN_KEY',    'DB=xK#YTuLEWZ]33sv-Xe2g}DV*WkE.@/gc}t~hK^A| O{D[a]|>fRWHSA-;oB=5');
define('NONCE_KEY',        '<P]>L;/?#~AV_q=B>n[+?CJ|R5/njB2s+VqaUYhXbpypP]WE7M1#laRLUB[O3#-H');
define('AUTH_SALT',        'IY8pl,i6zX;+sYIW[YFbDFO>nz4&)&4hZg++697q6(U%mH?}42ZY;{7/W^AZj1hR');
define('SECURE_AUTH_SALT', 'Uc|MQs++tR%(Jf ^~MaPu~cj{5>d]r1B{>1%q4MBi:^zES~Ey;LvQRBBA!D5n5bu');
define('LOGGED_IN_SALT',   'yZ%yCkTs~h#Q3%T<OA$R-5pMe;0l[smY4jw=;?ght-X_82(j!P9/@wVPW4a|J)=t');
define('NONCE_SALT',       'anM=}:`%h&&-s6BJ9Ks]155+1[?egNwpxuu79R#t}{E<J)U7no|Znu>+3rk$Fm>M');

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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