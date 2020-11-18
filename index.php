<?php
// index.php

$accio = $_GET['accio'];

switch ($accio) {
	case 'productes':
		include __DIR__.'/resource_productes.php';
		break;
	case 'product':
		include __DIR__.'/resource_product.php';
		break;
	default:
		include __DIR__.'/resource_inici.php';
		break;
}
?>