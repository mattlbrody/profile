<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'rjx_i6k1nb113e');

/** MySQL database username */
define('DB_USER', 'UrAZMP3s5N6usHx');

/** MySQL database password */
define('DB_PASSWORD', 'JF6jn943');

/** MySQL hostname */
define('DB_HOST', 'frontendmattcom.ipagemysql.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', '+sVEBqzrHBdB/Y|TO/>O-QEBNpK;l$hHBpzPetWYMIE_-J](g)v@t$>dlzx&xrRCsHS|iQZWidO_IR&Dftl&cVwRmmhxtz|s&TeS_jEfcTy>t&RbydR$qwfQC^EMSfP>');
define('SECURE_AUTH_KEY', 'KcTXAYhlMg>U;lTkqGY/?xU<ZnrE+q^Xo)msSavl%kvR^dj>Ca<deXOpUiN{DOxgF_Ap*Y?;HD{vHryVpdxnj+$RAz&-{]*-iw][}&gupZ<K<bZ_fsT%<l!<hsrs<le^');
define('LOGGED_IN_KEY', 'G!$ZFFTM=YWFYLTC_ADvZA$%woi-OdDPOYUzrqMXaf)eiEcKBIRrGJdn!PO][gOZVf^NKaBs/ux@T_tiRiI[z[F*f]gfk=eJ*QSL{FFbe(w)!@tPy%VaELn}<P+KknW<');
define('NONCE_KEY', 'KetJOepXbO(ndxCcQ=InrNa<q}NXR)]X}[wJNqYGkCYn=H*-v@kLzK%_I+lp{&>xLPU*<a?njW[mFVU<x=YE?&XlgFk[=qlt?sAFFNFuHAAV{w}m+R_^X)B[dhX>doq{');
define('AUTH_SALT', 'X&HZU][Jv;nk&c<Mo!}mDX)&gmZC-|B{uNgqCT%i^=E]?m%&QpDA%+wfa(jXlXs)mMaDTUGcBFqK&^ZvE|[nb&om;jDpIZc^$%XvUaqR_[kEAK=bi]p+XQ%JBfI%d*vu');
define('SECURE_AUTH_SALT', 'oh=z[@UjgLAtsSl&FwR||cvlKmpv/LEd+a_=A}cIFPDbrFC{C)wt&Pxx*UBui{G^rr<-TEQ|=ngJnDp*mwHnEXLr@du*iZd)&hmn_CxFj|Cy@*qv]g]!vdI!AqOBbJXn');
define('LOGGED_IN_SALT', 'nuVW[VQcDm-jLRB}}EV!H*uO}nr?hoe^>t}F--oqriAYDVq@rBh>aSH?PHeR(oHOiR]V!;<Ig%)HlTs|{C}VdZN_WIUxPqKg?u+QH|q?%at[DI&^[mWTa!^>&uO;WOKK');
define('NONCE_SALT', 'T[PcAcN$w{rAK|$_jRnSs<bqSum}OsNVm&YLPq@!v{lvprJhkZfD[UrLNiMqauM$OBM{;VdZ>S^i{+Q$s{!XJ{>oQG|pcQyeQ;k{}hu_-xX<Kvvsx(p}Gc}PJfLZiGeL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_xsct_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
