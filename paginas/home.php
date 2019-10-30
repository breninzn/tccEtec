<?php
include('../includes/verificaLogin.php');
include('../includes/reserva/excluirReserva.php');
?>
 <!DOCTYPE html>
<html lang="en">

<head>
<title>Dashboard</title>  
<?php
include('../includes/head.php');
?>
</head>

<body>
<?php
include('../includes/menu.php');
?>

<div class="container"style=" margin-bottom:5% ;">
<div class="titulo">
        <p>Reservas</p>
    </div>

<?php 
  $result = mysqli_query($conexao, "SELECT * FROM reservas 
  INNER JOIN funcionarios ON reservas.funcionario = funcionarios.id_funcionario
  INNER JOIN servico ON reservas.servico = servico.id_servico");
  while ($array = mysqli_fetch_array($result)):  
?>


<div class="card cardLista">
  <div class="card-header" style="background-color:#F7DC6F ;border:none;">
    <?php echo $array["nome"]?>
  </div>
  <div class="card-body">
    <p class="card-text ">Serviço: <?php echo $array["servico"]?></p>
    <p class="card-text">Telefone: <?php echo $array["telefone"]?></p>
    <p class="card-text">Funcionario: <?php echo $array["nomeFuncionario"]?></p>
    <p class="card-text">Horario: <?php echo $array["horario"]?></p>
    <p class="card-text">Data: <?php echo $array["data"]?></p>

    <?php 
    
    echo '
    <form action="" method="post">
    <input style="display:none;" name="id_ApagarReserva" id="id'.$array["id_reservas"].'" value="'.$array["id_reservas"].'">
    <button type="submit" name="btnApagarReserva" class="btn btn-danger">Apagar</button></a> 
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal'.$array["id_reservas"].'">
    Editar
    </button></td>
    </form>';
    ?> 
  </div>

</div>
<?php
  endwhile;
?>

</div>

</body>

</html>
