<head>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<title>Tiender</title>
</head>
<body>
	<nav>
		<a href="index.php"><img class="logo" src="resources/logo1.png" /></a>

		<div class="nav-space"></div>

		<ul class="nav-links">
			<li><a href="index.php">Inicio</a></li>
			<li><div></div></li>
			<li><div></div></li>
			<li><a href="http://tdiw-e13.deic-docencia.uab.cat/?action=checkin" target="_self">Check-in</a></li>
			<li><a href="http://tdiw-e13.deic-docencia.uab.cat/?action=login" target="_self">Log-in</a></li>
			<li><a href=""><img class="carrito" src="resources/carrito.svg" /></a></li>
		</ul>
	</nav>
	
	<div class="registre">
	    <?php include_once __DIR__.'/controlador/c_checkin.php';?>
	</div>
</body>
</html>