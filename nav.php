<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <ul>
        <li><a href="./index.php">iniciar sesion</a> </li> 
        <li><a href="./mostrar.php">estado del pedido</a></li>
        <li><a href="./salir.php">salir</a></li>
        </ul> 
        <div class="tiempo"> 
        <?php include('datos.php');
         echo $hora;
        ?>
        </div>
    </nav>
    