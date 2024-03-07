<?php 
	include_once('config.php');

	$id = $_GET['id_prod'];

	$deletar = $conexao->query("DELETE FROM produtos WHERE id_prod='$id'");

	if (mysqli_affected_rows($conexao) > 0) {

		header("Location: prod.php");
	}
?>