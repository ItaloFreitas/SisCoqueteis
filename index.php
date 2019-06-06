<?php 
	//conexão
	include_once 'db/db_connect.php';

	//header
	include_once 'includes/header.php';

	//mensagem
	include_once 'includes/mensagem_cadastro.php'; 
?>

<div class="row">
	<div class="col s12 m8 push-m2">
		<h3 class="light">Coqueteis</h3>
		<table class="striped">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Preço de Compra</th>
					<th>Preço de Venda</th>
					<th>Possui Álcool?</th>
					<th>Possui Lactose?</th>
					<th>Possui Glútem?</th>
					<th>Ingrediente 1</th>
					<th>Ingrediente 2</th>
					<th>Ingrediente 3</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$sql = "SELECT * FROM coqueteis INNER JOIN ingredientes ON coqueteis.id_ingrediente1 AND coqueteis.id_ingrediente2 AND coqueteis.id_ingrediente3 = ingredientes.id_ingrediente";
					$result = mysqli_query($connect, $sql);
					while($dados = mysqli_fetch_array($result)): 
				?>
				<tr>
					<td><?php echo $dados['nome']; ?></td>
					<td><?php echo "R$",$dados['preco_compra']; ?></td>
					<td><?php echo "R$",$dados['preco_venda']; ?></td>
					<td><?php echo $dados['alcool']; ?></td>
					<td><?php echo $dados['lactose']; ?></td>
					<td><?php echo $dados['glutem']; ?></td>
					<td><?php echo $dados['id_ingrediente1']; ?></td>
					<td><?php echo $dados['id_ingrediente2']; ?></td>
					<td><?php echo $dados['id_ingrediente3']; ?></td>
					<td><a href="edit_coquetel.php?id=<?php echo $dados['id']; ?>" class="btn-floating"><i class="material-icons">edit</i></a></td>
					
					<td><a name="btn-delete" href="db/delete.php?id=<?php echo $dados['id']; ?>" class="btn-floating red"><i class="material-icons">delete</i></a></td>
				</tr>
				<?php
				 endwhile; ?>
			</tbody>
		</table>
		<br>
		<a href="add_coquetel.php" class="btn">Adicionar Coquetel</a>
	</div>
</div>



<?php include_once 'includes/footer.php'; ?>

      