<?php 

/** url constante */
define('PORT' , '7879');
define('BASEPATH' , '/proyectos/carro_de_compras/');
define('URL' , 'http://127.0.0.1:'.PORT.BASEPATH);

/** constante para los paths de archivos */

define('DS' , DIRECTORY_SEPARATOR);
define('ROOT', getcwd().DS);
define('APP', ROOT.'app'.DS);
define('INCLUDES', ROOT.'includes'.DS);
define('VIEWS', ROOT.'views'.DS);


define('ASSETS' , URL.'assets/');
define('CSS' , ASSETS.'css/');
define('IMAGES' , ASSETS.'images/');
define('JS' , ASSETS.'js/');
define('PLUGINS' , ASSETS.'plugins/');


/** constantes adicionales */

define('SHIPPING_COST' , 110.90);


?>