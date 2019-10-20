<?php
include('../includes/verificaLogin.php');
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
<form action="../includes/reserva/adicionarReserva.php" method="post">
  
    <div class="titulo">
        <p>+Reserva</p>
    </div>
    <div class="inputs">
        <input type="text" name="nome" class="" id="nome" placeholder="Nome do cliente!">
        <input type="text" name="telefone" data-mask="(00) 0000-00000" class="" id="telefone" placeholder="Telefone do cliente!">
        <input type="text" name="data" class="" data-mask="00/00/0000" id="data" placeholder="Data da reserva">
        <input type="text" name="horario" data-mask="00:00" class="" id="horario" placeholder="Horario da reserva!">   
        <select class="select" id="servico" name="servico">
            <option selected>Escolha um serviço</option>
            <?php 
            include("../includes/conexao.php");
            $result = mysqli_query($conexao, "SELECT * FROM servico ORDER BY servico ASC");
            while ($array = mysqli_fetch_array($result)) {
                echo "<option value='".$array["id"]."'>".$array["servico"]."</option>";
            }
            
            ?>
        </select>
        <select class="select" id="funcionario" name="funcionario">
            <option selected>Escolha um funcionario</option>
            <?php 
            include("../includes/conexao.php");
            $result = mysqli_query($conexao, "SELECT * FROM funcionarios ORDER BY nome ASC");
            while ($array = mysqli_fetch_array($result)) {
                echo "<option value='".$array["id"]."'>".$array["nome"]."</option>";
            }
            
            ?>
        </select>
    </div>
    <div class="btn-salvar">
        <button type="submit" class="btn btn-success my-2 my-sm-0">Salvar</button>
    </div>

</form>  
</div>
</div>
</body>
<?php
include('../includes/jquery.php');
?>
</html>