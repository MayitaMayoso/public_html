<?php

function user($connexio,$id)
{
    try {
        $usuari_consulta = $connexio->prepare("SELECT * from Usuari where id=".$id);
        $usuari_consulta->execute();
        $resultat_usuari = $usuari_consulta->fetchAll(PDO::FETCH_ASSOC);
        return $resultat_usuari;
    } catch
    (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

}