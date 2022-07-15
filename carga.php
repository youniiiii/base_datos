
<?php
session_start();
 include("conexion.php");
 include('nav.php'); 
if (isset($_SESSION['admin'])){ ?>



<section class="mi_cuadro">
<?php 
  $numero1  = rand(0,9);
  $letra = array ('z','q','t','o','k','g','a','w','P','s');
  $numero2 = rand(0,9);
  $simbolo = array('%','&','$','*','#','@','/');
 
  
  $mescla_letras = rand(0,9);
  
  $mescla_simbolo = rand(0,6);
  
  $_SESSION['captcha'] = $numero1 . $letra[$mescla_letras]. $numero2. $simbolo[$mescla_simbolo];
  
  
  ?>
    <h1>enviar compra</h1>
<form action="variable.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <label for="nombre">nombre</label>
                <input type="text" name="nombre" id="nombre">

                <label for="apellido">apellido</label>
                <input type="text" name="apellido" id="apellido">

                <label for="imagen">imagen</label>
                <input type="file" name="imagen" id="imagen">

                <label for="celular">celular</label>
                <input type="tel" name="celular" id="celular">
            
                <select name="estado" id="estado">
                    <option value="procesando">procesando</option>
                    <option value="finalizado">finalizado</option>
                </select>
                <img src="captcha.php" width="60px" height=" 30px" alt="">
                <input type="text" name="captcha">

                <input type="submit" value="enviar" class="btn">
                

            </fieldset>
</form>
<?php 
if (isset($_GET['error'])){
    echo"<h2>envio realizado</h2>";
}?>
</section>


<?php 

include('footer.php'); ?>
<?php 

}else{ 
echo 'no se pudo';

}
?>
