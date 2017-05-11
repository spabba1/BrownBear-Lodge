<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

// echo $_SERVER['SERVER_ADDR'];

if ($_SERVER['SERVER_ADDR'] === 'mac.brownbearlodge.com' ||
    $_SERVER['SERVER_ADDR'] === '127.0.0.1') {
    define('SERVERTYPE', 'dev');
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    // defined('SITE_ROOT') ? null : define('SITE_ROOT', DS.'var'.DS.'clients'.DS.'client2'.DS.'web2'.DS.'web'.DS.'bbearweb'.DS.'app');
    defined('SITE_ROOT') ? null : define('SITE_ROOT', DS.'xampp'.DS.'htdocs'.DS.'somefolder'.DS.'src');
} elseif ($_SERVER['SERVER_NAME'] === 'dev.brownbearlodge.com') {
    define('SERVERTYPE', 'dev');
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    defined('SITE_ROOT') ? null : define('SITE_ROOT', DS.'var'.DS.'www'.DS.'clients'.DS.'client2'.DS.'web2'.DS.'web'.DS.'src');
} elseif ($_SERVER['SERVER_NAME'] === 'new.brownbearlodge.com') {
    define('SERVERTYPE', 'stage');
    defined('SITE_ROOT') ? null : define('SITE_ROOT', DS.'home'.DS.'content'.DS.'44'.DS.'8887044'.DS.'html'.DS.'staging');
} elseif ($_SERVER['SERVER_NAME'] === 'brownbearlodge.com' ||
         $_SERVER['SERVER_NAME'] === 'www.brownbearlodge.com' ) {
    define('SERVERTYPE', 'live');
    defined('SITE_ROOT') ? null : define('SITE_ROOT', DS.'var'.DS.'clients'.DS.'client2'.DS.'web2'.DS.'web'.DS.'bbearweb'.DS.'app');
} else {
    die("Initialization error");
}

defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'includes');

require_once(LIB_PATH.DS."core.php");
