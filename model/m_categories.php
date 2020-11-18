<?php


require_once __DIR__ . '/connectaBD.php';

function getCategories($connexio)
{
    try {
        $consulta_categories = $connexio->prepare("SELECT ID,NAME from CATEGORIES");
        $consulta_categories->execute();
        $resultat_categories = $consulta_categories->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    return ($resultat_categories);
}
