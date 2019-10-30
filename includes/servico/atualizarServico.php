<?php
  if (isset($_POST["btnSalvarEditar"])){
	$id=$_POST["id"];
	$servico = $_POST["servico".$id];
	$duracao = $_POST["duracao".$id];
	$preco = $_POST["preco".$id];
	$gravar = mysqli_query($conexao,"UPDATE servico SET servico='$servico', duracao='$duracao', preco = $preco WHERE id_servico=$id");
	if($gravar){
		echo '<script>alert("Atualizado com Sucesso")</script>';
		echo '<meta http-equiv="refresh"; content="0;url=servico.php">';
	}else{
        echo '<script>alert("Não Atualizou")</script>';
		echo '<meta http-equiv="refresh"; content="0;url=servico.php">';
    }
  }
?>