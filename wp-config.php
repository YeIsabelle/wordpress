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
define( 'DB_NAME', 'projet_wp' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'WX4v?$B&%[.)1kAo*%%YDfwUm_oT1}q[iZ-L*}EY.=53<i{qwi]ivk`^gPO{+XT,' );
define( 'SECURE_AUTH_KEY',  '|sqs3lEfD`.v(FKQ73L2`3A*4]][D`3#~I8|*R~]1vBt~T)kIZ:Khji=F7@FoR1k' );
define( 'LOGGED_IN_KEY',    ':A^k w2!t0i1%kJwNFpV5B9#0ULoPfZ  GDf)1Avy:%rI|LUOVr>`;>[N}|||v~?' );
define( 'NONCE_KEY',        'Fx-Tmx]BAvTbsB2F)qBI+u/f?Efw-rj!s`7~-Q8af>xcL`|J[4m=/C-,T2.TGu@b' );
define( 'AUTH_SALT',        'AEKC|aHEX.P4GY;Tqj%rEPUI!lh[k2d36P?iEpYi.6V_Y.?bug*Sbl]K*VbCL&)n' );
define( 'SECURE_AUTH_SALT', 'lqk=8/v|84dwYMX?kM<Yay(hL!O-TsSem>%NnL,Ah2n+OlqjKp})St@^mG+ k87=' );
define( 'LOGGED_IN_SALT',   'Z*TIvyWVF/xpMf)ER-w1Z&5g4eH~:|!*jU#qXKEZD2=TLQD73L:H?6.+fH[^G6*[' );
define( 'NONCE_SALT',       'W1P@pj5wH..K(8HOl&]N$JKHhp ,|9|3OVx@jLZqu[p])Fy=RI|apt?$;lyaDG=#' );
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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
