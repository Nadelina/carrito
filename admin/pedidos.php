<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="../css/estilo.css">
<link rel="icon" href="../img/favicon.png" type="image/png">
<title>Tienda</title>
</head>
<body>
     <header class="">
		<h1 class=""><a href="index.php">Panel de control</a></h1>
		<h2 class=""><small>Subtítulo de la tienda</small></h2>
	</header>
     <section class="">
          <ol class="">
               <li class=""><a href="../index.php">Tienda</a></li>
               <li class=""><a href="index.php">Administración</a></li>
               <li class="">Pedidos</li>
          </ol>
     </section>
          <section class="container">
               <ul class="">
                 <li class=>
                   <a class="" href="pedidos.php">Pedidos</a>
                 </li>
                 <li class="">
                   <a class="" href="#">Clientes</a>
                 </li>
                 <li class="">
                   <a class="" href="#">Productos</a>
                 </li>
               </ul>
          </section>
     <section class="container">
          <table class="t">
               <thead>
                    <tr>
                         <th>Nombre</th>
                         <th>Estado</th>
                         <th>Gestionar</th>
                         <th>Enviar</th>
                         <th>Cancelar</th>
                    </tr>
               </thead>
               <tbody>
               <?php
               include '../conexion.php';
               mysqli_set_charset($conexion, "utf8");
               $peticion = "SELECT pedidos.idpedido AS idpedido,fecha,estado,nombre,estado,nombre,apellidos FROM pedidos LEFT JOIN clientes ON pedidos.idcliente = clientes.idcliente ORDER BY estado,fecha ASC";
               $resultado = mysqli_query($conexion, $peticion);
               while ($fila = mysqli_fetch_array($resultado)) {
                    $estado = $fila['estado'];
                    switch ($estado) {
                         case '0': $diestado = "No enviado";break;
                         case '1': $diestado = "Enviado";break;
                         case '2': $diestado = "Anulado";break;
                    }
                    echo'
                    <tr';
                    switch ($estado) {
                         case '0': echo ' class=""';break;
                         case '1': echo ' class=""';break;
                         case '2': echo ' class=""';break;
                    }
                    echo '>
                         <td>'.$fila['nombre']." ".$fila['apellidos'].'</td>
                         <td>'.$diestado.'</td>
                         <td>
                              <a href="gestionarpedido.php?id='.$fila['idpedido'].'">
                                   <button>Gestionar</button>
                              </a>
                         </td>
                         <td>
                              <a href="pedidoservido.php?id='.$fila['idpedido'].'">
                                   <button>Pedido enviado</button>
                              </a>
                         </td>
                         <td>
                              <a href="cancelarpedido.php?id='.$fila['idpedido'].'">
                                   <button>Cancelar Pedido</button>
                              </a>
                         </td>
                    </tr>';
               }
mysqli_close($conexion);
?>             </tbody>
               </table>
          </section>
          <footer class="footer">
               <div class="container">
                    <span class="text-muted">Portafolio de evidencias</span>
               </div>
          </footer>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>
