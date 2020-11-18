<?php
	require_once __DIR__ . '/../model/connectaDB.php';
	require_once __DIR__.'/../model/m_product.php';

	$connexio = connectaBD();
	$id=$_GET['PRODUCT']?(int)$_GET['PRODUCT']:1;
	$resultat_producte=getProducte($id,$connexio);

	require_once __DIR__.'/../view/v_product.php';
?>

