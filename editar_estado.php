<?php
include('conexion.php');

mysqli_query($conexion, "UPDATE FROM clientes SET  nombre ='$nombre' . apellido='$apellido' . imagen='$imagen' . celular='$celular'. estado='$estado' WHERE id ='$id'");

 header( "lacation: mostrar.php");

?>