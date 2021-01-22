<?php
$action = $_GET['action'];
switch ($action) {
    case 'products':
        include __DIR__.'/mvc/controller/products.php';
        break;
    case 'product':
        include __DIR__.'/mvc/controller/product.php';
        break;
    case 'checkin':
        include __DIR__.'/mvc/controller/checkin.php';
        break;
    case 'login':
        include __DIR__.'/mvc/controller/login.php';
        break;
}
?>