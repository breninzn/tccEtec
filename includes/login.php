<?php
session_start();
include('conexao.php');
include('limpa.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	echo '<meta http-equiv="refresh"; content="0;url=../index.php">';
	exit();
}
 
$usuario = mysqli_real_escape_string($conexao,$_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$senha_criptografada = base64_encode($senha);
$query = "select nomeFuncionario, cpf from funcionarios where cpf = '{$usuario}' and senha = '{$senha_criptografada}'";
 
$result = mysqli_query($conexao, $query);
 
$row = mysqli_num_rows($result);
 
if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	echo '<meta http-equiv="refresh"; content="0;url=../paginas/home.php">';
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
    echo '<meta http-equiv="refresh"; content="0;url=../index.php">';
	exit();
}
?>