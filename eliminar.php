<?php
include ("conexion.php");
mysqli_query($conexion, "DELETE FROM clientes WHERE id=$id");
header("location:mostrar.php");