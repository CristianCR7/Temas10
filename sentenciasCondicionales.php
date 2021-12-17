<?php

// Estructuras condicionales  if, if else 

$a =5;
$b =3;

echo "Primer parrafo <br>";

if($a < $b){
    echo "Segundo parrafo <br>";
} else{
   echo "segundo parrafo editado <br>";
}

echo " tercer parrafo <br>";

/* ---------------------------------------- */

/* anidar otra condicion dentro del if */

 $a = 3;
$b = 3;

if ($a > $b){
    echo " El primero valor  de a es mayor que el valor de b";
} else if ( $a < $b){
   echo "El valor de a es menor que el valor de b";

} else {
   echo " El valor de a es igual que el valor de b";
} 


/* operadores ternarios */


$a = 3;
$b = 3;

$valor = $a > $b ? 'Mayor' :  ($a < $b ? 'Menor' : 'igual');

echo " El valor de a es $valor que el valor de b";
 


/* Estructuras de selección múltiple (SWITCH Y MATCH) */

$a = 5;

switch($a){
   case '1' :
       echo "lunes <br>";
   break;   

   case '2' :
      echo "Martes <br>";
   break;   

    case '3' :
       echo "Miercoles <br>";
   break;   

   case '4' :
       echo "Jueves <br>";
   break;  

   case '5' :
      echo "Viernes <br>";
   break;  

   case '6' :
      echo "Sabado <br>";
   break; 

   case '7' :
      echo "Domingo <br>";
   break; 

   default:
        echo "El valor es invalido";
   break;  
   
} 

/* Selecion multiple MATCH */

$a = 6;

echo match($a){ 
   1 => "Lunes",
   2 => "Martes",
   3 => " Miecoles",
   4 => "Jueves",
   5 => "Viernes",
   6 => "Sabado",
   7 => "Domingo",
   default => "El numero de la variable es invalido",
};
