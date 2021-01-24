<?php
	require_once __DIR__ . '/../model/connection.php';
	require_once __DIR__.'/../model/order.php';

    $connection = connect();    
    $order = getOrder($connection);
    print_r($order);
    //$products = getProducts($order, $connection);
    
	//require_once __DIR__.'/../view/floating-cart.php';
?>