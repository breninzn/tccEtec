<?php
include("../includes/conexao.php");
  if (isset($_POST["btnSalvar"])){
	$nome = $_POST["nome"];
	$cpf = 	$_POST["cpf"];
	$senha = $_POST["senha"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $funcao = $_POST["funcao"];
	$senha= base64_encode($senha);
	$verificaCpf = mysqli_query($conexao,"select * from funcionarios where cpf = '$cpf'");
	$teste = mysqli_num_rows($verificaCpf);
	if ($teste !== 0) {
		mysqli_query($conexao,"UPDATE funcionarios SET nomeFuncionario='$nome', cpf='$cpf', celular = '$telefone',
		email = '$email', senha = '$senha', funcao = '$funcao', ativo=1 WHERE cpf = '$cpf'");
		echo '<script>alert("Funcionario reativado com sucesso!")</script>';
	} else {
		$gravar = mysqli_query($conexao,"insert into funcionarios VALUES (null, '$nome','$telefone','$email','$cpf','$funcao','$senha',1)");
		if($gravar){
			echo '<script>alert("Gravado com Sucesso")</script>';
			echo '<meta http-equiv="refresh"; content="0;url=funcionario.php">';
		}else{
			echo '<script>alert("não gravou")</script>';
			echo '<meta http-equiv="refresh"; content="0;url=funcionario.php">';
		}
	}
  }
?>