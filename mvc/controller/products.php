<?php

require_once __DIR__ . '/../model/connection.php';
require_once __DIR__ . '/../model/categories.php';
require_once __DIR__ . '/../model/products.php';
$connexio = connect();
$categoria=$_GET['cat'];

$resultat_categoria = getCategoria($categoria,$connexio);
$resultat_products = getProduct($categoria,$connexio);

include_once __DIR__ . '/../view/products.php';

?>
