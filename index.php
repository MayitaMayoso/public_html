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
	$action=$_GET['action'] ?? null;
	switch ($action) {
		case 'checkin':
	        require __DIR__ . '/mvc/controller/checkin.php';
	        break;
	    case 'login'
	    	require __DIR__ . 'mvc/controller/login.php';
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