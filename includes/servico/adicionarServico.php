<?php
	include("../includes/conexao.php");
	if (isset($_POST["btnSalvar"])){
		$servico = $_POST["servico"];
		$duracao = $_POST["duracao"];
		$preco = $_POST["preco"];
		$gravar = mysqli_query($conexao,"insert into servico VALUES (null, '$servico','$duracao','$preco')");
	if($gravar){
		echo '<script>alert("Gravado com Sucesso")</script>';
		echo '<meta http-equiv="refresh"; content="0;url=servico.php">';
	}else{
        echo '<script>alert("não gravou")</script>';
		echo '<meta http-equiv="refresh"; content="0;url=servico.php">';
    }
  }
?>