<?php
include('../includes/verificaLogin.php')?>

 <!DOCTYPE html>
<html lang="en">
<head>
<title>+Serviço</title>  
<?php
include('../includes/head.php');
?>
</head>

<body>
<?php
include('../includes/menu.php');
?>


<div class="container">

    <ul class="nav nav-tabs" style="margin-left:15%;" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" style="color:black;font-size:120%;" data-toggle="tab" href="#home" role="tab" aria-controls="home"
      aria-selected="true">+Serviço</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" style="color:black;font-size:120%;" data-toggle="tab" href="#lista" role="tab" aria-controls="profile"
      aria-selected="false">Lista de serviços</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  <form class="form" action="" method="post">
        
        <div class="titulo">
            <p>+Serviço</p>
        </div>
        <div class="inputs">
            <input required type="text" name="servico" class="" id="servico" placeholder="Digite o serviço aqui!">
            <input required  type="text" name="duracao" class="" data-mask="00:00" id="duracao" placeholder="Digite a duração aqui!">
            <input required  type="text" name="preco"   class=""  id="preco" placeholder="Digite o preço aqui!">   
        </div>
        <div class="btn-salvar">
            <button type="submit" name="btnSalvar"class="btn btn-success my-2 my-sm-0">Salvar</button>
        </div>

    </form></div>
    <?php
      include('../includes/servico/adicionarServico.php');
    ?>
  <div class="tab-pane fade" id="lista" role="tabpanel" aria-labelledby="profile-tab">
  
  <?php 
  $result = mysqli_query($conexao, "SELECT * FROM servico");
  while ($array = mysqli_fetch_array($result)):  
  ?>


<div class="card cardLista">
  <div class="card-header" style="background-color:#F7DC6F ;border:none;">
    <?php echo $array["servico"]?>
  </div>
  <div class="card-body">
    <p class="card-text ">Duração: <?php echo $array["duracao"]?></p>
    <p class="card-text">Preço: R$  <?php echo $array["preco"]?></p>
    <!-- Modal -->
    <div class="modal fade" id="modal<?php echo $array["id_servico"]?>" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Editar Serviço </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="" method="post">
              <div class="inputs">
              <input style="display:none;" name="id" id="id<?php echo $array["id_servico"]?>" value="<?php echo $array["id_servico"]?>">
                <input required type="text" name="servico<?php echo $array["id_servico"]?>" value="<?php echo $array["servico"]?>" id="servico" placeholder="Digite o serviço aqui!">
                <input required  type="text" name="duracao<?php echo $array["id_servico"]?>"value="<?php echo $array["duracao"]?>" data-mask="00:00" id="duracao" placeholder="Digite a duração aqui!">
                <input required  type="text" name="preco<?php echo $array["id_servico"]?>"  value="<?php echo $array["preco"]?>" id="preco" placeholder="Digite o preço aqui!"> 
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
    
    echo '<form action="" method="post">
    <input style="display:none;" name="id_ApagarEditar" id="id'.$array["id_servico"].'" value="'.$array["id_servico"].'">
    <button type="submit" name="btnApagar" class="btn btn-danger">Apagar</button></a> 
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal'.$array["id_servico"].'">
    Editar
    </button></td>
    </form>';
    
    ?>
     
  </div>

</div>
<?php
  endwhile;
  include('../includes/servico/atualizarServico.php');
  include('../includes/servico/excluirServico.php');
?>
  
  
  </div>
</div>
</div>

</body>
<?php
include('../includes/jquery.php');
?>
</html>