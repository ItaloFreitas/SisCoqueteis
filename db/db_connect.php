<?php 
	//Conexão com o Banco de Dados
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db_name = "sisweb";

	$connect = mysqli_connect($servername, $username, $password, $db_name);
	mysqli_set_charset($connect,"utf8");

	// if(mysqli_connect_error()):
	// 	echo "Erro na conexão: ".mysqli_connect_error();
	// else:
	// 	echo "Deu certo pvt";
	// endif;























	//mysqli é procedural
	//pdo é orientado a objetos


 ?>