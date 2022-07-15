<?php include('nav.php'); ?>
<section>

<form action="sesioninicio.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <label for="usuario">usuario</label>
                <input type="text" name="usuario" id="usuario">
                <label for="clave">clave</label>
                <input type="password" name="clave" id="clave">  
              <input type="submit" value="enviar" class="btn">
            </fieldset>
</form>
<?php
if(isset ($_get['error'])){
  echo "datos incorrectos";
}
?>
</section>

<?php include('footer.php'); ?>