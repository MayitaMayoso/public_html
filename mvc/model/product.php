<?php
require_once __DIR__ . '/connection.php';
function getProduct($id,$connexio){
    try {
        $query = $connexio->prepare("SELECT * from PRODUCTS where ID=".$id);
        $query->execute();
        $product = $consulta_product->fetchAll(PDO::FETCH_ASSOC);
        return $product[0];
    } catch
    (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
