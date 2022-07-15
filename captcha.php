<?php //capcha 
session_start();
header("content-type:image/jpeg");

    
$imagen_captcha = imagecreate (60,20);
$fondo = imagecolorallocate($imagen_captcha,120,10,5);
$texto_capcha = imagecolorallocate($imagen_captcha,200,208,254);
imagestring($imagen_captcha,2,15,5,$_SESSION['captcha'],$texto_capcha);
imagejpeg($imagen_captcha);
