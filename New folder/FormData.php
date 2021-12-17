<?php
$username = "Cristian";
$password = 1234;
if(!empty($_POST["username"]) || !empty($_POST["pass"]) ){
    $correo = $_POST["username"];
    $pass = $_POST["pass"];
    if($correo == $username & $pass == $password){

        session_start();

        $_SESSION["Username"] = $username;

        header("location:Menu.php");

    }else{
        echo "Las credenciales son incorrectas";

        echo '<button><a href="Form.php">Volver</a></button>';
    }
}else{
    echo "El formulario esta vacio " . "</br>";

    echo '<button><a href="Form.php">Volver</a></button>';
}

?>