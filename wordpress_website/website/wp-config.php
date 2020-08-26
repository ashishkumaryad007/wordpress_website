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
define( 'DB_NAME', 'training' );

/** MySQL database username */
define( 'DB_USER', 'trainee' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Tr@!neE@123' );

/** MySQL hostname */
define( 'DB_HOST', '45.64.11.3' );

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
define( 'AUTH_KEY',         '0b`V+vrn_3y02mn=/hFw=[4FDHCt9oBb].C/~!KZWCR{(Z-5SJ{e<ODX2inF<MSi' );
define( 'SECURE_AUTH_KEY',  '!~;*c=[nck4l8G/W{;Mlku3.iM03cR1$Raq8!*5&=)0M<H?rONaXY$MP| QRKdm9' );
define( 'LOGGED_IN_KEY',    'i{;qE4B`uo-aq`<)`k)Q7{V/HTixuYID6z]Q-9|AT8&PD<~^M>g>]#b/ WS+_Yz%' );
define( 'NONCE_KEY',        ':r,Iwd-uV9dA Mo8D(Mijl._~ /ejvBd_?V/]@e=NHt73^7=3saD/S$x=yp7)yz-' );
define( 'AUTH_SALT',        '5z+`qY72)-pYVGIpWlpb#Qlnks(g>6D7+E~Jt,L?CJMyy4:]7si :A~}1l{#W:Zk' );
define( 'SECURE_AUTH_SALT', ',(|!TXT&GR2{r1vX}fs8r}^W)Y!Pa9*,t<#_1^Vdb!Fyg}Fb-A2)[EUcg}A#{3G$' );
define( 'LOGGED_IN_SALT',   'y:fcBR~R^Ul}ng:_K(H9RaS}B#B?ba85MFXhF|&WdO:sj(wiBQ3C)EuTqn8bxx/c' );
define( 'NONCE_SALT',       ']oh(;n`;D,g{HfG1~}XkCadbDZz>S%r)%7Is& g- _]J4hL/Q3]wN&TjlnXs==JM' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpr_';

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
define('UPLOADS','wp-content/uploads');
define('FS_METHOD','direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

