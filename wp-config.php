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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         ',NB2E,,mWxXYvE/;1;|(KaYTx#kl_HFOV6bidT`Q_yV;0b2x?Q3j+aoJQuYx![&d' );
define( 'SECURE_AUTH_KEY',  '<.#oojFIewE<pP$R+3gL-Q&!:Hcx]^15t%|ew<e]+xsOYbv;ns;R}}hpTWgO5j|o' );
define( 'LOGGED_IN_KEY',    'fRsfJ[yS[7~j{5XFaMOK{SQZwi$W_15YSXbC/M0/@1.T-)ihXAYhI`TyxQfi._dz' );
define( 'NONCE_KEY',        ')Wp#cK0L:Zf@QYjnYkN{mZlK|iFgj>9Tv^-Td5.<<j  o)NcFC?yM5Nh3aEo%YCL' );
define( 'AUTH_SALT',        'C*r@+xG.1;E%1TWzdP]8kTP5a7YO>qT{`GoF$P>0O_JJbBT:4EkaQK,Yg:XGDf9g' );
define( 'SECURE_AUTH_SALT', 'T8~L1m>1[~RyVEQRxjVhq0K5$w{TDE3gAn=0[P,p^-rhs/@A-dIq0rZs|&Z205&0' );
define( 'LOGGED_IN_SALT',   '.b5J;n>Wr$R>wThFv%K8_kcd;ZeOtrN7?C.|r`]2{R||JZq =W?<-:tp]Q54JZkK' );
define( 'NONCE_SALT',       '=6=f[8 WF?FEbO^kf EP$CW.sd:d}^ilF3Fg!7{vLhSpuK&6Z^m~J<+eR>+ww-VJ' );
define( 'FS_METHOD', 'direct' );


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
