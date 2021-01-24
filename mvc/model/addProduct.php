<?php
require_once __DIR__ . '/../model/connection.php';
require_once __DIR__.'/../model/order.php';

$connection = connect();    
$order = getOrder($connection);
addProduct($_GET["product"], $order, $connection);
?>