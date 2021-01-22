<?php
	require_once __DIR__ . '/../model/connectaBD.php';
	require_once __DIR__.'/../model/m_product.php';

	$connexio = connectaBD();
	$id=$_GET['product'];
	$resultat_producte=getProducte($id,$connexio);

	require_once __DIR__.'/../vista/v_product.php';
?>

