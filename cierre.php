<?php
/**
 * Created by PhpStorm.
 * User: conve
 * Date: 17/11/2016
 * Time: 06:23 PM
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

 session_destroy();

 header("location:login.php");
?>
</body>
</html>
