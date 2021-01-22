<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
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