<?php
function login(string $mail,string $password)
{
    try {
        $connexio=connect();
        $bd = 'SELECT * FROM CUSTOMER where MAIL=:MAIL AND PASSWORD=:PASSWORD LIMIT:1';
        $conec = $connexio->prepare($bd);
        $conec->execute(
            [
                'MAIL' => $mail,
                'PASSWORD' => $password,
            ]
        );
        $result = $conec->fetch(PDO::FETCH_ASSOC);
        return password_verify($password, $result['PASSWORD']) ? result : null;

    }catch(PDOException $e){echo 'Error :' .$e->getMessage();}

}