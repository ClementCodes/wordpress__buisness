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
define( 'DB_NAME', 'wordpress_business' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Pb-Et!EK`s-!9_1$_^c;7hGyGFE>PcWUQCEY-g;S<f@~J-oOscs%+#UV*DHqcSqt' );
define( 'SECURE_AUTH_KEY',  '8cIo@3!_1D2:/HgwB,D3;TqHW4/rtwUG7e(yYVe11=JGH=hF=(&u#e.mP 60G;4N' );
define( 'LOGGED_IN_KEY',    'GUQ!pP*W [KOY#O9E.&dea:L_s0d:}<!%>%/FC<s+*_!/ZU+[y9/f+&JO&!{6&Y.' );
define( 'NONCE_KEY',        'oQ.K01W^;z |{p}G^Kc.!@Em(+ M/#:HUkn(46r)BJ2owaV;NWYZ5EY),<.9YOm@' );
define( 'AUTH_SALT',        ')M8Ly5HZ4^mu$,Qd9r)`x2F3`t<4X`6{$v7GjG2>L_tC-?]-C0p*:gr}!9F7wMF!' );
define( 'SECURE_AUTH_SALT', 'zeLjz&yPW+zp+IK[.!l:Lq7zce3> ;G^+~,qc-<7KY]I0<Y2M67@=6@eNw&ClJ[9' );
define( 'LOGGED_IN_SALT',   '0S,Jw:N&3OAeFXdI]ImW,6av#OR+guXH0@Zl}qtU[2Bnfv,sUlwJK<famCh?_+j{' );
define( 'NONCE_SALT',       '2~SSy,LjECG~OqP;oqYf2e]jUF=EH#|*C6NkPrtD[qdfc1K!3/rq]@G<y,`r?d?_' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_business';

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
