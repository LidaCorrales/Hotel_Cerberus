<?php
function conectar_db(){

    $db = mysqli_connect('localhost', 'root', '', 'hotelphp');

    if(!$db){
        'No se pudo conectar a la base de datos';
        exit;
    }
    return $db;
}

