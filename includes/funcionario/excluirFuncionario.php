<?php
if (isset($_POST["btnApagar"])){
  $id = $_POST["id_ApagarEditar"];
  $apagar = mysqli_query($conexao,"UPDATE funcionarios SET ativo = 0 WHERE id_funcionario=$id");
  if ($apagar){
	 echo '<script>alert("Apagado com Sucesso")</script>';
	 echo '<meta http-equiv="refresh"; content="0;url=funcionario.php">';
  }else{
    echo '<script>alert("Não foi possivel apagar")</script>';
    echo '<meta http-equiv="refresh"; content="0;url=funcionario.php">';
  }
}
?>