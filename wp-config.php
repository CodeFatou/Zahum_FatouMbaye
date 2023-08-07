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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', "fatou_mbaye" );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', "root" );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', "" );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', "localhost" );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'T,hS6Tzz+UYWe2gB8y1uV:g^P9l=TrU!Qv(:MW~}3N5M[n)}?Q{<6UjNpFAK6O$z' );
define( 'SECURE_AUTH_KEY',  ')D=1HnzM}UAEL:<:Ig;59|3x[Rn%:A?ga81o,+{jyt(eNNff+E?:t,z3xrfjQI0l' );
define( 'LOGGED_IN_KEY',    'jY+~>p_] y6[2Dow$6imwodBAMEoz.{jJ:mJ*3@e>&3t<A!4 H0O{P*3&Ad Vxv[' );
define( 'NONCE_KEY',        ',drmH/t|+qNzd1Jde_l<l@ g2.xY&k4h)3[[@,Dan)5X3MJvyJy@`dwlN.3LZ4Zl' );
define( 'AUTH_SALT',        'SQUBW)6>%xxB(*&[0&IU$QQ`MB+ZE3G}(D.mZ #2JcG6rC1-{5@sf{4zk)1zX0&@' );
define( 'SECURE_AUTH_SALT', '>+v<?}9K$}Q;z03J]JcO&Vq Rbi)_K]-5A0.Bn#}]fk3W>M~g @H{xE058A*TW|f' );
define( 'LOGGED_IN_SALT',   '>=Xx@@^2fc5nJL$tFoN73[Q<(T(Bl#kmm[>yeeauH+-azm2oTZ97E|#FVK$rwO?B' );
define( 'NONCE_SALT',       '|BiFeU|s5:pyj_`n*`&>M;9QVmVkS{QE:s@%&Mnf~(v<}KW_-<-H:WmSl`5MDWW@' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
define( 'WP_SITEURL', 'http://localhost/fatou_mbaye/' );
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
