<?php
 if (!isset($_SESSION['contador'])) {
  $_SESSION['contador']=0;
 }
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="content-type" content="text/html">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/js.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Tienda Dohaeris</title>
</head>
<body>
	<div id="contenedor">
		<header>
			<a href="index.php"><h1>Tienda Dohaeris</h1></a>
			<h2>Los mejores articulos, la mejor cálidad.</h2>
		</header>
		<section>
			<div id="contienecarrito">
				<div id="carrito">
					Carrito
				</div>
				<a href="destruir.php"><button class="boton"><b>Vaciar carrito</button></a>
				<a href="confirmar.php"><button class="boton"><b>Confirma compra</button></a>
		</section>
	</div>


</body>
</html>
