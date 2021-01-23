<?php
require_once __DIR__.'/../model/connection.php';
require_once __DIR__.'/../model/users.php';


if($_SERVER['REQUEST_METHOD']=='POST') {
    $filters = filter_input_array(
        INPUT_POST, [
            'MAIL' => FILTER_DEFAULT,
            'PASSWORD' => FILTER_DEFAULT,
        ]
    );

    $mail = $filters['MAIL'];
    $password = $filters['PASSWORD'];
    $user = login($mail, $password);

    if ($user) {
    	$_SESSION['ID'] = $user['ID'];
    	echo "te has logueado";
    	require __DIR__.'/../view/login_result.php';
    }
    else {
    	echo "error de login";
    	var_dump($mail);
    	var_dump($password);
    }
    #return;
}
require __DIR__.'/../view/login.php';