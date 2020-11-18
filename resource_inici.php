<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<script src="javascript/crida.js"></script>
	<script src="javascript/jquery-3.5.1.min.js"></script>
	<title>Tiender</title>
</head>

<body>

	<nav>
		<?php require __DIR__.'/resource_navigator.php'; ?>
	</nav>

	<div class="content">
		<?php require __DIR__.'/controlador/llistar_categories.php'; ?>
	</div>

</body>

</html>






