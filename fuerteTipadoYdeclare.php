<?php
//El constructor declare es usado para fijar directivas de ejecución para un bloque de código.
declare(strict_types=1);

function sum(int $a, int $b) {
    return $a + $b;
}

var_dump(sum(1, 2));
//Lo siguiente da error:
/*var_dump(sum(1.5, 2.5));*/
?>