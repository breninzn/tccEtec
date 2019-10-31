<?php
  if (isset($_POST["btnSalvarEditarFuncao"])){
    $id=$_POST["id"];
    $funcao = $_POST["funcao".$id];
	$gravar = mysqli_query($conexao,"UPDATE funcao SET funcao='$funcao' WHERE id_funcao=$id");
	if($gravar){
		echo '<script>alert("Atualizado com Sucesso")</script>';
		echo '<meta http-equiv="refresh"; content="0;url=funcionario.php">';
	}else{
        echo '<script>alert("Não atualizou")</script>';
		echo '<meta http-equiv="refresh"; content="0;url=funcionario.php">';
    }
  }
?>