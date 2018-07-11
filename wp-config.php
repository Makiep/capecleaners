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
define('DB_NAME', 'capecleaners');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3aI@.5B?^p#Py@JHQsQ0X_M9]D5J4nN#-$ i10{Q,Lyb 8O/#@<bN<J)i-1${>2@');
define('SECURE_AUTH_KEY',  '_dwGjV28sg4k7P%sHD2wn<CE+La;yu?G|!08<M42ER_[y^bd;1a$#./@yP~+mf6a');
define('LOGGED_IN_KEY',    'C@K,n`jw $kx9`Qo_qt2{.1_lqK<cE:)9lb%RNb9#S=jA-.Nj4>Qy[VoU>35p6y6');
define('NONCE_KEY',        'TeTn[nCFLpPar-nU:Q?}z!426X/GjXji7&kUu.>x?0k:k>EZd8VFM6J5@/9c7lg*');
define('AUTH_SALT',        '+ZitRET:Y~GTV+l~,^97]Pp=Ne~v}f,AB@_xInh0$$&/L^W`HR9EP+(g+.R4F;h5');
define('SECURE_AUTH_SALT', 'oo&r=.g=bFE27BT?9-Di/E3JH2^T*G&.*QL#(^I!.,0P~YA#a^+Y1;&O6}.fG*Ni');
define('LOGGED_IN_SALT',   '|Q(/}46w:>[u)KBzJd<*emm{x|kiE d.FKN!8USTA6b=;dM^&v5]; $<u-,d*V;?');
define('NONCE_SALT',       'H`qv]&Fz}rwrdXPB^= ][Xu,,>4~w7Ts%FkYI8N*-FrM[L<9x<^98ImXnf{B9)K/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
