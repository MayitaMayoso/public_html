<?php
require_once __DIR__ . '/connection.php';
function getproduct($id,$connexio){
    try {
        $consulta_product = $connexio->prepare("SELECT * from PRODUCTS where ID=".$id);
        $consulta_product->execute();
        $product_resultat = $consulta_product->fetchAll(PDO::FETCH_ASSOC);
    } catch
    (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    return ($product_resultat);
}
