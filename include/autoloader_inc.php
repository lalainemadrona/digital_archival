<?php

spl_autoload_register("myAutoLoader");

function myAutoLoader($className){
    $path = "../../classes/";
    $extension = "_class.php";
    $fullpath = $path . strtolower($className) . $extension;
// .././models/college_class.php

    if(!file_exists($fullpath)){
        return false;
    }

    require_once $fullpath;

}
?>