<?php
require_once __DIR__.'/../model/connectaBD.php';
require_once __DIR__.'/../model/m_checkin.php';

if($_SERVER['REQUEST_METHOD']=='POST') {
    $name = $_POST['NAME'];
    $mail = $_POST['MAIL'];
    $password = $_POST['PASSWORD'];
    $address = $_POST['ADDRESS'];
    $hash = password_hash($password, PASSWORD_DEFAULT);

    if (empty($data['NAME']) ||
        empty($data['MAIL']) ||
        empty($data['PASSWORD']) ||
        empty($data['ADDRESS']){
        echo('Rellena todos los campos ');
    }
    else {
        $connexio = connectaBD();
        if(registre($name, $mail, $password, $address))
            require __DIR__.'/../view/v_checkin.php';
        else
            require __DIR__.'/../view/v_checkin.php';
        }

}else
{require __DIR__.'/../view/v_checkin.php';}

