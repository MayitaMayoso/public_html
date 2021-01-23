<?php
require_once __DIR__.'/../model/connection.php';
require_once __DIR__.'/../model/cuenta.php';
$connexio=connect();
$id=$_SESSION['ID'];
$usuario=user($connexio,$id);
require_once __DIR__.'/../view/usuario.php';
