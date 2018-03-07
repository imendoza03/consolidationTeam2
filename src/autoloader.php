<?php

spl_autoload_register(function($className){
    
    $fileName = sprintf("%s/%s.php", __DIR__, str_replace("\\", DIRECTORY_SEPARATOR, $className));
    
    if(is_file($fileName)) {
        require_once $fileName;
    }
});