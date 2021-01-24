<?php
require_once __DIR__.'/../model/connection.php';
require_once __DIR__.'/../model/users.php';


if($_SERVER['REQUEST_METHOD']=='POST') {
    $mail = $_POST['MAIL']; 
    $password = $_POST['PASSWORD'];
    $user = login($mail, $password);
    if ($user) {
        var_dump($user);
        $_SESSION['ID'] = $user['ID'];
        require __DIR__.'content.php';
    } else {
        var_dump($user);
        require __DIR__.'/../view/login.php';
    }
} else {
	require __DIR__.'/../view/login.php';
}