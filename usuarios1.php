<?php
/**
 * Created by PhpStorm.
 * User: conve
 * Date: 17/11/2016
 * Time: 05:30 PM
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    if (!isset($_SESSION["usuario"])){
        header("location:login.php");
    }
?>
    <h1>Bienvenidos usuarios</h1>
<?php
echo "Hola: ".$_SESSION["usuario"];
?>
    <p>Solo usuarios registados</p>
<a href="usuarios.php">Regresar</a>
<a href="cierre.php">Cerrar sesión</a>
</body>
</html>
