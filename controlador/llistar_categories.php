<?php

require_once __DIR__ . '/../model/connectaBD.php';
require_once __DIR__ . '/../model/m_categories.php';

$connexio = connectaBD();
$resultat_categories = getCategories($connexio);

require __DIR__ . '/../vista/v_categories.php';

?>