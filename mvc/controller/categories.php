<?php

require_once __DIR__ . '/../model/connection.php';
require_once __DIR__ . '/../model/categories.php';

$connexio = connectaBD();
$resultat_categories = getCategories($connexio);

require __DIR__ . '/../view/categories.php';

?>