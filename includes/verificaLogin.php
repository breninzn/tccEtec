<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<?php
session_start();
if(!$_SESSION['usuario']) {
	header('Location: http://localhost/tccEtec/index.php');
	exit();
}
?>