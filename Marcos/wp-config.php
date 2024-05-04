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
define( 'AUTH_KEY',         'Om)X6ig@ua^:tq->aTgkFX^Y~/]& @zf??pH7 UpP+t)2l&aAwT11?//|[?<A?_V' );
define( 'SECURE_AUTH_KEY',  '8sPrF}N,ci3u/SWuAbN;Yr}yi[QJ/QBX5?7.NCL1}w+=<UFyuy.R86~6v[MiM@nu' );
define( 'LOGGED_IN_KEY',    'N0E@sQ}Z`Fp#52Z CC %Lw(E!ueH/n::3m>:wb|;?ogq/&(U0~;gH#7l:,v$46fS' );
define( 'NONCE_KEY',        'AlJVW]*)[Os]-yX=kA]HiC5|<l9|m1us~]<I@,!J,ott!Nh~7V.v@b{I=N9w].t6' );
define( 'AUTH_SALT',        '(PgqSQc*gC1|M`b3l`uYOGC{aI;cK3@<LWc>C1}L<^)imR@6lWU|K5wlSxL=uozK' );
define( 'SECURE_AUTH_SALT', 'J1an&S%gZ_JC}[h^%:bwJ6LUJsROz6@pL#kWGyQilFLHP*.e&uu3he_fI&^G5fz2' );
define( 'LOGGED_IN_SALT',   '^Dt^KPf+.Z[JzQmx-qnw@5#Z!{]],fmgvh2dN|$DwHUp4vl5y6%0mDz[WS[tym8g' );
define( 'NONCE_SALT',       'J]J!ub[ZYk~T-9kM|Grm-}B(]!qU7O(fIvYJKL4k^N)XXSEu1pj*]WlNujrdfYq9' );

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
