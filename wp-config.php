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
define( 'DB_NAME', 'gbstudio' );

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
define( 'AUTH_KEY',         ';RmX78{:%62g]=9>xJz#.#ce,0$4 lcg-Uf,lSAg; F(j>)I!P.r{hN@d]&PE%S8' );
define( 'SECURE_AUTH_KEY',  '/@bFC;!o3UQK 5ZqbcZEz5xG=o-n6M5R+tXI%KFQIQ(h^;+Z3*QC1vln:SR#(Zh!' );
define( 'LOGGED_IN_KEY',    ',wze;f.B{AxI^3?m,h[`wmBYN5|rUgjZcS$ };d#KOk=w#[)ei2$Smy$A6$KRr]e' );
define( 'NONCE_KEY',        '4:(+/v1#94q1V>lGtJ#y2M~OcYTAO/RY)JA{4>%nOKxQ~uR4NsC7xAOIw`eulEp-' );
define( 'AUTH_SALT',        'KtlL~^._h}%^%k^9pqeNk*E88^2hG| )&{><fFm5N9 8m0shX(-E;|zu-wmz}d7h' );
define( 'SECURE_AUTH_SALT', '8]hda}cbh9~TKO&7I3L4^ DZgU:FKFi#4`g)6k%;-a0;61TIlR3epjk79jyvWTol' );
define( 'LOGGED_IN_SALT',   '7vbmiyRE^HcjdZdJ~&SI5`ED)2.x2])n.EUsHq_LVSMN{UosR`) {m`M/ btv/O<' );
define( 'NONCE_SALT',       'N&TX~P)GVd}tj_z|&JR{_(_AR1m;c/7>S=c@ChuaYTT61da,R1N0z-_cWJ3nzDx_' );

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
