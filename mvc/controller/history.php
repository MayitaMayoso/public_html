<?php
    if (!isset($_SESSION['ID']))
        session_start();
	require_once __DIR__ .'/../model/connection.php';
    require_once __DIR__.'/../model/order.php';
    
    $connection = connect();    
    $history = getHistory($connection);

    foreach ($history as $order):
        $products = getProducts($order, $connection);
        require_once __DIR__.'/../view/history.php'
    endforeach;
?>