<?php

    function MyAutoLoad($class) {
        $class = str_replace('\\','/',$class);
        echo $class;
        if(file_exists('Classes/'.$class.'.php')) {
            include('Classes/'.$class.'.php');
        }
    }

spl_autoload_register('myAutoLoad');

?>