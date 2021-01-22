<?php
require_once __DIR__.'/../model/connectaBD.php';
require_once __DIR__.'/../model/m_checkin.php';

if($_SERVER['REQUEST_METHOD']=='POST') {
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $connexio = connectaBD();
    registre($name, $mail, $hash, $address, $connexio);
    require __DIR__.'/../vista/v_checkindata.php';
} else {
    require __DIR__.'/../vista/v_checkin.php';
}

?>

