<?php

/* Escribe un programa que muestre los numeros de 1 a 100 (ambos incluidos y con
un salto de linea entre cada impresion), sustituyendo los siguientes:
* Multiplos de 3 por la palabra &quot;fizz&quot;.
* Multiplos de 5 por la palabra &quot;buzz&quot;.
* Multiplos de 3 y de 5 a la vez por la palabra &quot;fizz-buzz&quot;*/

$i = 1;
$f = "fizz";
$b = "buzz";

for ($i = 1; $i <= 100; $i++) {

    if ($i % 3 == 0 && $i % 5 == 0){
     echo "$f $b" . "<br>";   
    }else if ($i % 5 == 0){
        echo "$b" . "<br>";
    }else if ($i % 3 == 0){
        echo "$f" . "<br>";
    }else{
        echo "$i <b>";
    }
}



