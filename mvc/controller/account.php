<?php
require_once __DIR__.'/../model/connection.php';
require_once __DIR__.'/../model/account.php';

if($_SERVER['REQUEST_METHOD']=='POST') {    
    if (!isset($_SESSION['ID']))
        session_start();    
        
    $password = filter_var(
        $_POST['password'],
        FILTER_VALIDATE_REGEXP,
        array(
            "options"=>array(
                "regexp"=>
                "€ ^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$ €"
            )
        )
    );

    if ($password) {
        $name = htmlentities($_POST['name'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $mail = htmlentities($_POST['mail'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $password = htmlentities($_POST['password'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $address = htmlentities($_POST['address'], ENT_QUOTES | ENT_HTML5, 'UTF-8');    
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $connexio = connect();
        modify($name, $mail, $hash, $address, $connexio);
        $_SESSION['NAME'] = $name;
        header( "Location: /../../index.php" );
    } else {
        echo "Error de registro contraseña muy floja, utilice al menos una mayúscula, minúscula, número, símbolo y 8 carácteres.";
        require __DIR__.'/../view/account.php';
    }
} else {
    require __DIR__.'/../view/account.php';
}
?>