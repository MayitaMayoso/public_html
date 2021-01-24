<?php
require_once __DIR__ . '/../model/connection.php';
require_once __DIR__.'/../model/account.php';

if($_SERVER['REQUEST_METHOD']=='POST') {
	$connexio=connect();
	$id = $_SESSION['ID'];
	$name = $_POST['PASSWORD'];
	$mail = $_POST['MAIL'];
	$address = $_POST['ADDRESS'];
	$password = $_POST['PASSWORD'];

	$name = htmlentities($_POST['NAME'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
	$mail = htmlentities($_POST['MAIL'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
	$password = htmlentities($_POST['PASSWORD'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
	$address = htmlentities($_POST['ADDRESS'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
	$hash = password_hash($password, PASSWORD_DEFAULT);

	if (!empty($_FILES['IMG']))
	{
	    $img="img".$id;
	    $path=$pathlocal.$img;
	    move_uploaded_file($_FILES['IMG'],$path);
	    subirimg($connexio,$id,$img);
	}


	if(modify($name, $mail, $hash, $address, $connexio, $id)) {
	    require_once __DIR__.'/../controller/account.php';
	}
}