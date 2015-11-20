<?php

// Path to your craft/ folder
$craftPath = '../craft';



// Setup environment-friendly configs

// switch ($_SERVER['SERVER_NAME']) {
//
//
//     case 'localhost' :
//         define('CRAFT_ENVIRONMENT', 'local');
//         break;
//
//     case 'com' :
//         define('CRAFT_ENVIRONMENT', 'live');
//         break;
//
//     case 'dev' :
//         define('CRAFT_ENVIRONMENT', 'dev');
//         break;
//
// 	   default :
// 		   define('CRAFT_ENVIRONMENT', 'local');
// 		   break;
// }




// Move plugins path to right above web root
define('CRAFT_PLUGINS_PATH', realpath(dirname(__FILE__) . "/../plugins").'/');

// Move templates path to right above web root
define('CRAFT_TEMPLATES_PATH', realpath(dirname(__FILE__) . "/../templates").'/');

// Define location of craft config dir
define('CRAFT_CONFIG_PATH', realpath(dirname(__FILE__) . "/../craft/config").'/');

// Define storage of craft
define('CRAFT_STORAGE_PATH',  realpath(dirname(__FILE__) . "../storage/"). '/';


// Do not edit below this line
$path = rtrim($craftPath, '/').'/app/index.php';

if (!is_file($path))
{
	exit('Could not find your craft/ folder. Please ensure that <strong><code>$craftPath</code></strong> is set correctly in '.__FILE__);
}

require_once $path;
