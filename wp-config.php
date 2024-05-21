<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/Applications/MAMP/htdocs/vivre-a-quimper/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'vivre-a-quimper' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '@85 _4Jm^+d!(=L[|w>_oyOt]X6d+cO5X3>EBU@f1lYAVs5kk/c$DRC%v` D&_xm' );
define( 'SECURE_AUTH_KEY',  '/L>!9m>dN2M:uq#fv eyhSaL d|3I =p7|IOqp dgMM>yc[&v]t6<FooLjQf%kCR' );
define( 'LOGGED_IN_KEY',    '%~NYI/Sx/:5Ac8d6xfc=/*> 8;/!(taTY_^Eq9(z99v</dOgoq!d*1r[oD@3d[Hi' );
define( 'NONCE_KEY',        'G {P<=}(k*y*ci>6(kYSnqn+p@a[Y8_a1|#{TmCfGG}~L;vN_]u*W!3Fh[n@;6VY' );
define( 'AUTH_SALT',        'QMs.S*$tlT.SOcx*KIzwFf*[yO%}y.PDPai=Y]^#Lg5-8~bjP>OTC[]xw/Bi#L=4' );
define( 'SECURE_AUTH_SALT', '}&z.d}4K]%nB4WxhjYVss:VzbCCrbw?o)UW{:;4,U1F-z(IZHwaE!?haTUB)OpN_' );
define( 'LOGGED_IN_SALT',   '-82I?ei*I(+-zkwGGHh:^$l#Bodg}(,*i2VyiX:)W<{Tm?dUy>sHPT}D;KEWI))s' );
define( 'NONCE_SALT',       '$gONl=$_/!~9I7Q4JuxQUF@_g`^H9;]H9W0]4 X-[]gyjz}9[1>1 #k^%sbnS&Xu' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
