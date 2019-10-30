<?php
session_start();
include('conexao.php');
include('limpa.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: http://localhost/tccEtec/index.php');
	exit();
}
 
$usuario = mysqli_real_escape_string($conexao,$_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
 
$query = "select nomeFuncionario, cpf from funcionarios where cpf = '{$usuario}' and senha = md5('{$senha}')";
 
$result = mysqli_query($conexao, $query);
 
$row = mysqli_num_rows($result);
 
if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: http://localhost/tccEtec/paginas/home.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
    header('Location: http://localhost/tccEtec/index.php');
	exit();
}
?>