<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'radia' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'S0Q)qEL#0.33>G/,(SxfLJV2wV8fik({R@Wg8`,%:iJk(flyxZ$ioAnLrh8Z^pyW' );
define( 'SECURE_AUTH_KEY',  'u*er]B0QX)4Sus-4bm+ut1x$us5xQGhE|7U`yCj%CT:045^Nh]Dv5Bf;yG^la6=3' );
define( 'LOGGED_IN_KEY',    '!ox),v-~EIT 293c.^^X<Q5;.#MiGpt&bI:$f(|_toXJp@`n*iS$~Jsw[x^:iIUa' );
define( 'NONCE_KEY',        'yA^IeZvj8%jG@L>tluHbmr5i|qPZm@>nFOqOhiw+1:+/(^3lB<*~ ^Ovo7]TAHLu' );
define( 'AUTH_SALT',        '-Zv 5]EX+kT;dLE5u|hLI4I+bZ[5z6OHWaDX5E!~^>#zvtf@XQu4i$$k?0)euwmP' );
define( 'SECURE_AUTH_SALT', 'X%9+_RP&V][D3:K9af230)QTHGTFD_grD{$;LSA%Ot)!3$#71{Ln%C43^+b%Jc8E' );
define( 'LOGGED_IN_SALT',   ' nWuEc+PhJ%P9*!Ry:@pMnW 3>}A(ArO2Y8f8A&OEA`wm6I2SDb&lQz<j+N#%A(T' );
define( 'NONCE_SALT',       'ma=c}mg&fuMeq~lRC5<UW/YNe +cIjy3h#)59/IP9R=8g(zwI$:DqIwHM]yE{ppr' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'radia_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
