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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'C|W@?! GsC<J_k/.JxZbGg$v]+Zs9T@ r[HfbI1~O!YO*2OtfLS%2ENIf43$|.aj' );
define( 'SECURE_AUTH_KEY',  'emdY=RN&H^$qjNoT9eSopg4WvTyugTiygF}M/Y:QY5o|__g%4r/LFxU=!dlZUzq_' );
define( 'LOGGED_IN_KEY',    '{v9,]F5$vMLw_!P4IWLafA|McW.1LTKAJ79)>fo:6,`seS[=#:XCy=p7vkl^?i==' );
define( 'NONCE_KEY',        '32$15$<%Z& BMA!Hwsrz*Ycs5`4#mdZHKo!W&MStNDWa?i;JY)JqirH_x?E$xDkS' );
define( 'AUTH_SALT',        '>k/T 4c<B0y[6dr{8u!NRM_uIrXqdyA}9=kG>n_OVNK@YUgC}piMao;]Db|0,/_M' );
define( 'SECURE_AUTH_SALT', '[5`m<3iJS0YhEtT7;t OYu=xz{]/>RH$al.hggR2,*:T~IvmP84lz.qXL?C]^1V]' );
define( 'LOGGED_IN_SALT',   'Ld%JrTqNN;gYp(5o{_N9sj1p[w46.Tpj7Z/ o8eco9^o=d:K`}ErYh`hL5?rL2k!' );
define( 'NONCE_SALT',       'YCOx;OumS%Uy{s/`;_-@t_HSRWI@-~:M5Ayy+:_kT{0vS<<ZJVC}Mb`>a<a[ Ck{' );

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
