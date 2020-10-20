<?php

declare (strict_types=1);

performOperation();

function performOperation(){ //Esta es la funcion global que llama al resto segun la operacion que quiera shacer
    $operacion=$_GET ['fun'];
    if ($operacion=="fac"){
        ffactorial(); // esto llama a la funcion factorial
    }
    else if($operacion=="prim"){
        fprimo(); //eto llama a la funcion primo
        if (fprimo()==true){
            echo "No es primo";
        }else {
            echo "Es primo";
        }
    }
    else if($operacion=="sum"){
        fsuma(); // esto llama a la funcion sema
    }else{
        echo "No has peusto nada";
    }
}

function ffactorial():int{ //esta funcion sirve para calcular el factorial del numero introducido
    $num_usu=$_GET ['num1'];
    $a=1;
    for($i=1;$i<=$num_usu;$i++){
        $a=$a*$i;
    }
    echo "El factorial de $num_usu es $a";
}

function fprimo():bool{ //esta funcion nos permite saber si el numero es primo o no
    $num_usu=$_GET ['num1'];
    $num_max=$num_usu/2;
    for($i = 2; $i < $num_max; $i++){
        if($num_usu % $i == 0){
            return true;
    }
}
return false;
}

function fsuma(){ //esta funcion nos permite sumar 2 numero recibidos a traves de una array
    $num_usu1=$_GET ['num1'];
    $num_usu2=$_GET ['num2'];
    $asum=[$num_usu1,$num_usu2];
    $suma=array_sum($asum);
    echo "La suma de los valores es $suma";
}


?>