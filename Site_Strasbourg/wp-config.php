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
/*define('DB_NAME', 'site_strasbourg');*/
define('DB_NAME', 'db752837089');

/** Utilisateur de la base de données MySQL. */
/*define('DB_USER', 'root');*/
define('DB_USER', 'dbo752837089');

/** Mot de passe de la base de données MySQL. */
/*define('DB_PASSWORD', '');*/
define('DB_PASSWORD', 'aM3lie<33');

/** Adresse de l’hébergement MySQL. */
/*define('DB_HOST', 'localhost');*/
define('DB_HOST', 'db752837089.db.1and1.com');

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
define('AUTH_KEY',         'irj<BN]&_ [eD/0P6^SB(aq=n$VK3+nUz}{X9<fA{bD`rFo{w:WTGFKX)NNRz*q`');
define('SECURE_AUTH_KEY',  'DK9^b}=W+66 _` ?sdNhhK>LmZzj2)C:A9&_H^f)Zx/^L?6L@ 7;[3oHk7`._7G-');
define('LOGGED_IN_KEY',    's|q}ARJuZ+o!Nz)=)t;>H!9LrJd.&K+04~o5Z#~QhF:qUB<t3^w0IHuu+JMA%MF|');
define('NONCE_KEY',        'IO&aK 6+kinP5A#W;(6m|3!O:,9I5oDnU-NHQV^xP`cxkQHvkw,=K<OmRI}jH#AG');
define('AUTH_SALT',        '/Cm0j,/<D$0Kyrt,2Oq:^w.W:=K?[g9[-;$1%[XwJ@<(aj1hLnk%d]W.&~J`y2(V');
define('SECURE_AUTH_SALT', '~qy5@w<Xd;N%DGa,WI1|hCP%JD8?TnnND8I?^3]fP{g?`nXfoyc!M#S~e3xfs|Y>');
define('LOGGED_IN_SALT',   'cY{Pv:G|zwh2),zXvl X?NFynXp/&D!Y=%vk]_$jB?ojxS{QBm!h{@_~IX5Y%6-&');
define('NONCE_SALT',       '8KK09ejM`Qh}M@JSnM.fTZO hu7>:JhNv_~fB/Tts{dmg >x?iDBeu]Hr0c]l3;9');
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
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');