<?php
require_once __DIR__.'/../model/connection.php';
require_once __DIR__.'/../model/checkin.php';

if($_SERVER['REQUEST_METHOD']=='POST') {
    $password = filter_var($_POST['password'], FILTER_VALIDATE_REGEX,
    array("options"=>array("regexp"=>"^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$"))));

    if ($password) {
        $name = htmlentities($_POST['name'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $mail = htmlentities($_POST['mail'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $password = htmlentities($_POST['password'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $address = htmlentities($_POST['address'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $connexio = connect();
        registre($name, $mail, $hash, $address, $connexio)
        require __DIR__.'/../view/checkindata.php';
	} else {
        echo "Error de registro contraseña muy floja, utilice al menos una mayúscula, minúscula, número, símbolo y 8 carácteres.";
        require __DIR__.'/../view/checkin.php';
    }
} else {
    require __DIR__.'/../view/checkin.php';
}
?>