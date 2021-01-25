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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-?@;4zr&z_;~H$/Cgv=}X@Do ^#<NZ|n8@h_%S#wo?ITX*lO2}YKe!P9hfp(%C6T' );
define( 'SECURE_AUTH_KEY',  '[ JF[N[k#6+NqnM)FmM#$mu71+Mz*LthpXpd`542JWF1Y)+H)c^#tN,+y$li:k3K' );
define( 'LOGGED_IN_KEY',    'JI9&02kQ]h#tFp#-6B],`flUU_|}U>v]1feCGYEfp@fd?tQi6:[-xCdiba@fV34e' );
define( 'NONCE_KEY',        '7x!|8@~iWzmAZwPq0@Xrpsdq}1EVNrA=z!O8Z9?>[KVx:7hN@73i|5?q:Gnj;X&i' );
define( 'AUTH_SALT',        '^iIGqIV0Ks`Fqq+bB- !E*Ic$HF=gVbFTqnJINBf*w`sC-TMKwMp4C&DfjjNG:)E' );
define( 'SECURE_AUTH_SALT', '`.JO&@u0OthGLf)8n*cm=j~9 /MX.>%KxFMY~`_#0EXkZD,g#Wux.&(__5q&sAu^' );
define( 'LOGGED_IN_SALT',   '5Q*<odu#[-]lB)/p!Pli9K*=S6N~}vS&z4weuYZOxW,ECQ/&>N=a*Z6H(iISyWf5' );
define( 'NONCE_SALT',       '^T%C`{:>#UM:#y+TF#s.1wAU>;w;jHO%~RzPPPpm]|nK0,1B^Qo]^q,r|7y&.uQG' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
