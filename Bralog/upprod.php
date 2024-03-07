<?php 
	
	include_once('config.php');

	$id = $_GET['id_prod'];
    $n_prod	= isset($_POST['n_prod']) == true ?$_POST['n_prod']:"";
	$v_prod  = isset($_POST['v_prod']) == true ?$_POST['v_prod']:"";

	$alterar = $conexao->query("UPDATE produtos SET n_prod ='$n_prod', v_prod ='$v_prod' WHERE id_prod='$id'");
	
	if(mysqli_affected_rows($conexao) > 0){
		header("location: prod.php");
	}
	
?>