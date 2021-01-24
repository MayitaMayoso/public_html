<?php
function modify($name, $mail, $hash, $address, $connexio) {
    try {
        $query = $connection->prepare("
            UPDATE CUSTOMERS
            SET MAIL=:mail, PASSWORD=:hash, NAME:name, ADDRESS=:address
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
