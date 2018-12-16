<?php

// Application paths
define('PATH_SRC','../src/');
define('PATH_UPLOAD','../src/');
define('PATH_CACHE','../src/');
define('PATH_MODULES', PATH_SRC.'modules/');
define('PATH_CONFIG', PATH_SRC.'config/');
define('PATH_LIBS', PATH_SRC.'libs/');
define('PATH_TEMPLATES', PATH_SRC.'templates/');

// Loading config files
require PATH_CONFIG.'config.inc.php';

// Loading libraries
require PATH_LIBS.'utils.php';

// Detecting language
list($empty,$uri_lang) = explode('/',$_SERVER['REQUEST_URI']);

if (in_array($uri_lang,$config['languages'])){
    $g_lang = $uri_lang;
    $g_module = substr($_SERVER['REQUEST_URI'],3);
}
else{
    $g_lang = $config['default_lang'];
    header('Location: /'.$g_lang.'/');
    exit;
}


switch ($g_module) {
    case '/':
        require PATH_MODULES.'index/index.lang.php';
        require PATH_MODULES.'index/index.mod.php';
        break;
    case '/about':
        require PATH_MODULES.'about/about.lang.php';
        require PATH_MODULES.'about/about.mod.php';
        break;
    default:
        require PATH_MODULES.'404/404.lang.php';
        require PATH_MODULES.'404/404.mod.php'; break;
}