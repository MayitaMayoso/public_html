<?php
require_once __DIR__ . '/connection.php';

function getCategoria($categoria,$connexio)
{
    try {
        $consulta_categoria = $connexio->prepare("SELECT * from CATEGORIES where ID=".$categoria);
        $consulta_categoria->execute();
        $resultat_categoria = $consulta_categoria->fetchAll(PDO::FETCH_ASSOC);
    } catch
    (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    return ($resultat_categoria);
}

function getProduct($categoria,$connexio)
{
    try {
        $consulta_product= $connexio->prepare("SELECT * from PRODUCTS where CATEGORY_ID=".$categoria);
        $consulta_product->execute();
        $resultat_products = $consulta_product->fetchAll(PDO::FETCH_ASSOC);
    } catch
    (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    return ($resultat_products);
}
?>
