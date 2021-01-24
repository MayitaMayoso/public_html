<?php
require_once __DIR__ . '/../model/connection.php';
require_once __DIR__.'/../model/account.php';
$connexio=connect();
$id=$_SESSION['ID'];
$resultat_usuari=account($connexio,$id);
require_once __DIR__.'/../view/account.php';