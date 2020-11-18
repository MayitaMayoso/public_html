<?php
function registre($name, $mail, $password, $address) {
    try {
        $consulta_registre = $connexio->prepare("INSERT INTO CUSTOMERS (NAME, MAIL, PASSWORD, ADDRESS) VALUES (:nom, :mail, :password, :address)");

        $consulta_registre->bindValue(':mail', $email);
        $consulta_registre->bindValue(':password', $password);
        $consulta_registre->bindValue(':name', $name);
        $consulta_registre->bindValue(':address', $address);

        if($consulta_registre->execute()){echo "Te has registrado";}
        else{echo"Error";}

    }catch(PDOException $e)
    {echo "Error:" .$e->getMessage();}


}