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
define( 'DB_NAME', 'seas-wp' );

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
define( 'AUTH_KEY',         'A.0U#U>B;(van%ETW#W6($aL6):/0.{8N_!]kA^A}yCZ$!.%r nTgdN,[&e3?8[j' );
define( 'SECURE_AUTH_KEY',  'hkUi$Rf<*+>d?6RoG})YA}%<={T1;C#E|.X4{h7VNXJ/x}JCZ]%*;fC<w%w~O1;a' );
define( 'LOGGED_IN_KEY',    '?MZ#(6|-`jw;gop>zl&$Yt7U_GFDfo*JaUZcC`3JM}2n^IeQC#NLjT%*VNWxNG+k' );
define( 'NONCE_KEY',        'lhblF>)|4z|4ZZmH9^xl?fb#_<8Dbk:3+4ICFzq,h(QP#70_s%p#/X59ITY6`wwz' );
define( 'AUTH_SALT',        'f5]x~_-.8T!EO^z(+))k}Y5lQo!yGSS0aq6]e6#M ]UFhSd>c^<b}o, &yk0^LmR' );
define( 'SECURE_AUTH_SALT', '`PIb&AEVpV9hG^ bkS r>hCfWQ02KAGRy_}W*].%I=%8,c#}m2H-lYf<)=X^prWI' );
define( 'LOGGED_IN_SALT',   '9aDWV_x4)MXq;k.l7QqX OE{})7yIZ{RR,pwi(TFaj-iSm1V3%S#wHT(R?;pz8jO' );
define( 'NONCE_SALT',       '1yuVBe||lESLSw-Y0lKq[]`Iiu/0<;&B q45oj}zo~&(PB?eaN:=/<YAEKr(GE E' );

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
