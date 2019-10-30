<?php
session_start();
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card" id="cardLogin">
			<div class="card-header">
				<center><h3>Login</h3></center>
			</div>
			<div class="card-body">
			<?php
				if (isset($_SESSION['nao_autenticado'])):
				echo '<div class="erroLogin"><p>Login ou senha invalidos !</p></div>';
				endif;
				unset($_SESSION['nao_autenticado'])
			?>
				<form action="includes/login.php" method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input required type="text" name="usuario" data-mask="000.000.000-00" id="usuario" class="form-control" placeholder="Digite a cpf aqui!">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input required type="password" name="senha" class="form-control" placeholder="password">
					</div>
					
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
                    
				</form>
			</div>
			
		</div>
	</div>
</div>
</body>
</html>
<?php
include('includes/jquery.php');
?>