<?php
session_start();

if(empty($_SESSION)){
	header("location:Form.php");

	exit();
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TALLER</title>
</head>

<body>
    <h1>Hola <?php echo "</br>". $_SESSION["Username"]?></h1>

    <button><a href="LogOut.php">Cerrar Sesion</a></button>
</body>
</html>
?>