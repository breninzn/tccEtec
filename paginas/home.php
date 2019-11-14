<?php
include('../includes/verificaLogin.php');
include('../includes/reserva/excluirReserva.php');
include('../includes/reserva/atualizarReserva.php');
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
  INNER JOIN servico ON reservas.servico = servico.id_servico order by reservas.horario");
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
    </button>
    <button type="button" class="btn btn-primary"">
    Desativar
    </button></td>
    </form>';
    ?> 
  </div>

</div>
<!-- Modal -->
<div class="modal fade" id="modal<?php echo $array["id_reservas"]?>" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Editar Funcionario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body modal-editar">
            <form action="" class="modal-editar" method="post">
              <div class="inputs">
                <input style="display:none;" name="id" value="<?php echo $array["id_reservas"]?>">
                <div>
                  <div style="margin-top:5%"><b>Nome:</b></div>
                  <input required type="text" name="nome<?php echo $array["id_reservas"]?>" value="<?php echo $array["nome"]?>" placeholder="Digite o nome aqui!">
                </div>
                <div>
                  <div style="margin-top:5%"><b>Telefone:</b></div>  
                  <input required type="text" data-mask="(00) 00000-0000" name="telefone<?php echo $array["id_reservas"]?>" value="<?php echo $array["telefone"]?>" placeholder="Digite o telefone aqui!">
                </div>
                <div>
                  <div style="margin-top:5%"><b>Data:</b></div>  
                  <input required type="text" data-mask="00/00/0000" name="data<?php echo $array["id_reservas"]?>" value="<?php echo $array["data"]?>" placeholder="Digite a data aqui!">
                </div>
                <div>
                  <div style="margin-top:5%"><b>Horario:</b></div>  
                  <input type="text" data-mask="00:00" name="horario<?php echo $array["id_reservas"]?>" value="<?php echo $array["horario"]?>" placeholder="Digite o horario aqui!">
                </div>
                <div>
                  <div style="margin-top:5%"><b>Serviço:</b></div>  
                  <select required class="select" id="servico" name="servico<?php echo $array["id_reservas"]?>">
                    <option selected value="<?php echo $array["id_servico"]?>"><?php echo $array["servico"]?></option>
                    <?php 
                      $resultado_servico = mysqli_query($conexao, "SELECT * FROM servico ORDER BY servico ASC");
                      while ($dados_servico = mysqli_fetch_array($resultado_servico)) {
                        if($dados_servico["id_servico"] !== $array["id_servico"] )                      
                          echo "<option value='".$dados_servico["id_servico"]."'>".$dados_servico["servico"]."</option>";
                      }
                    ?>
                </select>
                </div>
                <div>
                  <div style="margin-top:5%"><b>Funcionario:</b></div>  
                  <select required class="select" id="funcionario" name="funcionario<?php echo $array["id_reservas"]?>">
                    <option selected value="<?php echo $array["id_funcionario"]?>"><?php echo $array["nomeFuncionario"]?></option>
                    <?php 
                      $resultado_funcionario = mysqli_query($conexao, "SELECT * FROM funcionarios ORDER BY nomeFuncionario ASC");
                      while ($dados_funcionario = mysqli_fetch_array($resultado_funcionario)) {
                        if($dados_funcionario["id_funcionario"] !== $array["id_funcionario"] )                      
                          echo "<option value='".$dados_funcionario["id_funcionario"]."'>".$dados_funcionario["nomeFuncionario"]."</option>";
                      }
                    ?>
                 </select>
                </div>
              </div>
          </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button> 
                <button type="submit" name="btnSalvarEditar" class="btn btn-success botoesModal">Salvar</button></a>';
              </div>
            </form>
        </div>
    </div>
  </div>
<?php
  endwhile;
?>

</div>

</body>
<?php
include('../includes/jquery.php');
?>
</html>
