<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'portfolio_bdd');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'ueXl8~d)$<7il?`(}.{i,DM8&1,Wkn`ZJW`xUTC-ws2GhIuw#byWBqHgcP0!HO9 ');
define('SECURE_AUTH_KEY',  '.G[YV1c7S*s)dpWIc%.,n+zjwW3([cJvkIyP~Km1J[_2o+)3[s7gwfyLVO!2?W9.');
define('LOGGED_IN_KEY',    ' l[x mp-QBfj?H1bWVk6uO)qy2a35KrhU{>P3e3G[R`eKmP$E9E!HPHK[?$0[-BY');
define('NONCE_KEY',        '&]oa-%z7RiI`0D=,H,-`sMd&SPFly9#pc<q<FdIab}beHQulx;4RhRQ`zyP)jekx');
define('AUTH_SALT',        'm:IPXZBQ6=WH9!fu,V+xNWHAI?}mQu{s|Bn-6GEJ|gw+ZY){yY`6`jAhdoEESbd^');
define('SECURE_AUTH_SALT', 'IXVPSG#Bl~unuZ]];xEd.cJ2FNzd7.o^&y4=HVf&S%=P]yxHtj.#4T~ ;xgJk[aC');
define('LOGGED_IN_SALT',   '}t^/~>)<cz~CKY_b[!I$Y.U9i/HZu$T|.A[.n,vS{H?9a:S(s~uabKE>b&VU-9q)');
define('NONCE_SALT',       'NFo2H>Og*fj0KTdcnNiiz&X>^kx3C,h0:~AsW~WHK-4l%jQ/]]tb`[8`*RfL~qdG');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
