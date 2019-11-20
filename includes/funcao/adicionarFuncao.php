<?php
	
  if (isset($_POST["btnSalvaFuncao"])){
	$funcao = $_POST["funcao"];
	$gravar = mysqli_query($conexao,"insert into funcao VALUES (null, '$funcao',1)");
	if($gravar){
		echo '<script>alert("Gravado com Sucesso")</script>';
		echo '<meta http-equiv="refresh"; content="0;url=funcionario.php">';
	}else{
        echo '<script>alert("não gravou")</script>';
		echo '<meta http-equiv="refresh"; content="0;url=funcionario.php">';
    }
  }
?>