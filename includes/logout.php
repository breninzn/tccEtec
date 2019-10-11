<?php
session_start();
session_destroy();
header('Location: http://localhost/tccEtec/index.php');
exit();
?>