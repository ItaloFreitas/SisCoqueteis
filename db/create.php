<?php 
session_start();

	require_once 'db_connect.php';

	if(isset($_POST['btn-cadastrar'])):
		$nome = mysqli_escape_string($connect, $_POST['nome']);
		$preco_compra = mysqli_escape_string($connect, $_POST['preco_compra']);
		$preco_venda = mysqli_escape_string($connect, $_POST['preco_venda']);
		$alcool = ( mysqli_escape_string($connect, $_POST['alcool']) ) ?: Não;
		$lactose = ( mysqli_escape_string($connect, $_POST['lactose']) ) ?: Não;
		$glutem = ( mysqli_escape_string($connect, $_POST['glutem']) ) ?: Não;
		$ingrediente1 = (mysqli_escape_string($connect, $_POST['ingrediente1']));
		$ingrediente2 = (mysqli_escape_string($connect, $_POST['ingrediente2']));
		$ingrediente3 = (mysqli_escape_string($connect, $_POST['ingrediente3']));


		$sql = "INSERT INTO coqueteis (nome, preco_compra, preco_venda, alcool, lactose, glutem, id_ingrediente1, id_ingrediente2, id_ingrediente3) VALUES ('$nome','$preco_compra', '$preco_venda', '$alcool', '$lactose', '$glutem', '$ingrediente1', '$ingrediente2', '$ingrediente3')";

		if(mysqli_query($connect, $sql)):
			$_SESSION['mensagem'] = "Cadastrado com sucesso!";
			header('Location: ../index.php');
		else:
			$_SESSION['mensagem'] = "Erro ao cadastrar";
			header('Location: ../index.php');
		endif;

	endif;
 ?>