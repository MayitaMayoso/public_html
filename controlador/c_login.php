<?php
require_once __DIR__.'/../model/connecta.php';
require_once __DIR__.'/../model/m_users.php';


if($_SERVER['REQUEST_METHOD']=='POST') {
    $filters = filter_input_array(
        INPUT_POST, [
            'mail' => FILTER_DEFAULT,
            'password' => FILTER_DEFAULT,
        ]
    );

    $mail = $filters['mail'];
    $password = $filters['password'];
    $user = login($mail, $password);
    return;
}


require __DIR__.'/../view/v_login.php';