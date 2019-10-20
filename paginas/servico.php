<?php
include('../includes/verificaLogin.php');
?>
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
    <form class="form" action="../includes/servico/adicionarServico.php" method="post">
        
        <div class="titulo">
            <p>+Serviço</p>
        </div>
        <div class="inputs">
            <input type="text" name="servico" class="" id="servico" placeholder="Digite o serviço aqui!">
            <input type="text" name="duracao" class="" data-mask="00:00" id="duracao" placeholder="Digite a duração aqui!">
            <input type="text" name="preco"   class="" id="preco" placeholder="Digite o preço aqui!">   
        </div>
        <div class="btn-salvar">
            <button type="submit"class="btn btn-success my-2 my-sm-0">Salvar</button>
        </div>

    </form>
</div>




</body>
<?php
include('../includes/jquery.php');
?>
</html>