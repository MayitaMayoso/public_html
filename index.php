<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<script type="text/javascript" src="public_html/javascript/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="public_html/javascript/asynchronousLoad.js"></script>
	<title>Tiender</title>
</head>

<body>
	<!-- NAVIGATOR OF THE PAGE, IF THE USER IS LOGGED IN IT WILL CHANGE -->
	<nav>
		<?php require __DIR__.'/mvc/controller/navigator.php'; ?>
	</nav>

	<!-- MAIN CONTENT OF THE PAGE -->
	<div class="content" id="content">		
		<?php require __DIR__.'/mvc/controller/categories.php'; ?>
	</div>
</body>

</html>