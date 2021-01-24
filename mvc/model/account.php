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

function modify($name, $mail, $hash, $address, $connexio, $id) {
    try {
        $query = $connexio->prepare("
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

function subirimg($connexio,$id,$path)
{
    try {
        $query = $connexio->prepare("UPDATE CUSTOMERS SET `IMG`=:pathimg  WHERE ID=".$id);
        $query->bindValue(':pathimg', $path);

        if($query->execute())
            return true;
        else
            return false;

    }catch(PDOException $e)
    {echo "Error:" .$e->getMessage();}
}

?>
