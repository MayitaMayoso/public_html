<?php
require_once __DIR__ . '/connection.php';
function getProducte($id,$connexio){
    try {
        $consulta_producte = $connexio->prepare("SELECT * from PRODUCTS where ID=".$id);
        $consulta_producte->execute();
        $producte_resultat = $consulta_producte->fetchAll(PDO::FETCH_ASSOC);
    } catch
    (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    return ($producte_resultat);
}
