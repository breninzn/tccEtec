<?php
session_start();
if(!$_SESSION['usuario']) {
	header('Location: http://localhost/tccEtec/index.php');
	exit();
}
?>