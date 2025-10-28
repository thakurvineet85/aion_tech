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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aionwebtech-db' );

/** Database username */
define( 'DB_USER', 'aion_user' );

/** Database password */
define( 'DB_PASSWORD', '3399sAm#' );

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
define( 'AUTH_KEY',         '%FciDfXxGfM2I4t2?;uM{o8zQC=L,keq,YBBpV5TZdP6,q?/FMt?wVYY^1_;&Z>c' );
define( 'SECURE_AUTH_KEY',  '_F8dG@cL]Ct+0+uWLe)2Nr02=:wGUY&4y!lk=<gn2NkDg%PH0E#%BO(l4iw?2aye' );
define( 'LOGGED_IN_KEY',    'hhNR]f$l&~/UOLWfW/X54C;q.[]wf53]%g1rcNn^8W^Pla*fNW2&$9=Xwv84WiR>' );
define( 'NONCE_KEY',        '81BiGhryyztm]9)h^.n}}D.{361A-yA6+(1/tKDsx1QV3Hpl|-sh%Lo(</PaWJ0X' );
define( 'AUTH_SALT',        ':tRSPZa:4Iwp?e.AhKs:[oI)bp^JWxQIh]xq|:h)yV{2;*18(p&X5L%(Kn2dRzJs' );
define( 'SECURE_AUTH_SALT', 'ytZqc|F5n h<%:6`pg5u{lhfMOq^&meFF+-Mmf!b6=CO)hybqx7<Gb?A!*uM,9sR' );
define( 'LOGGED_IN_SALT',   '2WqMLe[E!f#`1VmRT}^R^(LDX,BR[`;9_9pFil*VqAb^RE`4C<H0D.0BWmWjY45q' );
define( 'NONCE_SALT',       '* &s)+[$5$`qT?[=a$&W_uYh9xVl^VoI_z*(yFP=6aw.~MuGEG#+9iO/x6l>w<~O' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
