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
		<?php require __DIR__.'/controller/navigator.php'; ?>
	</nav>

	<!-- MAIN CONTENT OF THE PAGE -->
	<div class="content">
		<?php
			if ( isset($_GET['action']) ) {
				$action = $_GET['action'];
				switch ($action) {
					case 'productes':
						include __DIR__.'controller/productes.php';
						break;
					case 'product':
						include __DIR__.'controller/product.php';
						break;
					case 'checkin':
						include __DIR__.'controller/checkin.php';
						break;
					case 'login':
						include __DIR__.'controller/login.php';
						break;
				}
			} else {
				include __DIR__.'/categories.php';
			}
		?>
	</div>
</body>

</html>