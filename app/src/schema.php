<?php

function schemaGenerator(PDO $db){ //Esta funcion nospermite crear la tabla
    $command='
    CREATE TABLE IF NOT EXISTS users(
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name VARCHAR(100) NOT NULL,
        password VARCHAR(100) NOT NULL
    )';
    try{
        $db->exec($command);
    }catch(PDOExeception $e){
        die($e->getMessage());
    }
}

function insertSchema($db,$usuario,$contraseña){ //Nos permite crear el usuario que hagamos en el registro

                $command="
                INSERT INTO users(name, password)
                VALUES ('$usuario', '$contraseña')";
                try{
                    $db->exec($command);
                    echo 'Insert realizado...';
                }catch(PDOExeception $e){
                   die($e->getMessage());
                }
        }  

?>