<?php  

session_start();

if (isset($_SESSION['admin'])){
include ("nav.php");

?>
<section class="cuadro">
    <?php
      include("conexion.php");
    $consulta = "SELECT * FROM clientes";
    $result = mysqli_query($conexion,$consulta);
    if(!$result) 
    {
        echo "No se ha podido realizar la consulta";
    }
    echo "<table>";
    echo "<tr>";
    echo "<th><h1>id</th></h1>";
    echo "<th><h1>Nombre</th></h1>";
    echo "<th><h1>apellido</th></h1>";
    echo "<th><h1>celular</th></h1>";
    echo "<th><h1>imagen</th></h1>";
    echo "<th><h1> opciones 1</th></h1>";
    echo "<th><h1> opciones 2</th></h1>";
    echo "<th><h1> opciones 3</th></h1>";
    echo "</tr>";
   
    while ($colum = mysqli_fetch_array($result))
     {     
       
        echo "<tr>";
        echo "<td><h2 style='color:black;'>" . $colum['id']. "</td></h2>";
        echo "<td><h2 style='color:black';'>" . $colum['nombre']. "</td></h2>"; 
        echo "<td><h2 style='color:black;'>" . $colum['apellido']. "</td></h2>";
        echo "<td><h2 style='color:black;'>" . $colum['celular']. "</td></h2>";
        echo "<td><h2 style='color:black;'>" . $colum['imagen']. "</td></h2>";
        echo "<td><h2>" . '<a href="eliminar.php" style="color:black;">eliminar</a>' ."</td></h2>";
        echo "<td><h2>" . '<a href="editar_estado.php" style="color:black;">editar</a>' . "</td></h2>";
        echo "<td><h2>" . '<a href="salir.php" style="color:black;">finalizar</a>' . "</td></h2>";
      
        echo "</tr>";
    }
    echo "</table>";
    
    mysqli_close( $conexion );
    
       //echo "Fuera " ;
       echo'<a href="index.php"> Volver Atrás</a>';

    ?>
    <?php
     }
    ?>

</section>

<?php
include ("footer.php");
?>