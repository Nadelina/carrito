<?php
session_start();
if (!isset($_SESSION['contador'])) {$_SESSION['contador']=0;
}
include 'conexion.php';
include 'header.php';
$peticion = "SELECT * FROM productos";
$resultado = mysqli_query($conexion, $peticion);
echo "<meta charset='UTF-8'>";
while ($fila = mysqli_fetch_array($resultado)) {
     echo "<article>";
     $peticion2 = "SELECT * FROM imagenesproductos WHERE idproducto =".$fila['idproducto']." LIMIT 1";
     $resultado2 = mysqli_query($conexion, $peticion2)or die(mysql_error());
     while ($fila2 = mysqli_fetch_array($resultado2)) {
          echo "<img src='img/".$fila2['imagen']."'>";
    }
    echo "<div class='datos'>";
   echo "<h3>".$fila['nombre']."</h3>";
   echo "<p> Precio: $".$fila['precio']."</p>";
   echo "<a href='producto.php?idproducto=".$fila['idproducto']."'><button class='botondos'>Más información</button></a>";
   echo "<button class='botondos botoncompra' value='".$fila['idproducto']."' >Comprar ahora</button>";
   echo "</div>";
   echo "</article><br>";
}
mysqli_close($conexion);
?>
