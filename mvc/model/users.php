

<?php
function login(string $email,string $password)
{
    try {
        $connexio=getConn();
        $sql = 'SELECT * FROM CUSTOMER where MAIL = :email LIMIT 1';
        $conec = $connexio->prepare($sql);
        $conec->execute(
            [
                'email' => $mail,
            ]
        );
        $result = $conec->fetch(PDO::FETCH_ASSOC);
        if($result===false)
            return null;
        echo "hola";
        return password_verify($password,$result['password']) ? $result : 0;


    }catch(PDOException $e){echo 'Error :' .$e->getMessage();}


}