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
define( 'DB_NAME', 'wp_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

/** Database hostname */
define( 'DB_HOST', 'mysql_docker' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');
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
define( 'AUTH_KEY',         'B1FQ=jKKgM0Bc7ZE)yv#bhk,WqtoD<m+p P?^e&8F2%;Fr+t$r0|c/LGu8?-PLF3' );
define( 'SECURE_AUTH_KEY',  '}RJ^@%fS !2Sxt7:RykKJi@(LbIZZ{L.Vein|lh6Ek8-7&N+#=>@ODeDTPBf2n3?' );
define( 'LOGGED_IN_KEY',    '-DV,8JCMrq4`^#.qj@Q;ThWsy8Rmk^bsx=rSk5@qb[<A/+4j+*(TUN{(HqwY2jM>' );
define( 'NONCE_KEY',        'jw.ScB.DP}>NVytxAKp>Zl}tzPbnA*CHEAxYLwdG?{mdHe3etX}PqL(<D=RO#%AY' );
define( 'AUTH_SALT',        ':Xo5KNtrdDIyKF0D5<}MH~ng2r@%@kQxgn:VidqPs;tgmfed($O*~_M9YZ3CKm.5' );
define( 'SECURE_AUTH_SALT', 'VNl=R@aB`rKrNs2?l#&M=|s=d9x}t0l?tv&:*OJzv#JjHk%TvDW@,~oS<5plex5B' );
define( 'LOGGED_IN_SALT',   'wt$A>t< r}m<|PVNt$|g.8feLv/2hOs=.>K]5TCfG4:2I;R^@On{TB:^q$L96w1,' );
define( 'NONCE_SALT',       'FS.QdRc8p*`QL-{(&Ueis]3GGBX>rw[g2;f}8J39Mh@H<j86q2XCyj/%]tdp&K>1' );

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

