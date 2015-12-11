<?php

	include("../config/conecta.php");

	$nome = $_GET['nome'];

	$sql = "DELETE FROM produtos WHERE nome = '$nome'";

	$deletar = mysql_query($sql, $conecta);

	if($deletar){
		header("Location:produto.php");
	}
	else{
		header("Location:visualizar_produto.php");
	}