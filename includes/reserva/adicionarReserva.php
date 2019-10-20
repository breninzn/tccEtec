<?php
    include("../limpa.php");
    $nome = $_POST["nome"];
	$telefone = limpa($_POST["telefone"]);
    $data = limpa($_POST["data"]);
    $horario = limpa($_POST["horario"]);
    $servico = $_POST["servico"];
    $funcionario = $_POST["funcionario"];

  if (isset($_POST["servico"])){
	include("../conexao.php");
	$gravar = mysqli_query($conexao,"insert into reservas VALUES (null, '$nome','$telefone','$servico','$funcionario','$horario','$data')");
	if($gravar){
		echo '<script>alert("Gravado com Sucesso")</script>';
		echo '<meta http-equiv="refresh"; content="2;url=../../paginas/reserva.php">';
	}else{
        echo '<script>alert("não gravou")</script>';
		echo '<meta http-equiv="refresh"; content="2;url=../../paginas/reserva.php">';
    }
  }
?>