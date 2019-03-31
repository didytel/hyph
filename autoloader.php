<?php
function genAutoload($class){
    $class = str_replace("\\", "/", $class);
    $path = "$class.php";
    if(file_exists($path)){
        require $path;
    }
    else{
        throw new Exception("Class file $path does not exists!");
    }
}
spl_autoload_register("genAutoload");