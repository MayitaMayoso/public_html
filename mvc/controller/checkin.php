<?php
require_once __DIR__.'/../model/connection.php';
require_once __DIR__.'/../model/checkin.php';

if($_SERVER['REQUEST_METHOD']=='POST') {
    $name = htmlentities($_POST['name'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $mail = htmlentities($_POST['mail'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $password = htmlentities($_POST['password'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $address = htmlentities($_POST['address'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $connexio = connect();
    if (registre($name, $mail, $hash, $address, $connexio)) {
        print_r($mail);
    	require __DIR__.'/../view/checkindata.php';
	} else {
        echo "Error de registro";
    }
} else {
    require __DIR__.'/../view/checkin.php';
}
?>