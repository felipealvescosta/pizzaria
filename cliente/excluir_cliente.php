<?php

	$telefone = $_GET['telefone'];

	include("../config/conecta.php");

	$telefone = $_GET['telefone'];

	$sql  =  "DELETE FROM clientes WHERE telefone = '$telefone'";

	$deleta = mysql_query($sql, $conecta);

	if($deleta){
		header('Location:cliente.php');
	}
	else{
		header('Location:editar_cliente.php');
	}

