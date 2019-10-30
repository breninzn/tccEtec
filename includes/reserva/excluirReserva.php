<?php
include("../includes/conexao.php");
if (isset($_POST["btnApagarReserva"])){
  $id = $_POST["id_ApagarReserva"];
  $apagar = mysqli_query($conexao,"delete from reservas where id_reservas = '$id'");
  if ($apagar){
	 echo '<script>alert("Apagado com Sucesso")</script>';
	 echo '<meta http-equiv="refresh"; content="0;url=home.php">';
  }else{
    echo '<script>alert("Não foi possivel apagar")</script>';
    echo '<meta http-equiv="refresh"; content="0;url=home.php">';
  }
}
?>