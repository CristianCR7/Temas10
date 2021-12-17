<?php
//1. Si el valor de la variable es una cadena de texto, var_dump imprime la cadena entre dobles comillas, print_r no.
//2. print_r no imprime nada visible para false y cadenas vacías.
//3. var_dump proporciona información sobre el tamaño y tipo de datos de la variable y, en el caso de arrays y objetos, de los elementos que la componen. print_r no da información sobre el tamaño de la variable ni sobre el tipo de datos.
$foo = array( 5, 0.0, "Hola", false, '' );

var_dump( $foo );
//Imprime
/*array(5) {
    [0]=> int(5)
    [1]=> float(0)
    [2]=> string(4) "Hola"
    [3]=> bool(false)
    [4]=> string(0) ""
}*/

print_r( $foo );
//Imprime
/*Array (
    [0] => 5
    [1] => 0
    [2] => Hola
    [3] =>
    [4] =>
)*/
?>