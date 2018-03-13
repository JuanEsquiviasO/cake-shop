<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'thecakeshop');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'K|4C4-8`7C0B!+cP+Wa-DD(RFKQ B-ZgG5C)`7Y99uw9bQ__?;nZ3`GQLG-=9-v/');
define('SECURE_AUTH_KEY',  '^iN5=S.2>6*T`)`6XA^PHJhk<![.. WvF5qrG/C0Q/4Cwfu()t~6,wZ-B?m!oMAJ');
define('LOGGED_IN_KEY',    '3O0-+k$*8: l3Q%ztXSz^*(xRX^8K:4]P2S9KfZCoKf7=@D=.u-?|)9Z2;t;[l$[');
define('NONCE_KEY',        'F=c#im(K6KR41[H:(My%7k#QY53U?gS8!v~{--35IH=/mq{35q+4ChG&n*FH65!o');
define('AUTH_SALT',        '!-D5`V!WVYigD:ju@--I|/#+)&ur>2nKc,Os`Q6y!^j9-0J4+L^[]:7q|6A#MO(`');
define('SECURE_AUTH_SALT', 'sAkiID(D/+8Kazjc7DeNn>&%TN<5R`X[JKA)I01DlCL.Q|kxQ4-Zow2`%0-+Tkgj');
define('LOGGED_IN_SALT',   '#<^Tg2b,eQWAj-72*47J`g.BMCA ;/GJEr7RDd61>v8 C|2FQzbo9o:;|y6$jp^!');
define('NONCE_SALT',       '0BCTT0b$323%M1TflZK=S.)mKHyc9f4Ys-:^JWTtnIM.yqc-6*%Qr/GDRg|jBxwF');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'tcswp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', true);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

