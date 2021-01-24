<?php
require_once __DIR__ . '/../model/connection.php';
require_once __DIR__.'/../model/modify.php';
$connexio=connect();
$id=$_SESSION['ID'];
$name = $_POST['PASSWORD'];
$mail = $_POST['MAIL'];
$address = $_POST['ADDRESS'];
$password = $_POST['PASSWORD'];

$name = htmlentities($_POST['name'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
$mail = htmlentities($_POST['mail'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
$password = htmlentities($_POST['password'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
$address = htmlentities($_POST['address'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
$hash = password_hash($password, PASSWORD_DEFAULT);

if (!empty($_FILES['IMG']))
{
    $img="img".$id;
    $path=$pathlocal.$img;
    move_uploaded_file($_FILES['IMG']['tmp_name'],$path);
    addImage($connexio,$id,$img);//funcio per guardar la ruta a la base de dades
}


if(modify($name, $mail, $hash, $address, $connection, $id)) {
    require_once __DIR__.'/account.php';
}