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
define('DB_NAME', 'golescol_blogmontca');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'golescol_blogmontca');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'CHUch031!');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', '.zK~B,=)>|i?FBbi]CD%(W~>6}mPgg.;{m&<ho@7zoI|JE_Q#5=YY,F.9ZGh]?xM');
define('SECURE_AUTH_KEY', '>Lt-&Dm$hh,3=XFwx*a*bg%d&r_8ALX`8=?W>LO_pV/@C_x{ciW>fak(;3JB:t87');
define('LOGGED_IN_KEY', ':7}Ssuw:a&wm|RUX*=(=cAygGx!wMj,a(7e#EzA(U3+H]X7e~0x,;-8th3eRiv+g');
define('NONCE_KEY', 'CeyKH1U<6Ef%0N7udWthyJ_#MDV)?v[`nS-BTK|#iQeFU5cPb[Mh)gWe52VdU}bG');
define('AUTH_SALT', 'g?nCkM).NNQb{afj3Bt@}P%U2B~0^NW]Y(^C/A`cjF(zQfwD#Q5%8FV@B3JZOt%X');
define('SECURE_AUTH_SALT', 'Ftw)rl$[,)(J:~)5$kxit>M Go9Ij_L2[d#Dw({W/p3,w^#g[W6i@h9&w9b2=bUi');
define('LOGGED_IN_SALT', '2Iz,$uKG<1<J{tS5/Q(/~Phio#%D[f>33Ps$gG<|KL0dEbt.V}|3l//JMFss,pIP');
define('NONCE_SALT', 'nR<.xp#~w#t?0gNZ+#eq0zYO/B9sl+)f@/PzkeU17t XQ9+hMhm0@J@r[8d:Yh;-');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

