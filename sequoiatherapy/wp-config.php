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
define( 'DB_NAME', 'creapkxk_sequoiatherapy' );

/** Database username */
define( 'DB_USER', 'creapkxk_sequoiatherap' );

/** Database password */
define( 'DB_PASSWORD', '3FIzrf3ZQ;#t' );

/** Database hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         '#1PcV?jquD[>s1I|[2d+Li7MpTG:@Y)4yeT[+7I,bmjiaCEsYO>XJ#Z;qw_qM70.' );
define( 'SECURE_AUTH_KEY',  'f405SwbED};w?2.YN3dX[CK[W(:CtHS*g@o`vPBF96a_8pq_?,.2ARX9<!|gr6+P' );
define( 'LOGGED_IN_KEY',    '@94pu^2 |M>CV>cMaf@DyW)p_KNx iB*4? Y(JjS?o]$|$F(YbwMWX)-,v[#d@qj' );
define( 'NONCE_KEY',        '{D^(EmdX_+?xvB)D&-3+FVj<9^mxJE`~WfrX|+%.uHSf!g`~#P`?;=95!<] r9d.' );
define( 'AUTH_SALT',        'Situ7#~1OE^_$fbE#Igkg8yXSSeAD=T?Zzm9]HpC]x.KX$:8%e_$t%_mCEfIFUEq' );
define( 'SECURE_AUTH_SALT', 'O[h?HMf<6.x@8S61_%~6)}R|mJ~%.@MOr_iixen *MH:r$;@IB5s@&0?[7+5S`P:' );
define( 'LOGGED_IN_SALT',   'J2G.3^O2ReLD,`m_Yq+;1CJ`I-]F69aOPp@Gq}B+Sl]+F+6%x-$ZQrV6Qo>&:~e)' );
define( 'NONCE_SALT',       'Fgl%Mu[uV;wc)WuGC2;p#bt >C1^]fe_ HM5%&_!:pa4*)Rh&ZIBd?iu^n~6/B@J' );

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
