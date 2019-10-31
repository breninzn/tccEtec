<?php
  if (isset($_POST["btnSalvarEditar"])){
    $id=$_POST["id"];
    $nome = $_POST["nome".$id];
    $telefone = $_POST["telefone".$id];
    $data = $_POST["data".$id];
    $horario = $_POST["horario".$id];
    $funcionario = $_POST["funcionario".$id];
    $servico = $_POST["servico".$id];
	$gravar = mysqli_query($conexao,"UPDATE reservas SET nome='$nome',telefone = '$telefone',data='$data',horario='$horario',
    funcionario='$funcionario',servico='$servico' WHERE id_reservas = $id");
	if($gravar){
		echo '<script>alert("Atualizado com Sucesso")</script>';
		echo '<meta http-equiv="refresh"; content="0;url=home.php">';
	}else{
        echo '<script>alert("Não atualizou")</script>';
		echo '<meta http-equiv="refresh"; content="0;url=home.php">';
    }
  }
?>