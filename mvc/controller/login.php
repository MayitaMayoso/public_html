<?php
require_once __DIR__.'/../model/connection.php';
require_once __DIR__.'/../model/users.php';


if($_SERVER['REQUEST_METHOD']=='POST') {
    $mail = htmlentities($_POST['MAIL'], ENT_QUOTES | ENT_HTML5, 'UTF-8');    
    $password = htmlentities($_POST['PASSWORD'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $user = login($mail, $password);
    if ($user) {
        echo "Login correcto";
        $_SESSION['ID'] = $user['ID'];
        require __DIR__.'/../../content.php?action=products&cat=1';
    } else {
        echo "Error login"
        require __DIR__.'/../view/login.php';
    }
} else {
	require __DIR__.'/../view/login.php';
}