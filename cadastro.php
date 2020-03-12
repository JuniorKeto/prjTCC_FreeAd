<?php
  include 'conexao.php';

  if (isset($_POST["email"]) && isset($_POST["login"]) && isset($_POST["senha"])) {
    $email = $_POST["email"];
    $login = $_POST["login"];
    $senha = md5($_POST["senha"]);

    $sql = "SELECT * FROM usuarios WHERE login LIKE '$login'";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
      echo "<script>alert('Login já existe. Tente outro!')</script>";
    }
    else{
      $sql = "INSERT INTO usuarios VALUES(null,'$email', '$login', '$senha')";
      if (mysqli_query($conexao, $sql)) {
        echo "<script>alert('Cadastro realizado com sucesso!');
        window.location.href = 'login.php'; </script>";
      }
      else{
        die("Falha ao cadastrar");
      }
    }

  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
<link href="styles/bootstrap-4.1.2/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<style>
.center {
   
                width: 1000px; 
                height: 150px; 
                left: 50%; 
                margin: -130px 0 0 -210px; 
                padding:10px;
                position: absolute; 
                top: 300px;

}
.btn{
	position: absolute;
	left: 13%;
}


</style>

</head>
<body>
<form>
	 
  <div class="form-group">
  	<div class="center">
  		<div class="col-md-4 col-sm-12">
    		<label for="exampleInputEmail1">Email</label>
    		<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  		</div>
  <br>
  <div class="form-group">
  	<div class="col-md-4 col-sm-12">
    	<label for="exampleInputPassword1">Login</label>
    	<input type="login" class="form-control" id="exampleInputLogin">
	</div>
  <br>
  <div class="form-group">
  	<div class="col-md-4 col-sm-12">
    	<label for="exampleInputPassword1">Senha</label>
    	<input type="password" class="form-control" id="exampleInputPassword1">
  	</div>
  </div>
  <br><br>
  <div class="btn">
  	<button type="submit" class="btn btn-primary">Enviar</button>
  	</div>
  	</div>
	</div>


 
</form>
</body>
</html>