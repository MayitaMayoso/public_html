<?php
require_once __DIR__.'/../model/connection.php';
require_once __DIR__.'/../model/users.php';


if($_SERVER['REQUEST_METHOD']=='POST') {
    $mail=$_POST['MAIL'];
    $is_email=filter_var($mail,FILTER_VALIDATE_EMAIL)!==false;
    $password=$_POST['PASSWORD'];
    $password = htmlentities($password, ENT_QUOTES | ENT_HTML5, 'UTF-8');

    $user = login($mail, $password);
    if ($user) {
    	$_SESSION['ID'] = $user['ID'];
    	echo "te has logueado";
    }
    else {
    	echo "error de login";
    	__DIR__.'/../view/login.php';
    }
    #return;
}
else {
	require __DIR__.'/../view/login.php';
}