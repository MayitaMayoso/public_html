<?php

require_once __DIR__ . '/../model/connectaBD.php';
require_once __DIR__ . '/../model/m_categories.php';
require_once __DIR__ . '/../model/m_productes.php';
$connexio = connectaBD();
$categoria=$_GET['CATEGORY_ID']?(int)$_GET['CATEGORY_ID']:1111;

$resultat_categoria=getCategoria($categoria,$connexio);
$resultat_productes =getProduct($categoria,$connexio);

include_once __DIR__ . '/../vista/v_productes.php';

?>
