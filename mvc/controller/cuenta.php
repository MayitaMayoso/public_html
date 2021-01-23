<?php
require_once __DIR__.'/../model/connection.php';
require_once __DIR__.'/../model/cuenta.php';
$connexio=connect();
$id=$_SESSION['ID'];
$usuario=getInfo($connexio,$id);
require_once __DIR__.'/../view/usuario.php';
