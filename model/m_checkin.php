<?php
function registre($name, $mail, $hash, $address, $connexio) {
    try {
        $consulta_registre = $connexio->prepare("INSERT INTO CUSTOMERS (NAME, MAIL, PASSWORD, ADDRESS) VALUES (:nom, :mail, :hash, :address)");

        $consulta_registre->bindValue(':mail', $email);
        $consulta_registre->bindValue(':hash', $hash);
        $consulta_registre->bindValue(':name', $name);
        $consulta_registre->bindValue(':address', $address);

        if($consulta_registre->execute()){echo "Te has registrado";}
        else{echo"Error";}

    }catch(PDOException $e)
    {echo "Error:" .$e->getMessage();}


}