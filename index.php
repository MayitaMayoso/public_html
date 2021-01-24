<!DOCTYPE html>
<html>

<head>
	<link rel="shortcut icon" href="#" />
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<title>Tiender</title>
</head>

<body>
	<!-- NAVIGATOR OF THE PAGE, IF THE USER IS LOGGED IN IT WILL CHANGE -->
	<nav>
		<?php require __DIR__.'/mvc/controller/navigator.php'; ?>
	</nav>

	<!-- MAIN CONTENT OF THE PAGE -->
	<div class="content" id="content">		
		<?php require __DIR__.'/content.php'; ?>
	</div>
</body>

</html>