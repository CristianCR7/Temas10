<?php
class MiClase
{
    public $public1 = "variable publica";
    public $public2 = "variable publica 2";
    public $public3 = "variable publica 3";
    protected $protected = "variable protegida";
    private   $private   = "variable privada";

    function iterateVisible() {
       echo "foreach dentro de la clase:</br></br>";
       foreach ($this as $clave => $valor) {
           print "$clave => $valor</br></br>";
       }
    }
}

$objeto = new MiClase();
echo "foreach fuera de la clase:</br></br>";
foreach($objeto as $clave => $valor) {
    print "$clave => $valor</br></br>";
}

echo "</br>";
$objeto->iterateVisible();
?>