<?php
require_once __DIR__.'/../model/connection.php';
require_once __DIR__.'/../model/users.php';


if($_SERVER['REQUEST_METHOD']=='POST') {
    var_dump($_POST);
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
        var_dump($user);
        $_SESSION['ID'] = $user['ID'];
        echo "te has logueado";
    } else {
        var_dump($user);
        echo "error de login";
        __DIR__.'/../view/login.php';
    }
} else {
	require __DIR__.'/../view/login.php';
}