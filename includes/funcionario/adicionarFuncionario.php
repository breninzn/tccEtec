<?php
include("../includes/conexao.php");
  if (isset($_POST["btnSalvar"])){
	$nome = $_POST["nome"];
	$cpf = 	$_POST["cpf"];
	$senha = $_POST["senha"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $funcao = $_POST["funcao"];
    $senha= md5($senha);
	$gravar = mysqli_query($conexao,"insert into funcionarios VALUES (null, '$nome','$telefone','$email','$cpf','$funcao','$senha')");
	if($gravar){
		echo '<script>alert("Gravado com Sucesso")</script>';
		echo '<meta http-equiv="refresh"; content="0;url=funcionario.php">';
	}else{
        echo '<script>alert("não gravou")</script>';
		echo '<meta http-equiv="refresh"; content="0;url=funcionario.php">';
    }
  }
?>