<?php
// index.php

$action = $_GET['action'];

switch ($action) {
	case 'productes':
		include __DIR__.'/resource_productes.php';
		break;
	case 'product':
		include __DIR__.'/resource_product.php';
		break;
	case 'checkin':
		include __DIR__.'/checkin.php';
		break;
	case 'login':
		include __DIR__.'/login.php';
		break;
	default:
		include __DIR__.'/resource_inici.php';
		break;
}
?>