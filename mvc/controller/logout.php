<?php
if (isset($_SESSION['ID'])) {
	unset($_SESSION['ID']);
	header("Refresh:0");
	exit();
}
?>