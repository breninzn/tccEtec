<?php
include('../includes/verificaLogin.php');
?>
 
<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
<h2><a href="../includes/logout.php">Sair</a></h2>
