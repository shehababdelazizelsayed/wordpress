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
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '0j=_Db>T1aMq~o=B@&;J&p.](V$!?`!vP_:%a/?Q$,}5h@7<_;K{;lj*`Z>X>I8g' );
define( 'SECURE_AUTH_KEY',  'IS:jZlt`Uw~Cr[V6c}z1[a7L7-e?->ZAEog|9H+(Ua[J_02)Z ;G U~x#vlXM~FA' );
define( 'LOGGED_IN_KEY',    'dC,I)#/@*lN)=18!c~U^D7)Z4[)^,hDD/^di~-h*f{s.34GSGQ)HaKpfVNHx<c%#' );
define( 'NONCE_KEY',        '+XIn5p+IamRF5g1lqnIIr?!Yn$ePPt92cq]7(uu/B)kINyXGp29;B&NOkg7|9Lwi' );
define( 'AUTH_SALT',        ']z|1wRuA59?h& [URN-Jx.gr3/daQqtlc 9KyIo`m%-Z8AQiWUFL0QZ,|1S=e6+L' );
define( 'SECURE_AUTH_SALT', 'UePhl%/RQ!?$Gnxf!o>#K(AT.^FzCKekPSk:+q^}FOO{X>1HSQ(%oAm6N?<pp>? ' );
define( 'LOGGED_IN_SALT',   'heIZ|4. <d7fz);E$8V#`,jZ#GPV*C0*FoXbyrK!3aykT{,gU-5|-^Bds#o!z5bY' );
define( 'NONCE_SALT',       'NT9?i79WDrh-&bd+-u:f*=y/;,M&,^<1?9Vu2-?_RZm3.k(`(,o[ yPjjxbIhcJa' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
