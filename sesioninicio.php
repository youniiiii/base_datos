<?php 
session_start();
include('conexion.php');


$usuario = $_POST ['usuario'];
$clave = $_POST ['clave'];

$consulta ="SELECT * FROM adminuser WHERE usuario = '$usuario' AND clave = '$clave'";
$resultado = mysqli_query($conexion,$consulta);
$misfilas = mysqli_num_rows($resultado);

if ($_POST['usuario'] == 'admin' &&  $_POST['clave'] == 'admin1234'){
    $_SESSION['admin'] = $_POST['usuario'];
    header("location:carga.php");
}else{  
    echo "no conecta";
   // header('location:index.php?error');
}
mysqli_free_result($resultado);
mysqli_close($conexion);



