<?php
include('../includes/verificaLogin.php');
?>
 <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>

  
  <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">

  
  <link href="../css/menu-lateral.css" rel="stylesheet">

</head>

<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-warning" id="nav-bar">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
  <form action="../includes/logout.php"  class="form-inline my-2 my-lg-0">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(Página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">+Reserva</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">+Funcionario</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">+Serviço</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">+Função</a>
      </li>
    
      <button type="submit" width="50%" class="btn btn-danger my-2 my-sm-0 ">Sair</button>
    </ul>
  </form> 
     
  </div>
</nav>

  <div class="d-flex" id="wrapper">
    <div class="bg-warning border-right" id="sidebar-wrapper">
      <div class="list-group list-group-flush">
      <form action="../includes/logout.php" >
        <p href="#" class="list-group-item list-group-item-action bg-warning  "><img src="../imgs/logo.png" width="100%" heigth="100%"></p>
        <a href="#" class="list-group-item list-group-item-action bg-warning h5">Dashboard</a>
        <a href="#" class="list-group-item list-group-item-action bg-warning h5">+Reserva</a>
        <a href="#" class="list-group-item list-group-item-action bg-warning h5">+Serviço</a>
        <a href="#" class="list-group-item list-group-item-action bg-warning h5">+Funcionario</a>
        <button type="submit" class="btn btn-danger lateral1"><h4>Sair</h4></button>
        </form>
      </div>
    </div>
    

  
  <script src="../jquery/jquery.min.js"></script>
  <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

<!-- <h2><a href="../includes/logout.php">Sair</a></h2> -->
