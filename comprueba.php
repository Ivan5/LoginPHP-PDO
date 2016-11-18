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
try{
    $usuario=htmlentities(addslashes($_POST['usuario'])); //Quitar caracteres y espacio que pudieran haber sido introducidos
    $password=htmlentities(addslashes($_POST['password']));

    $base = new PDO('mysql:host=localhost;dbname=prueba','root',''); /*Se crea la conexión con el nombre del host, el nombre de la base de datos, usuario y contraseña*/
    $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $query = "SELECT * FROM usuarios WHERE usuario=:usuario AND password=:password";//SE crea la consulta con los marcadores :usuario y :password
    $row = $base->prepare($query); //Se prepara el query

    $row->bindValue(":usuario",$usuario); // se asignan los valores a los marccadores
    $row->bindValue(":password",$password);

    $row->execute(); //se ejecuta el query

    $cantidad = $row->rowCount(); //verificar la cantidad de registros obtenidos
    if ($cantidad !=0){
        session_start();
        $_SESSION["usuario"] = $_POST['usuario'];
        header("location:usuarios.php");
    }else{
        header("location:login.php"); // Si no existe se redirecciona a la pagina de login
    }

}catch(Exception $e){
    die("Error: ".$e->getMessage());
}
?>
</body>
</html>