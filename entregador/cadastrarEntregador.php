<?php


	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$telefone = $_POST['telefone'];
	$empresa= $_POST['empresa'];



	include("../config/conecta.php");
	$sql = "INSERT INTO entregadores (nome, cpf, telefone, empresa)
						VALUES ('$nome', '$cpf', '$telefone', '$empresa')";

	$insere = mysql_query($sql, $conecta);

	if($insere){

		header("Location:entregador.php");

	}else{

		header("Location:cadastrar_entregador.php");

	}

?>

