<?php
include('../includes/verificaLogin.php');
include('../includes/funcionario/adicionarFuncionario.php');
include('../includes/funcionario/excluirFuncionario.php');
include('../includes/funcionario/atualizarFuncionario.php');
include('../includes/funcao/adicionarFuncao.php');
include('../includes/funcao/excluirFuncao.php');
?>
 <!DOCTYPE html>
<html lang="en">

<head>
<title>+Funcionario</title>  
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
    <a class="nav-link active" id="home-tab"  style="color:black;font-size:120%;" data-toggle="tab" href="#home" role="tab" aria-controls="home"
      aria-selected="true">+Funcionario</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab"  style="color:black;font-size:120%;" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
      aria-selected="false">Lista de funcionarios</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab"  style="color:black;font-size:120%;" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
      aria-selected="false">+Função</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

  <form action="" method="post">
    
    <div class="titulo">
        <p>+Funcionario</p>
    </div>
    
    <div class="inputs">
        <input required type="text" name="nome" class="" id="nome" placeholder="Digite o nome aqui!">
        <input required type="text" name="cpf" data-mask="000.000.000-00" id="cpf" placeholder="Digite a cpf aqui!">
        <input required type="text" name="telefone" data-mask="(00) 00000-0000" class="" id="telefone" placeholder="Digite o telefone aqui!">
        <input type="email" name="email" class="" id="email" placeholder="Digite o email aqui!">
        <input required type="password" name="senha" class="" id="senha" placeholder="Digite sua senha aqui!">   
        <select required class="select" id="funcao" name="funcao">
            <option value="" id="selected">Escolha uma função</option>
            <?php  
            $result = mysqli_query($conexao, "SELECT * FROM funcao ORDER BY funcao ASC");
            while ($array = mysqli_fetch_array($result)) {
                echo "<option value='".$array["id_funcao"]."'>".$array["funcao"]."</option>";
            }
            
            ?>
        </select>
    </div>
    <div class="btn-salvar">
        <button type="submit" name="btnSalvar" class="btn btn-success my-2 my-sm-0">Salvar</button>
    </div>
</form>  
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab" style="margin-bottom:5%;">
       
  <?php 
  $result = mysqli_query($conexao, "SELECT * FROM funcionarios 
  INNER JOIN funcao ON funcionarios.funcao = funcao.id_funcao");
  while ($array = mysqli_fetch_array($result)):  
  ?>

<div class="card cardLista">
  <div class="card-header" style="background-color:#F7DC6F ;border:none;">
    <?php echo $array["nomeFuncionario"]?>
  </div>
  <div class="card-body">
    <p class="card-text ">Cpf: <?php echo $array["cpf"]?></p>
    <p class="card-text ">Telefone: <?php echo $array["celular"]?></p>
    <p class="card-text ">Funcao: <?php echo $array["funcao"]?></p>
    <?php 
    echo '
    <form action="" method="post">
    <input style="display:none;" name="id_ApagarEditar" id="id'.$array["id_funcionario"].'" value="'.$array["id_funcionario"].'">
    <button type="submit" name="btnApagar" class="btn btn-danger">Apagar</button></a> 
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal'.$array["id_funcionario"].'">
    Editar
    </button></td>
    </form>';
    ?> 
  </div>

</div>
<!-- Modal -->
<div class="modal fade" id="modal<?php echo $array["id_funcionario"]?>" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Editar Funcionario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="" method="post">
              <div class="inputs">
                <input style="display:none;" name="id" value="<?php echo $array["id_funcionario"]?>">
                <div>
                  <div style="margin-top:5%"><b>Nome:</b></div>
                  <input required type="text" name="nome<?php echo $array["id_funcionario"]?>" value="<?php echo $array["nomeFuncionario"]?>" placeholder="Digite o nome aqui!">
                </div>
                <div>
                  <div style="margin-top:5%"><b>Celular:</b></div>  
                  <input required type="text" data-mask="(00) 00000-0000" name="celular<?php echo $array["id_funcionario"]?>" value="<?php echo $array["celular"]?>" placeholder="Digite o telefone aqui!">
                </div>
                <div>
                  <div style="margin-top:5%"><b>CPF:</b></div>  
                  <input required type="text" data-mask="000.000.000-00" name="cpf<?php echo $array["id_funcionario"]?>" value="<?php echo $array["cpf"]?>" placeholder="Digite o CPF aqui!">
                </div>
                <div>
                  <div style="margin-top:5%"><b>Email:</b></div>  
                  <input type="text" name="email<?php echo $array["id_funcionario"]?>" value="<?php echo $array["email"]?>" placeholder="Digite o email aqui!">
                </div>
                <div>
                  <div style="margin-top:5%"><b>Função:</b></div>  
                  <select required class="select" id="funcao" name="funcao<?php echo $array["id_funcionario"]?>">
                    <option value="" id="selected">Escolha uma função</option>
                    <?php  
                    $resultado = mysqli_query($conexao, "SELECT * FROM funcao ORDER BY funcao ASC");
                    while ($dados = mysqli_fetch_array($resultado)) {
                        echo "<option value='".$dados["id_funcao"]."'>".$dados["funcao"]."</option>";
                    }
                    ?>
                  </select>
                </div>
                <div>
                  <div style="margin-top:5%"><b>Senha:</b></div>  
                  <input required type="text" name="senha<?php echo $array["id_funcionario"]?>" value="<?php echo base64_decode($array["senha"])?>" placeholder="Digite a senha aqui!">
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
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
  <form action="" method="post">
    
    <div class="titulo">
        <p>+Função</p>
    </div>
    
    <div class="inputs">
        <input required type="text" name="funcao" class="" id="funcao" placeholder="Digite a função aqui!">
    </div>
    <div class="btn-salvar">
        <button type="submit" name="btnSalvaFuncao" class="btn btn-success my-2 my-sm-0">Salvar</button>
    </div>

</form>  

<button class="btn dropdown-toggle" style="width:50%;background-color:#ffc107;color:black;" type="button" data-toggle="collapse" data-target="#lista" aria-expanded="false" aria-controls="lista"><h5> Lista de Funções</h5></button>
<div class="row">
  <div class="col">
    <div class="collapse" id="lista">
      <?php 
        $result = mysqli_query($conexao, "SELECT * FROM funcao");
        while ($array = mysqli_fetch_array($result)):  
      ?>
        <div  style="width:50%;margin-left:25%;margin-top:1%;">
          <div class="card cardLista" style="width:100%;margin-left:0%;">
            <div class="card-body">
              <p class="card-text ">Função: <?php echo $array["funcao"]?></p>
                <?php 
                  echo '<form action="" method="post">
                  <input style="display:none;" name="id_ApagaFuncao" id="id'.$array["id_funcao"].'" value="'.$array["id_funcao"].'">
                  <button type="submit" name="btnApagaFuncao" class="btn btn-danger">Apagar</button></a> 
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal'.$array["id_funcao"].'">
                  Editar
                  </button></td>
                  </form>';
                ?> 
            </div>
          </div>
        </div>
      <?php      
      endwhile;
      ?>
  </div>
</div>



</div>




</div></body>



<?php
include('../includes/jquery.php');
?>
</html>
