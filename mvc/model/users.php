<?php
function login(string $mail,string $password)
{
    try {
        $connexio=connect();
        $bd = 'SELECT ID, `MAIL` FROM CUSTOMER where MAIL=:mail AND PASSWORD=:password LIMIT:1';
        $conec = $connexio->prepare($bd);
        $conec->execute(
            [
                'mail' => $mail,
                'password' => $password,
            ]
        );
        $result = $conec->fetch(PDO::FETCH_ASSOC);

    }catch(PDOException $e){echo 'Error :' .$e->getMessage();}
     return $result !== false ? $result : [];

     return password_verify($password, $result['password']) ? result : null;
}