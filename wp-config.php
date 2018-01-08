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
define('DB_NAME', 'db_wp');

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
define('AUTH_KEY',         '%jM.]^`/lSB(r[bO%Fa^|;fz2PqT?d+1fY>b?<HG}U{#)F#M4[-ewa{N.ZLfnA`E');
define('SECURE_AUTH_KEY',  'fTv/n,Xt( 2tGlG&;_)aXkOy;Hu@!g.=w/qv`)YrFb2a{Kv1*E3;tl~+|=dz66*0');
define('LOGGED_IN_KEY',    '*0@V%]<Da,?VZ ~Svdqz8vF@RXMhp3Pb+yE~9Ao]g-w!gZj3{g6gIo#BU<y++;)/');
define('NONCE_KEY',        '}QZD`]O6pb;T7:LG[>/e@;lp4O2Sl:(m2PzAcfX&>Kk /=;b&F,v08>k>t{b+L#%');
define('AUTH_SALT',        'vBwmBg3h-$3ev]?88O5:inf8&d(D?v<{>[UdYB`+tv@Bf@7fnBtXdhnM0N`eF;A:');
define('SECURE_AUTH_SALT', 'ag1A9fL2^dS i;@vK].LMy2.uIdCXyF^+g[C_z|@lJE(7hp%Lr<t3=uBbc%wLnva');
define('LOGGED_IN_SALT',   'eWQ{Hy8}*k,7|-=Mt`E*[Yg(Qyj# .(_8:IE* +]:?uondT.Un4d4X3yRhM;;d[!');
define('NONCE_SALT',       'IJYTzjjGi:a$$QI>bw?sq<(=vbVB/:~pnGF92iUF<saTfWRFs=K,43FS,)Sx[5V0');

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
define('WP_DEBUG', true);
define( 'WP_DEBUG_LOG', true );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
