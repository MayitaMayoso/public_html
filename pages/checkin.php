<head>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<title>Tiender</title>
</head>
<body>
	<nav>		
		<?php require __DIR__.'/navigator.php'; ?>
	</nav>
	
	<div class="registre">
	    <?php include_once __DIR__.'../controller/checkin.php';?>
	</div>
</body>
</html>