<?php
function login(string $mail,string $password)
{
    try {
        $connection=connect();
        $query = $connection->prepare("SELECT * FROM CUSTOMERS WHERE MAIL=:MAIL LIMIT 1");
        $query->bindValue(':MAIL', $mail);
        $query->execute();
        print_r($query);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        print("\n");
        print_r($result);
        if ($result == false) return null;
        return password_verify($password,$result['PASSWORD']) ? $result : 0;

    }catch(PDOException $e){echo 'Error :' .$e->getMessage();}

}