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