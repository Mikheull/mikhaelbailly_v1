<?php

function initOutputFilter() {
    ob_start('ob_gzhandler');
    register_shutdown_function('ob_end_flush');
}
initOutputFilter();


/**
 * INIT
 */

@ini_set('display_errors', 'on');
@error_reporting(E_ALL | E_STRICT);

setlocale(LC_TIME, "fr_FR");


$ServerHost = $_SERVER['SERVER_NAME'];

$DatabaseReferences = ($ServerHost == 'localhost') ? 'config/dev/database.json' : 'config/prod/database.json';
$sql_co = json_decode( file_get_contents($DatabaseReferences) );

try {
    $db = new PDO("mysql:host=$sql_co->host;dbname=$sql_co->dbname", $sql_co->user, $sql_co->pass);
    $db -> exec("SET NAMES utf8mb4");
} catch (Exception $e) {
    throw new Exception('La base de donnée n\'a pas pu être connectée !');
}
