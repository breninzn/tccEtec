<?php
include('../includes/verificaLogin.php');
include('../includes/reserva/adicionarReserva.php');
?>
 <!DOCTYPE html>
<html lang="en">

<head>
<title>+Reserva</title>  
<?php
include('../includes/head.php');
?>
</head>

<body>
<?php
include('../includes/menu.php');
?>

<div class="container">
<form action="" method="post">
  
    <div class="titulo">
        <p>+Reserva</p>
    </div>
    <div class="inputs">
        <input required type="text" name="nome" class="" id="nome" placeholder="Nome do cliente!">
        <input required type="text" name="telefone" data-mask="(00) 00000-0000" class="" id="telefone" placeholder="Telefone do cliente!">
        <input required type="text" name="data" class="" data-mask="00/00/0000" id="data" placeholder="Data da reserva">
        <input required type="text" name="horario" data-mask="00:00" class="" id="horario" placeholder="Horario da reserva!">   
        <select required class="select" id="servico" name="servico">
            <option value="">Escolha um serviço</option>
            <?php 
            $result = mysqli_query($conexao, "SELECT * FROM servico ORDER BY servico ASC");
            while ($array = mysqli_fetch_array($result)) {
                echo "<option value='".$array["id_servico"]."'>".$array["servico"]."</option>";
            }
            
            ?>
        </select>
        <select required class="select" id="funcionario" name="funcionario">
            <option value="">Escolha um funcionario</option>
            <?php 
            $result = mysqli_query($conexao, "SELECT * FROM funcionarios ORDER BY nomeFuncionario ASC");
            while ($array = mysqli_fetch_array($result)) {
                echo "<option value='".$array["id_funcionario"]."'>".$array["nomeFuncionario"]."</option>";
            }
            
            ?>
        </select>
    </div>
    <div class="btn-salvar">
        <button type="submit" name="btnSalvarReserva" class="btn btn-success my-2 my-sm-0">Salvar</button>
    </div>

</form>  
</div>
</div>
</body>
<?php
include('../includes/jquery.php');
?>
</html>