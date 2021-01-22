<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<script src="javascript/jquery-3.5.1.min.js"></script>
	<title>Tiender</title>
</head>

<body>
	<!-- NAVIGATOR OF THE PAGE, IF THE USER IS LOGGED IN IT WILL CHANGE -->
	<nav>
		<?php require __DIR__.'/mvc/controller/navigator.php'; ?>
	</nav>

	<!-- MAIN CONTENT OF THE PAGE -->
	<div class="content">
		<?php
			if ( isset($_GET['action']) ) {
				$action = $_GET['action'];
				switch ($action) {
					case 'products':
						include __DIR__.'/mvc/controller/products.php';
						break;
					case 'product':
						include __DIR__.'/mvc/controller/product.php';
						break;
					case 'checkin':
						include __DIR__.'/mvc/controller/checkin.php';
						break;
					case 'login':
						include __DIR__.'/mvc/controller/login.php';
						break;
				}
			} else {
				include __DIR__.'/mvc/controller/categories.php';
			}
		?>
	</div>
</body>

</html>