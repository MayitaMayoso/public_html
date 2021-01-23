<?php
function login(string $mail,string $password)
{
    try {
        $connexio=connect();
        $bd = 'SELECT * FROM CUSTOMER where MAIL=:MAIL LIMIT:1';
        $conec = $connexio->prepare($bd);
        $conec->execute(
            [
                'MAIL' => $mail,
                #'PASSWORD' => $password,
            ]
        );
        $result = $conec->fetch(PDO::FETCH_ASSOC);
        if ($result == false)
            return null;
        return password_verify($password, $result['PASSWORD']) ? result : 0;

    }catch(PDOException $e){echo 'Error :' .$e->getMessage();}

}