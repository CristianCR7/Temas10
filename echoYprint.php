<?php
//1. print imprime una cadena, echo puede imprimir más de una separadas por coma:
print "Hola<br>";
echo "Hola"," Hola de nuevo<br>";

//2. print devuelve un valor int que según la documentación siempre es 1, por lo que puede ser utilizado en expresiones mientras que echo es tipo void, no hay valor devuelto y no puede ser utilizado en expresiones:
//Se imprime "Hola" y la variable $foo toma el valor de 1
$foo = print "Hola<br>";
echo $foo
//La siguiente expresión da error
//$foo = echo "Hola";
?>