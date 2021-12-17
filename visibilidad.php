<?php
//Clase
class Clase
{
    public $public = "variable publica";
    protected $protected = "variable protegida";
    private   $private   = "variable privada";

    function iterateVisible(){
       echo "Contenido dentro de la clase:</br></br>";
       foreach ($this as $clave => $valor) {
           print "$clave => $valor</br></br>";
       }
    }
}

//Clase Hija





//A partir de un objeto
$objeto = new Clase();

echo "Contenido fuera de la clase:</br></br>";
foreach($objeto as $clave => $valor) {
    print "$clave => $valor</br></br>";
}
echo "</br>";
$objeto->iterateVisible();
?>