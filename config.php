<?php

spl_autoload_register(function($classs_name){
    
    $filename = "class" .DIRECTORY_SEPARATOR.$classs_name.".php";

    if (file_exists(($filename))){
        require_once($filename);
    }
});

?>