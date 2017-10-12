<?php

// BEGIN iThemes Security - Ne pas modifier ou supprimer cette ligne
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Désactiver l’éditeur de fichier - Sécurité > Réglages > Modifications de WordPress > Éditeur de fichier
// END iThemes Security - Ne pas modifier ou supprimer cette ligne

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
define('DB_NAME', 'p2020h3g1wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '{]<(=aF<@!t2I5x BkkrQKWco7kN~WbQH@3txv/{Jw:}S&Z( n}(RtC-=m0JiPm|');
define('SECURE_AUTH_KEY',  '2?m#|)(+ut$K8n?]&ra+(V+q-y-O%Dqll{F_}/Y#[qEQdc=D|J~Ydw21}dqm-|q.');
define('LOGGED_IN_KEY',    '+__VK9Z6|{)8Xcj5IiO{-9#/^2MsQ?R7xvWOSmW-mpl}O&x7r5+mRHFDhtL!,<U5');
define('NONCE_KEY',        'I{C;Iv_`JGY?s4gw--W=IXw)W|ay4++,cw_2n/I7nj!80FJxn@}2bJ6V|GSj[vdc');
define('AUTH_SALT',        'RH2:!</kKkQ&eKlhvU$L0w<~=fm*^DDt4/;&Z.rY-9Vdx7=1w.L91dKv+B{e|.KK');
define('SECURE_AUTH_SALT', 'CLUx-0MNtv?F6B-k3{NOV#UK_~QSyXMh)1$m]aH:g.sQP2w# ;;:oA%V[TaL11][');
define('LOGGED_IN_SALT',   ' I%W#U</z:TzRmciEN%JSDJM:$8eHkjc{M^-:{}T<jGe]+N/A%7.]Ks8l5m#ipAT');
define('NONCE_SALT',       'JN!H@o+/+h/>;[s&Y.eJLNuBU:wTjDCea7DHAOl<g>[H1g~)KKeJ(ZW^`PFpMd&9');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wfhgfhgf1212p_';

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
define('WP_DEBUG_LOG', true);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
