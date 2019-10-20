<?php
include('../includes/verificaLogin.php');
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
<form action="../includes/funcionario/adicionarFuncionario.php" method="post">
  
    <div class="titulo">
        <p>+Funcionario</p>
    </div>
    
    <div class="inputs">
        <input type="text" name="nome" class="" id="nome" placeholder="Digite o nome aqui!">
        <input type="text" name="cpf" data-mask="000.000.000-00" id="cpf" placeholder="Digite a cpf aqui!">
        <input type="text" name="telefone" data-mask="(00) 0000-00000" class="" id="telefone" placeholder="Digite o telefone aqui!">
        <input type="text" name="email" class="" id="email" placeholder="Digite o email aqui!">
        <input type="password" name="senha" class="" id="senha" placeholder="Digite sua senha aqui!">   
        <select class="select" id="funcao" name="funcao">
            <option selected>Escolha uma função</option>
            <?php 
            include("../includes/conexao.php");
            $result = mysqli_query($conexao, "SELECT * FROM funcao ORDER BY funcao ASC");
            while ($array = mysqli_fetch_array($result)) {
                echo "<option value='".$array["id"]."'>".$array["funcao"]."</option>";
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
