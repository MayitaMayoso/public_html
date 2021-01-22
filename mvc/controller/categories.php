<?php

require_once __DIR__ . '/../mvc/model/connection.php';
require_once __DIR__ . '/../mvc/model/categories.php';

$connexio = connectaBD();
$resultat_categories = getCategories($connexio);

require __DIR__ . '/../mvc/view/categories.php';

?>