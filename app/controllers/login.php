<?php
include "../src/schema.php";
include "../src/connect.php";

$usuario= filter_input(INPUT_POST,'name'); //recogemos los datos enviados del formulario
$contraseña= filter_input(INPUT_POST,'password'); //recogemos los datos enviados del formulario

$registar=filter_input(INPUT_POST,'registarar'); //recogemos el checkbox del formulario
$recordar=filter_input(INPUT_POST,'recordar'); //recogemos el checkbox del formulario
$date = date('d-m-Y H:i'); //creamos una varuable conla hora del sistema

$dbname='prova';
$base=connectSqlite($dbname);

if (isset($registar)){ //comprobamos si esta seleccionado el checkbox registro
    insertSchema($base,$usuario,$contraseña); //de ser asi llamamos a la funcion inser schema y pasamos los datos para registrar al usuario
    echo "<br><a href='../view/login.html'>Volver al login</a>";
}else{
    $command=$base -> prepare("
    SELECT * FROM users WHERE name = ':usuario' AND password=':contraseña'");
    try{   
        $command -> bindValue(':usuario', $usuario);
        $command -> bindValue(':contraseña', $contraseña);
        $base->exec($command);
        echo "Select realizado";
        $row=$base->fetchAll(PDO::FETCH_ASSOC);
        $count=count($row);
        if($count ==1){
            header("location: ../view/home.html");
            $user=$row[0];
                $_SESSION['usuario']=$usuario['usuario'];
                $_SESSION['contraseña']=$contraseña['contraseña'];
                if(isset($recordar)){
                    setcookie('usuario', $usuario, time()+(606024365), '/');
                    setcookie('contraseña', $contraseña, time()+(606024365), '/');
                    setcookie('date', $date, time()+3600*24, '/');
                }
        }
    }catch(PDOExeception $e){
       die($e->getMessage());
    }
}




?>