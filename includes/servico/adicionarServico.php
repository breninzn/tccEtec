<?php
	$servico = $_POST["servico"];
	$duracao = $_POST["duracao"];
    $preco = $_POST["preco"];
    
  if (isset($_POST["servico"])){
	include("../conexao.php");
	$gravar = mysqli_query($conexao,"insert into funcionarios VALUES (null, '$nome','$telefone','$email','$cpf','$funcao','$senha')");
	if($gravar){
		echo '<script>alert("Gravado com Sucesso")</script>';
		echo '<meta http-equiv="refresh"; content="2;url=../../paginas/servico.php">';
	}else{
        echo '<script>alert("não gravou")</script>';
		echo '<meta http-equiv="refresh"; content="2;url=../../paginas/servico.php">';
    }
  }
?>