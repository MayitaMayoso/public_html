<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<title>Tiender</title>
</head>

<body>
	<!-- NAVIGATOR OF THE PAGE, IF THE USER IS LOGGED IN IT WILL CHANGE -->
	<?php
	$fotousuario = '/resources/usuarios/';
	$action=$_GET['action'] ?? null;
	switch ($action) {
		case 'checkin':
	        require __DIR__. '/mvc/controller/checkin.php';
	        break;
	    case 'login':
	    	require __DIR__. '/mvc/controller/login.php';
	    	break;
	    case 'cuenta':
	    	require __DIR__. '/mvc/controller/cuenta.php';
	    	break;
	    case 'pedidos':
	    	require __DIR__. '/mvc/controller/pedidos.php';
	    	break;
	    case 'carrito':
	    	require __DIR__. '/mvc/controller/carrito.php';
	    	break;
	    case 'logout':
	    	require __DIR__. '/mvc/controller/logout.php';
	    	break;
    } ?>
	<nav>
		<?php require __DIR__.'/mvc/controller/navigator.php'; ?>
	</nav>

	<!-- MAIN CONTENT OF THE PAGE -->
	<div class="content" id="content">		
		<?php require __DIR__.'/mvc/controller/categories.php'; ?>
	</div>
</body>

</html>