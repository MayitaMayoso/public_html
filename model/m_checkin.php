<?php
function registre($name, $mail, $hash, $address, $connexio) {
    try {
        $consulta_registre = $connexio->prepare("INSERT INTO CUSTOMERS (NAME, MAIL, PASSWORD, ADDRESS) VALUES ('Agustin', 'molina.uasug@gmail.com', '1234', 'calle 12')");

        $consulta_registre->bindValue(':mail', $mail);
        $consulta_registre->bindValue(':hash', $hash);
        $consulta_registre->bindValue(':name', $name);
        $consulta_registre->bindValue(':address', $address);

        if( $consulta_registre->execute() ){
            echo "Te has registrado";
        } else {
            echo"Error";
        }

    }catch(PDOException $e)
    {echo "Error:" .$e->getMessage();}


}