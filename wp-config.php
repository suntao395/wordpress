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
define('DB_NAME', 'wp_db');

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
define('AUTH_KEY', 'r@IyZe{!/M;h{RTiRYCj%:2rEQm)*X:!6-929LdNuwT|1DcA{5*e{q[8SM>IU2[#');
define('SECURE_AUTH_KEY', '&&2.UB |;7&Vy@6Y4;pI#./-NQ_6mfH[8[h[1Z4dUfOrLcpa0H0h^Rl{ZBGkJS{g');
define('LOGGED_IN_KEY', 'E~Pp=5}e_aM`uGWzDEe8zrV|{./P0<Q_;Qv1f|u$fW`jk3]}Pq2JE@A2.M7`xw$8');
define('NONCE_KEY', 'N)]=-<Ed.1`9pO6fBnPG3*:O<+qtatk>0W^YOX>`~iI}D_H_(maJLqcFnf1lY|>r');
define('AUTH_SALT', '//dOrCO^*TcY(~@}b)! E97f#8,g*^KS2n8#>a9O-<% 9-L<JaFo&`H{z.,|iBP*');
define('SECURE_AUTH_SALT', 'N#?CZAU]ustO.pH]QJVP_oXNTZCpA 5% LZ</6!R)?!839_)sJA<s4 D!gDXvF4!');
define('LOGGED_IN_SALT', 'm6AW^dV]gmyOdNw]3N(k5I(/~g6Oh[&yPdK!RgKJ)WyW(6rr7I04zUk1}8UHNL^o');
define('NONCE_SALT', ':e8ad2DNkB`OH^ezbT6R%W3. uA|>OEP8D]>t33o-Mhy;6Wds.xsYt=|5A9(i;B;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 't_';

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
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
