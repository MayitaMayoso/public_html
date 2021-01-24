<?php
function account($connexio,$id)
{
    try {
        $consulta_usuari = $connexio->prepare("SELECT * from CUSTOMERS where ID=".$id);
        $consulta_usuari->execute();
        $resultat_usuari = $consulta_usuari->fetchAll(PDO::FETCH_ASSOC);
        return $resultat_usuari;
    } catch
    (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

}

function modify($name, $mail, $hash, $address, $connection, $id) {
    try {
        $query = $connection->prepare("
            UPDATE CUSTOMERS
            SET MAIL=:mail, PASSWORD=:hash, NAME=:name, ADDRESS=:address
            WHERE ID=:id
        ");
        $query->bindValue(':mail', $mail);
        $query->bindValue(':hash', $hash);
        $query->bindValue(':name', $name);
        $query->bindValue(':address', $address);
        $query->bindValue(':id', $_SESSION["ID"]);

        $query->execute();
    }catch(PDOException $e) {
        echo "Error:" .$e->getMessage();
    }
}

?>
