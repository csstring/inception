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
define( 'DB_NAME', getenv('MARIADB_DATABASE'));
#define( 'DB_NAME', 'schoe_db');
/** Database username */
define( 'DB_USER', getenv('MARIADB_USER'));
#define( 'DB_USER', 'schoe');
/** Database password */
define( 'DB_PASSWORD', getenv('MARIADB_PASSWORD'));
#define( 'DB_PASSWORD', 'Tjdgus8246!@');
/** Database hostname */
define( 'DB_HOST', getenv('MARIADB_HOST'));
#define( 'DB_HOST', 'mariadb');
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'b@@|C6z{5+&dZu?nH]$i+u|j}a@H.{*d|OCf-EzUGT}$ozoraeg3hb|lda.pXm2[');
define('SECURE_AUTH_KEY',  '39seEmV-0?,@c[|o;0<0fm4!n h,`ou9]y3T3?!N<f*:RMuWrVuFVFPis|E.S,VV');
define('LOGGED_IN_KEY',    '{3-|*2+iwo;L?3+2F^Y!Zk;DU%:+s*ho[oDJ?pDCnxtL(pT0_JJ%u cyCFjHq*nR');
define('NONCE_KEY',        '+,F!bFq>t5<xTU|Z2e7sRsmKxPJ|dFtrL,B8=68G-<EC@uE^X^0]eD$e7QjkhVWc');
define('AUTH_SALT',        's-,jU#vWEHjm2Li+pO:O?N3F/4]H<E?Om8Ogxz)?+V4_eZ4}+?d>Mm/2 i@@sjvT');
define('SECURE_AUTH_SALT', 'JcV$Oa;l;%s69,kwO3nE]${c8bg(rQOAmT^lS2md1Dk0e*tJSpR4tXl#X):=;LNR');
define('LOGGED_IN_SALT',   '*`nz7V7KAc!P]Y`%9`k[-xb&W*k|Um$H-?L>|SFg_/B=*=(@UB0>i2.z`*&FYH#8');
define('NONCE_SALT',       'zkJYDag~K1D+uYIH%s !y6YQ9-U13*+81P<-p2}^l[&~Y.9x(DCj9;-?*PCavY`>');

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
