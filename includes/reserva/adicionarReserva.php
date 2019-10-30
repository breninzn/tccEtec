<?php
include("../includes/conexao.php");
  if (isset($_POST["btnSalvarReserva"])){
    $nome = $_POST["nome"];
	  $telefone = $_POST["telefone"];
    $data = $_POST["data"];
    $horario = $_POST["horario"];
    $servico = $_POST["servico"];
    $funcionario = $_POST["funcionario"];
    $gravar = mysqli_query($conexao,"insert into reservas VALUES (null, '$nome','$telefone','$servico','$funcionario','$horario','$data')");
    if($gravar){
      echo '<script>alert("Gravado com Sucesso")</script>';
      echo '<meta http-equiv="refresh"; content="0;url=reserva.php">';
    }else{
          echo '<script>alert("não gravou")</script>';
      echo '<meta http-equiv="refresh"; content="0;url=reserva.php">';
      }
  }
?>