<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<script src="js/ajax_JS.js"></script>
	<title>Tiender - </title>
</head>

<body>

	<nav>
		<a href="index.html"><img class="logo" src="resources/logo1.png" /></a>

		<div class="nav-space"></div>

		<ul class="nav-links">
			<li><a href="index.html">Inicio</a></li>
			<li><div></div></li>
			<li><div></div></li>
			<li><a href="#">Check-in</a></li>
			<li><a href="#">Log-in</a></li>
			<li><a href=""><img class="carrito" src="resources/carrito.svg" /></a></li>
		</ul>
	</nav>

	<div class="content">
		<?php require __DIR__.'/controlador/llistar_categories.php'; ?>
	</div>

</body>

</html>






