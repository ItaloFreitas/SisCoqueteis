<?php 
	//conexão
	include_once 'db/db_connect.php';

	//header
	include_once 'includes/header.php';
	
	include_once 'includes/select_ingredientes.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light">Adicionar Coquetel</h3>
			<form action="db/create.php" method="POST">
				<div class="input-field col s12">
					<input type="text" name="nome" id="nome"></input>
					<label for="nome">Nome</label>
				</div>
				<div class="input-field col s12">
					<input type="text" name="preco_compra" id="preco_compra"></input>
					<label for="preco_compra">Valor de Compra</label>
				</div>
				<div class="input-field col s12">
					<input type="text" name="preco_venda" id="preco_venda"></input>
					<label for="preco_venda">Valor de Venda</label>
				</div>
				<div class="input-field col s12">
					<select name="ingrediente1" class="browser-default">
					  <option value="" disabled selected>Escolha o 1º ingrediente</option>
					<?php 
						$sql = "SELECT * FROM coqueteis RIGHT JOIN ingredientes ON coqueteis.id_ingrediente1 = ingredientes.id_ingrediente";
						$result = mysqli_query($connect, $sql);
						while($dados = mysqli_fetch_array($result)): 	
					?>
					  <option value=" <?php echo $dados['id_ingrediente']; ?>" id=" <?php $dados['id_ingrediente']; ?>"> <?php echo $dados['descricao']; ?></option>
					<?php endwhile; ?>
					</select>
			  	</div>
			  	<div class="input-field col s12">
					<select name="ingrediente2" class="browser-default">
					  <option value="" disabled selected>Escolha o 2º ingrediente</option>
					<?php 
						$sql = "SELECT * FROM coqueteis RIGHT JOIN ingredientes ON coqueteis.id_ingrediente2 = ingredientes.id_ingrediente";
						$result = mysqli_query($connect, $sql);
						while($dados = mysqli_fetch_array($result)): 	
					?>
					  <option value=" <?php echo $dados['id_ingrediente']; ?>" id=" <?php $dados['id_ingrediente']; ?>"> <?php echo $dados['descricao']; ?></option>
					<?php endwhile; ?>
					</select>
			  	</div>
			  	<div class="input-field col s12">
					<select name="ingrediente3" class="browser-default">
					  <option value="" disabled selected>Escolha o 3º ingrediente</option>
					<?php 
						$sql = "SELECT * FROM coqueteis RIGHT JOIN ingredientes ON coqueteis.id_ingrediente3 = ingredientes.id_ingrediente";
						$result = mysqli_query($connect, $sql);
						while($dados = mysqli_fetch_array($result)): 	
					?>
					  <option value=" <?php echo $dados['id_ingrediente']; ?>" id="<?php $dados['id_ingrediente']; ?>"> <?php echo $dados['descricao'];?></option>
					<?php endwhile; ?>
					</select>
			  	</div>
				<div class="input-field col s12">
					<p>
					<label style="margin-right: 60px;">
				    	<input type="checkbox" name="alcool" value="Sim" id="alcool"/>
				    	<span>Possui Álcool</span>
				    </label>
				    <label style="margin-right: 60px;">
				    	<input type="checkbox" name="lactose" value="Sim" id="lactose"/>
				    	<span>Possui Lactose</span>
				    </label>
				    <label style="margin-right: 60px;">
				    	<input type="checkbox" name="glutem" value="Sim" id="glutem"/>
				    	<span>Possui Glutem</span>
				    </label>
				    </p>
				</div>
				<button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
				<br><br>
				<a href="index.php" class="btn yellow black-text">Listar Coqueteis</a>
			</form>
	</div>
</div>

<?php include_once 'includes/footer.php' ?>

      