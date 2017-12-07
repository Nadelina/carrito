<?php include "header.php"; ?>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<div class="confirmar">
<br>
	¿Ya eres usuario?
<br>
<form action="login.php" method="POST">
	<input class="login" type="text" name="usuario" placeholder="Introduce tu nombre de usuario" required="">
	<input class="login" type="password" name="contraseña" placeholder="Introduce tu contraseña" required="">
	<button class='boton' type="submit">Enviar</button>
</form>
	¿Eres usuario nuevo?
<br>
</div>