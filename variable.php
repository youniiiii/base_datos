
<?php
session_start();
include('conexion.php');
$codigo_captcha = $_POST['captcha'];
if($codigo_captcha == $_SESSION['captcha']){
$apellido =  $_POST["apellido"] ;
$nombre =  $_POST["nombre"] ;
$celular = $_POST ["celular"] ;
// al cargar una imagen  usamos  files    en ves de post o get
$imagen = $_FILES["imagen"]["name"];
$imagen_altoxancho = $_FILES["imagen"]["size"];
$imagen_tipo = $_FILES["imagen"]["type"];
$destino = 'imagenes/'.$imagen ;
$estado = $_POST ["estado"];
//   comienzo de if   una funcion para  validar solo un tipo o varios tipos de    formato de  imagen
 $orden ="INSERT INTO clientes (nombre,apellido,imagen,celular, estado)
    VALUES ('$nombre','$apellido','$imagen','$celular', '$estado ')";
if(($imagen_tipo !='image/jpg'  && $imagen_tipo !='image/gif' && $imagen_tipo !='image/jpeg' && $imagen_tipo !=   'image/png') or $imagen_altoxancho < 12000){
    header("location: carga.php?error");
}
else{ move_uploaded_file($imagen,$destino);
    mysqli_query($conexion,$orden);
    echo "subida con exito";
};
header('location:carga.php?ok');
} else{
    header('location:carga.php?error_codigo');
}