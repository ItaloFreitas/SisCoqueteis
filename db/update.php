<?php 
session_start();

	require_once 'db_connect.php';

	if(isset($_POST['btn-editar'])):
		$nome = mysqli_escape_string($connect, $_POST['nome']);
		$preco_compra = mysqli_escape_string($connect, $_POST['preco_compra']);
		$preco_venda = mysqli_escape_string($connect, $_POST['preco_venda']);
		$alcool = ( mysqli_escape_string($connect, $_POST['alcool']) ) ?: Não;
		$lactose = ( mysqli_escape_string($connect, $_POST['lactose']) ) ?: Não;
		$glutem = ( mysqli_escape_string($connect, $_POST['glutem']) ) ?: Não;
		$ingrediente1 = (mysqli_escape_string($connect, $_POST['ingrediente1']));
		$ingrediente2 = (mysqli_escape_string($connect, $_POST['ingrediente2']));
		$ingrediente3 = (mysqli_escape_string($connect, $_POST['ingrediente3']));

		$id = mysqli_escape_string($connect, $_POST['id']);


		$sql = "UPDATE coqueteis SET nome = '$nome', preco_compra = '$preco_compra', preco_venda = '$preco_venda', alcool = '$alcool', lactose = '$lactose', glutem = '$glutem' WHERE id = '$id'";

		if(mysqli_query($connect, $sql)):
			$_SESSION['mensagem'] = "Editado com sucesso!";
			header('Location: ../index.php');
		else:
			$_SESSION['mensagem'] = "Erro ao editar";
			header('Location: ../index.php');
		endif;

	endif;
 ?>