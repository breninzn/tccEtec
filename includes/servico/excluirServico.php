<?php
  if (isset($_POST["btnApagar"])){
  $id_servico = $_POST['id_ApagarEditar'];
  $apagar = mysqli_query($conexao,"delete from servico where id_servico = '$id_servico'");
  if ($apagar){
	 echo '<script>alert("Apagado com Sucesso")</script>';
	 echo '<meta http-equiv="refresh"; content="0;url=servico.php">';
  }else{
    echo '<script>alert("Não foi possivel apagar")</script>';
    echo '<meta http-equiv="refresh"; content="0;url=servico.php">';
  }
}
?>
