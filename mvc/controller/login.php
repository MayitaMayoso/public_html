<?php
require_once __DIR__.'/../model/connection.php';
require_once __DIR__.'/../model/users.php';


if($_SERVER['REQUEST_METHOD']=='POST') {
    $mail = htmlentities($_POST['MAIL'], ENT_QUOTES | ENT_HTML5, 'UTF-8');    
    $password = htmlentities($_POST['PASSWORD'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $user = login($mail, $password);
    if ($user) {
        $_SESSION['ID'] = $user['ID'];
        print_r($_SESSION);
        require __DIR__.'/categories.php';
    } else {
        echo "Error login";
        require __DIR__.'/../view/login.php';
    }
} else {
	require __DIR__.'/../view/login.php';
}