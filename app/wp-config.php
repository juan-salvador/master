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
define('DB_NAME', 'juan_wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '1234');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'database_mysql');

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
define('AUTH_KEY', '~&Q1#w.0*|-IV75p[wm5cuK!f+(;Z?pO/T6RZodLH:F#^qa<8ww/4+vp58+JilBm');
define('SECURE_AUTH_KEY', 'wis/5:esMwD(~yH;}~`$/N_*:,Xy6WQZii/~]~4^Ecug~[cDYe0^0i_K3-cK+o[(');
define('LOGGED_IN_KEY', '@tl4~H.!`gh@T#/wpEr(- /,#RWK Vj6z#l+ynqE/U[f5CWaw&-LkVciA&$)~jGN');
define('NONCE_KEY', 'w{f[!54)$D<6xea^T7%Y175[&~.l6eGKp],7l=,$r}1/FyU?}r67.J9MjsQg-4U:');
define('AUTH_SALT', '*Fbp.~iZ/(Z,ANZFmo]f:24:5h/)OfARFG1:b7df<IT?.BYgM4*iY4:$=><:vJtd');
define('SECURE_AUTH_SALT', ':T|HUR?REz063.bX]k8JyU_JDT9_1m};-8RI%Th^7o{$fBN,jL1:ZGqEG/X}BSB;');
define('LOGGED_IN_SALT', 'Q-Q.J(e j%kPN$=Di?zH`=e{{d:)%72Z_u{hK(8J4$PK=8H,!7ckz2eNp&#jGb:,');
define('NONCE_SALT', 'L$fY?+1{+|1dE)tvTWSFd+*Atw;A,Zw^iMon#8m/$G:IR5mbkF^F<D#dlq3%RNWf');

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

