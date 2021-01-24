<?php
require_once __DIR__.'/../model/connection.php';
require_once __DIR__.'/../model/checkin.php';

if($_SERVER['REQUEST_METHOD']=='POST') {
    console.log("checkin done");
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $connexio = connect();
    if (registre($name, $mail, $hash, $address, $connexio)) {
    	require __DIR__.'/../view/checkindata.php';
	}
} else {
    console.log("to do the checkin");
    require __DIR__.'/../view/checkin.php';
}
?>