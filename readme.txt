=== Plugin Name ===
Contributors: ejner69
Tags: rss, suscripcion, feed, subscription, 
Requires at least: 2.7
Tested up to: 2.8
Stable tag: 2.0

Inserta lectores RSS web en tu blog - Insert web reading RSS in you blog

== Description ==

Añade en tu blog botones para suscripciones vía lectores RSS web tradicionales, como Google Reader, Newsvine, entre otros. Añade el código <code>&lt;?php if(function_exists('suscribeme')) suscribeme();?&gt;</code> donde quieras mostrar SuscribeMe!, selecciona los servicios y listo.

Compatible con WordPress 2.7 y superiores

== Installation ==

1. Descomprimir el archivo en algún lugar de su PC
2. Subir la carpeta 'suscribe-me' a tu WordPress
3. Activar el plugin a través del menú 'Plugins' de WordPress.
4. Insertar el código <code>&lt;?php if(function_exists('suscribeme')) suscribeme();?&gt;</code> en el archivo <code>footer.php</code> de tu plantilla, o bien, donde estimes conveniente.

== Changelog ==

Versión 2.0 (14 de Marzo, 2009)

1. Optimización del código fuente
2. Corrección de varios bugs en el diseño y manejo del plugin
3. Rediseño del panel de administración
4. Corregido error en la carga del CSS del plugin
5. Añadidos servicios de suscripcion a podcasts: Podnova, PodcastReady, iTunes y Odeo
6. Añadido el lector RSS vía web: Wikio
7. Optimización del CSS

[Changelog de versiones anteriores](http://elotroyo.co.cc/proyectos/suscribeme#changelog)

== Frequently Asked Questions ==

= Español =

= Tengo instalado Bookcerbos ¿Es seguro instalar 'SuscribeMe!'? =

Desde esta versión, si. Las versiones anteriores de SuscribeMe! estaban basadas en versiones en desarrollo de Bookcerbos, por lo que solian ser inestables e incluso, incompatibles con Bookcerbos en algunos casos. Desde esta versión (1.0) se soluciona la totalidad de las incompatibilidades entre ambos plugins.

= ¿Se pueden añadir más lectores RSS? =

De forma fácil, no. Ahora, si eres un usuario experto, puedes añadir más lectores mirando un poco el código del plugin. Ten en cuenta que, si haces esto, podrías probocar un mal funcionamiento del plugin o, en el peor de los casos, dejar inaccesible tu blog. Solo usuarios avanzados pueden editar el código de SuscribeMe!

= Veo que el código a insertar a cambiado ¿Debo reemplazarlo en mi theme? =

Depende. Si tienes en tu theme el código <code>&lt;?php suscribeme();?&gt;</code>, y activas el plugin, verás que funciona exactamente igual a que si inserta el 'nuevo' código <code>&lt;?php if(function_exists('suscribeme')) suscribeme();?&gt;</code>. La diferencia esta al momento de desactivar el plugin y no borras el código: si tienes el viejo código, veras un error en el lugar donde anteriormente estaba SuscribeMe!, mientras que con el nuevo código esto no sucede. Queda a juicio tuyo si debes o no cambiar el código, aunque te aconsejamos que lo reemplaces, para así no tener inconvenientes al momento de desactivar el plugin.

Más información sobre SuscribeMe! en la página oficial [El Otro Yo &raquo; Proyectos &raquo; SuscribeMe!](http://elotroyo.co.cc/proyectos/suscribeme)

= English =

Sorry, documentation not avaible in English

== Screenshots ==

1. Panel de administración de SuscribeMe!
2. SuscribeMe! en el footer del theme Kubrick