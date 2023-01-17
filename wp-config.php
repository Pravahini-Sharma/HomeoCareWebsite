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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'homeocare_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'on=!dk@~cJ_)<^]>P4Q`(K:LM5c&wwj(:9/Z,x_cKl=*;jn6ow*4=/wqp0c6RGo,' );
define( 'SECURE_AUTH_KEY',  '/#H_t4*lOSV`*0?kt53`1_re{bTM)#Y|11{r(mSa],K~;_w4KY1H4qit&H3enk%|' );
define( 'LOGGED_IN_KEY',    'EDY_o]c|+nk%};l6.5x6DCL0~MQAh%oH@;M#B9t}r]}F9l>:PSOP$ Gi9nDkARn;' );
define( 'NONCE_KEY',        '@?&wH5<{[<HRWu-yRT4320!bWBA%2ZlJ{?Or:>NAiqE$}?@D4~E|+#!-8:DsnJO#' );
define( 'AUTH_SALT',        'FZP5}f/esX7-`cH.H1VSH<&9zI/vu%wZ*nHF4{Z%>?JuK0}N ldz6EZPKRwZ2:Y}' );
define( 'SECURE_AUTH_SALT', 'Zod/BhA6(dsDf!`TXAOtYk-LId2POXN_GSQ)Z-ux48}T(ivDJfieiZejoSFAN?@S' );
define( 'LOGGED_IN_SALT',   'heT[q_OE~T$:X>u1vKLZr%-xqo7ib}sSCt}]&(l)F4xTm .^-g_.]z{X_S.Tz?SU' );
define( 'NONCE_SALT',       'V=T=2CV-9) +J_3IhVmuW!n/I4w[@lK@G]hLsc`lM(jjj2.G0q|0f>UTn3Rs=^Qc' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
