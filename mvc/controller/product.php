<?php
	require_once __DIR__ . '/../model/connection.php';
	require_once __DIR__.'/../model/product.php';

	$connexio = connect();
	$id=$_GET['product'];
	$product=getProduct($id,$connexio);

	require_once __DIR__.'/../view/product.php';
?>

