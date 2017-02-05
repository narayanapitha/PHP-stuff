<?php

    spl_autoload_register("my_autoload");

    function my_autoload($className){
      include (__DIR__."/".$className.".php");
    }
    
    
    
    // loading sample .php file using "USE"
    
    use sampleclassload
    
    $data = new sampleclassload();
    
    echo $data->getName();
    
    ?>
