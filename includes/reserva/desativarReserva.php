<?php
if (isset($_POST["btnDesativarReserva"])){
  $id = $_POST["id_ApagarReserva"];
  $apagar = mysqli_query($conexao,"UPDATE reservas SET ativo=0 WHERE id_reservas = $id");
  if ($apagar){
	 echo '<script>alert("Desativado com Sucesso")</script>';
	 echo '<meta http-equiv="refresh"; content="0;url=home.php">';
  }else{
    echo '<script>alert("Não foi possivel desativar")</script>';
    echo '<meta http-equiv="refresh"; content="0;url=home.php">';
  }
}else if(isset($_POST["btnReativarReserva"])){
  $id = $_POST["id_ApagarReserva"];
  $reativar = mysqli_query($conexao,"UPDATE reservas SET ativo=1 WHERE id_reservas = $id");
  if ($reativar){
	 echo '<script>alert("Reativado com Sucesso")</script>';
	 echo '<meta http-equiv="refresh"; content="0;url=home.php">';
  }else{
    echo '<script>alert("Não foi possivel Reativar")</script>';
    echo '<meta http-equiv="refresh"; content="0;url=home.php">';
  }
}
?>