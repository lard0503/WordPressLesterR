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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '/KW(k k0042gN`hiZCsD[TJTU*RHHth?|j<D,Cmw_J%hWLd>(/m {Tp`8Rupvs=.' );
define( 'SECURE_AUTH_KEY',  '%K[1U9pK{GyU~(Q7r<)x%%0,.V}%7?n:Y>jWNTm3mGthsQ n ol3d/p^t,C4k^|-' );
define( 'LOGGED_IN_KEY',    'O Km]W:8*{:DnEM$w@$[0@F^LO3fRGCX,llAjuK[w9XgZ8zs xf[sBUS#d!gyDDq' );
define( 'NONCE_KEY',        'O^8X}I`bwIplE{K|./lK;(zl$L%7n+>0--2J0<9.#H1P4a|5pPL4G,]yLW]Td56?' );
define( 'AUTH_SALT',        'uPjCQ8NP!(N5>:@%{T%PtX1+M?aUnkBUJw5p|cSLvO:.pw^;a!d%1>Mi$7mdo2wg' );
define( 'SECURE_AUTH_SALT', 'GXSF3VDYyDKx1k~){NX `CzkOdVp?5:F|RD{WPmdFDel%oRjC@8AoR8KM2GCCV:C' );
define( 'LOGGED_IN_SALT',   ';XtR@q6JfmDJu@{3)/x3X:_G}>g-qIM>+p>hn|PgO#7oG5vh?t6budc^K~Qdo~Q/' );
define( 'NONCE_SALT',       'n){Ke8qjKl`&i;hE?bCwmD]g5Wb@_,wq`5i>9PkKdj5<ui@!-c#9~[s1F(`|`SG;' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
