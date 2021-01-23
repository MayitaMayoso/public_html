<?php

function user($connexio,$id)
{
    try {
        $consulta_usuario = $connexio->prepare("SELECT * from CUSTOMER where ID=".$id);
        $consulta_usuario->execute();
        $usuario_resultat = $consulta_usuario->fetchAll(PDO::FETCH_ASSOC);
        return $usuario_resultat;
    } catch
    (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

}