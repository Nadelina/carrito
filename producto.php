<?php
session_start();
if(!isset($_SESSION['contador'])){$_SESSION['contador']=0;}
include 'conexion.php';
include 'header.php';
$peticion = "SELECT * FROM productos WHERE idproducto=".$_GET['idproducto']." LIMIT 1";
$resultado = mysqli_query($conexion, $peticion);
while ($fila = mysqli_fetch_array($resultado)) {
     echo "<article>";
     $peticion2 = "SELECT * FROM imagenesproductos WHERE idproducto =".$fila['idproducto']."";
     $resultado2 = mysqli_query($conexion, $peticion2)or die(mysql_error());
     while ($fila2 = mysqli_fetch_array($resultado2)) {
          echo "<img src='img/".$fila2['imagen']." 'width=100px>";
     }
     echo "<h3>".$fila['nombre']."</h3>";
     echo "<p>Precio: $".$fila['precio']."</p>";
     echo "<a href='index.php'> <button class='botondos'>Regresar</button></a>";
     echo "<button class='botondos botoncompra' value='".$fila['idproducto']."'>Comprar ahora</button>";
     echo "</article>";
}
mysqli_close($conexion);
?>
