<?php
//Código para criar database
$servidor = "localhost";
$usuario = "root";
$senha = "minas";//minas
$database = "freead_cadastro";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

	 $sql = "CREATE TABLE usuarios (
	        id INT AUTO_INCREMENT PRIMARY KEY,

			nome VARCHAR(40),
			email VARCHAR(50),
      idade INT,
			login VARCHAR(40),
			senha VARCHAR(32)
			)";
	
      if (!mysqli_query($conexao,$sql)) 
		 echo "Falha na criação da Tabela!" . mysqli_connect_error();
	  else echo "Tabela criada com sucesso!";
  	  
?>