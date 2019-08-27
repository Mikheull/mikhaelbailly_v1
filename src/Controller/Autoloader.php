<?php
        
function load($class){
    echo $class;
    require('src/Model/'. $class .'.class.php');
}
spl_autoload_register("load");