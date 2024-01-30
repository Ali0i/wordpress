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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ali' );

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
define( 'AUTH_KEY',         'IGh/A98oB>7q[m 6*b_SlDcJLJhg_[>)D8LVgm)<|N21rIigsC>FMQ^-N(bxH Gf' );
define( 'SECURE_AUTH_KEY',  '!#OG^cE7s?>r+MLUGAln[77gh_:LeSx]=EV$4b#(y Voc%#:F[i5[JM^%SP%iWva' );
define( 'LOGGED_IN_KEY',    ':{OZ]WO0v)axP[zmO ksH4~BQQ$CjVE>Lao[a9QehV;]ZcK*__QK_]u%Oiz7+`t<' );
define( 'NONCE_KEY',        'mOTRE+WrI7ioYusKH|r9w<F(E3q}I6U!>9zU90?0+(CrO(ts[ j!^vV-iPQiGdPF' );
define( 'AUTH_SALT',        'S6CEnnqOt5.X_ZIcs!2x9ISX,CTZ+eJCWdZgXGYt9`K{|~^u9*S3LYab0LI/#KB5' );
define( 'SECURE_AUTH_SALT', '*J@(]/$eN =d7aAYp,gyodNJK?j,<`YW~edM!&kHb 2:,<V,`|-q8c/.;SG[a*|`' );
define( 'LOGGED_IN_SALT',   'b}:V#Io!Lv.*[5SbqrZ)oC+PnFIvFr<@? @yH~yj`#PTk:Oc:$Dl_a/#V!%:Qa,r' );
define( 'NONCE_SALT',       'o#^i;@8Uks?r14D@FapQ3$pC._LDh8wV>!yxt?R0+`]9/6Guky2;:Pt%IjZA3Jj/' );

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
