<?php
include("../limpa.php");
	$nome = $_POST["nome"];
	$cpf = limpa($_POST["cpf"]);
	$senha = $_POST["senha"];
    $email = $_POST["email"];
    $telefone = limpa($_POST["telefone"]);
    $funcao = $_POST["funcao"];

    $senha=md5($senha);
  if (isset($_POST["nome"])){
	include("../conexao.php");
	$gravar = mysqli_query($conexao,"insert into funcionarios VALUES (null, '$nome','$telefone','$email','$cpf','$funcao','$senha')");
	if($gravar){
		echo '<script>alert("Gravado com Sucesso")</script>';
		echo '<meta http-equiv="refresh"; content="2;url=../../paginas/funcionario.php">';
	}else{
        echo '<script>alert("não gravou")</script>';
		echo '<meta http-equiv="refresh"; content="2;url=../../paginas/funcionario.php">';
    }
  }
?>