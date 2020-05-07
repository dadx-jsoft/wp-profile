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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo_profile' );

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
define( 'AUTH_KEY',         '<||[B->rf5z,86r8>Ca7Pt}wS]c-Pm}HVB~(add/+{aYvn?0[leL0R-SQeOoRlM#' );
define( 'SECURE_AUTH_KEY',  'o,TNlm*QhVuomT_oVv[wSLeaajI}[W8` @{q>wfcvx+T=B!HIf+PL=r&F!11bybK' );
define( 'LOGGED_IN_KEY',    'AGbmPb:VI!=]FV8_^Od=|~qtb#$,E&1E.hGBBNg;,dQ{7+s2/3 +QGq.-vao`s d' );
define( 'NONCE_KEY',        'YkUnNdpRp^@Q-V<KKkQWV9T-23Nyd:t7gkrj=7-6:nUdsY?miC{yS3fno!xRu^:{' );
define( 'AUTH_SALT',        ';ViTp-#-3RScfQB8Gi^GV#Cs/2{AVzB_jiZZu,D,%U,4uY]E=.`i^5Rekeg?^50A' );
define( 'SECURE_AUTH_SALT', 'E.F;5>2f~SW<%0|RDJFG#-s+-$3_5`;]dtmX#Tbg]$qs+qbXP#+R$/fn~6zO[gGG' );
define( 'LOGGED_IN_SALT',   '72tDpIEe1KDFZje^]zNt3`:a:!{=6KJ~817g%=UAm3JYCpHj2A=,wx=n-cZ QS}D' );
define( 'NONCE_SALT',       '!w&Hk>f<gKqqwfw$^T>(C$Bp(Z7.. ALjS%,qJP-TZTlsQKC3mQMrI/%#?E=5Mq[' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
