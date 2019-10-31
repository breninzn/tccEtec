<?php
  if (isset($_POST["btnSalvarEditar"])){
    $id=$_POST["id"];
    $nome = $_POST["nome".$id];
    $cpf = $_POST["cpf".$id];
    $telefone = $_POST["celular".$id];
    $email = $_POST["email".$id];
    $senha_fraca = $_POST["senha".$id];
    $senha = base64_encode($senha_fraca);
    $funcao = $_POST["funcao".$id];
	$gravar = mysqli_query($conexao,"UPDATE funcionarios SET nomeFuncionario='$nome', cpf='$cpf', celular = '$telefone',
    email = '$email', senha = '$senha', funcao = '$funcao' WHERE id_funcionario=$id");
	if($gravar){
		echo '<script>alert("Atualizado com Sucesso")</script>';
		echo '<meta http-equiv="refresh"; content="0;url=funcionario.php">';
	}else{
        echo '<script>alert("CPF já Cadastrado")</script>';
		echo '<meta http-equiv="refresh"; content="0;url=funcionario.php">';
    }
  }
?>