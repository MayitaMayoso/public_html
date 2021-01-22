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
		<?php require __DIR__.'/navigator.php'; ?>
	</nav>

	<div class="products">
        <?php require __DIR__."../controller/products.php";?>
    </div>

</body>

</html>