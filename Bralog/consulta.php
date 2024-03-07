<?php 
	include_once('config.php');

	$sql_code = "SELECT * FROM produtos";
	$sql_query = $conexao->query($sql_code) or die("ERRO ao consultar! " . $conexao->error); 
	
	if ($sql_query->num_rows == 0) {
		?>
	<tr>
		<td colspan="3">Nenhum resultado encontrado...</td>
	</tr>
	<?php
	} else {
		while($dados = $sql_query->fetch_assoc()) {
			?>
			<tr id="tab">
				<td data-cell="id_prod"><?php echo $dados['id_prod']; ?></td>
				<td data-cell="n_prod"><?php echo $dados['n_prod']; ?></td>
				<td data-cell="v_prod">R$ <?php echo $dados['v_prod']; ?></td>
				<td><a href='edit.php?id_prod=<?php echo $dados['id_prod']; ?>' class='btn'><img src='./images/editar.png'></a></td>
				<td><a href='confidelete.php?id_prod=<?php echo $dados['id_prod']; ?>'><img src='./images/deletar.png'></a></td>
			</tr>
			
			<?php
		}
	}


?>