<?php
    define('DS' , DIRECTORY_SEPARATOR);
    define('SITE_ROOT' , $_SERVER['DOCUMENT_ROOT'].DS.'ExchangeG_web_service'.DS.'ExchangeG_rest');
    define('INC_PATH' , SITE_ROOT .DS .'includes');
    define('COR_PATH' , SITE_ROOT .DS .'core');

    require_once(INC_PATH . DS . "config.php");
?>