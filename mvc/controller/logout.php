<?php
if (isset($_SESSION['ID'])) {
	unset($_SESSION['ID']);
	include __DIR__.'/categories.php';
	exit();
}
?>