<?php
//No se puede usar $
//Solo se define con el método define
//Se asignan una única vez
//El alcance el global
define("SALARIO","908.526");
$valorMinimo = SALARIO;
echo "El valor del salario minimo es: $valorMinimo<br>";
echo "El valor del salario minimo es: ".SALARIO."<br>";

//No podemos redefinir constantes
/*define("SALARIO","000000");
echo "El valor del salario minimo es: ".SALARIO."<br>";*/

//Acceder al método constant
echo constant("SALARIO");
?>