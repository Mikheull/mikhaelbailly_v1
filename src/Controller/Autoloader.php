<?php
        
function load($class){
    require('src/Model/'. $class .'.php');
}
spl_autoload_register("load");