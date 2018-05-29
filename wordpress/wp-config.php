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
define('DB_NAME', 'wp_LimogesFc');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '@Cqnttptrpf1987');

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
define('AUTH_KEY',         ':u#1[:cd 5-@-X(Lj {mUGPu-$d7H^u{YVK0-yS%pOI7kznV-_+}0Hxa5!~,z+%i');
define('SECURE_AUTH_KEY',  'i4V$q+w&U]=|(,J=**0*ff0f=1psoa/DaL+e?;va`f%?=#ompJ}XU,=TVm>$7MQE');
define('LOGGED_IN_KEY',    'm~+k$O0+04|!Hp/J4yq@_qt0^TpsiS%<t/:~BxRll~MBCS~K[z|V_GToe(AwS(r+');
define('NONCE_KEY',        'tk_(dcnCfzU?uwQJb]_Z^,04m.`Pw=c2|h2m.!G%Z5(]zF{1&$:iZTx/gj_5J<wU');
define('AUTH_SALT',        'BWC/!}kymB*)-&]xcj].2!SYDiS~AeQ3rd=Rkl/eZPL{W3(%sYZ7vu[3rs*fGpac');
define('SECURE_AUTH_SALT', '4G8[fiBxO C,RJHyaU`x|V1Ds8b{2Gg0`3,Mh]mqrAoVlGLVz.(WJr=`7yoY8(vf');
define('LOGGED_IN_SALT',   '3pe.:{~Tta5661{Mpz:=*rv3C%l#g/JOV0ni:cw!v5>6GC`RV/To$vJgIw@D-)lS');
define('NONCE_SALT',       'F>^?6A.JdU8e8zi5I|ek&}q1=+:M&=$ZaN4U|p`__%Qqx2J5}0MNS6Sq2eZEKUBb');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
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
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
