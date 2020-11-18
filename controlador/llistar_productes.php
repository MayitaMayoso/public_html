<?php

require_once __DIR__ . '/../model/connectaDB.php';
require_once __DIR__ . '/../model/m_categories.php';
require_once __DIR__ . '/../model/m_productes.php';
$connexio = connectaDB();
$categoria=$_GET['CATEGORY_ID']?(int)$_GET['CATEGORY_ID']:1111;

$resultat_categoria=getCategoria($categoria,$connexio);
$resultat_productes =getProduct($categoria,$connexio);

include_once __DIR__ . '/../view/v_productes.php';

?>
