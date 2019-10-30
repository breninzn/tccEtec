
<nav class="navbar navbar-expand-lg navbar-light bg-warning" id="nav-bar">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
  <form action="../includes/logout.php"  class="form-inline my-2 my-lg-0">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/tccEtec/paginas/home.php">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/tccEtec/paginas/reserva.php">+Reserva</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/tccEtec/paginas/funcionario.php">+Funcionario</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/tccEtec/paginas/servico.php">+Serviço</a>
      </li>    
      <button type="submit" width="50%" class="btn btn-danger my-2 my-sm-0 ">Sair</button>
    </ul>
  </form> 
     
  </div>
</nav>

  <div class="d-flex" id="wrapper">
    <div class="bg-warning border-right menu-lateral-background" id="sidebar-wrapper">
      <div class="list-group list-group-flush menu-lateral">
      <form action="../includes/logout.php" >
        <p href="#" class="list-group-item list-group-item-action bg-warning  "><img src="../imgs/logo.png" width="100%" heigth="100%"></p>
        <a href="http://localhost/tccEtec/paginas/home.php" class="list-group-item list-group-item-action bg-warning h4">Dashboard</a>
        <a href="http://localhost/tccEtec/paginas/reserva.php" class="list-group-item list-group-item-action bg-warning h4">+Reserva</a>
        <a href="http://localhost/tccEtec/paginas/funcionario.php" class="list-group-item list-group-item-action bg-warning h4">+Funcionario</a>
        <a href="http://localhost/tccEtec/paginas/servico.php" class="list-group-item list-group-item-action bg-warning h4">+Serviço</a>
        <div class="btn-sair"><button type="submit" class="lateral1"> <img src="../imgs/btn-sair.png" alt=""> </button> </div> 
        </form>
      </div>
    </div>

  
  
  <script src="../jquery/jquery.min.js"></script>
  <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>

  