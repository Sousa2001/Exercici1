<?php

 ini_set('display_errors','On');
    require __DIR__.'/src/connect.php'; //Incluimos el fichero connect
    require __DIR__.'/src/schema.php'; //Incluimos el fichero schema

define('APP',__DIR__);
session_start();


 $dbname='prova'; //Establecemos el nombre de la base de datos
 $base=connectSqlite($dbname); //Llamamos a la funcion que no spermite conectarnos a esta
 schemaGenerator($base); //Llamamos a la funcion que nos permite crear la tabla de usuarios
 require APP.'/view/login.html'; //Redirigimos al usuario al login
 