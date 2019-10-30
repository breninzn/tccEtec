<?php
if (isset($_POST["btnApagaFuncao"])){
  $id = $_POST["id_ApagaFuncao"];
  $apagar = mysqli_query($conexao,"delete from funcao where id_funcao = '$id'");
  if ($apagar){
	 echo '<script>alert("Apagado com Sucesso")</script>';
	 echo '<meta http-equiv="refresh"; content="0;url=funcionario.php">';
  }else{
    echo '<script>alert("Não foi possivel apagar")</script>';
    echo '<meta http-equiv="refresh"; content="0;url=funcionario.php">';
  }
}
?>