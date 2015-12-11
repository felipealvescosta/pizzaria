<?php
	
	require_once("../config/conecta.php");

	$nome =     $_POST['nome'];
	$telefone = $_POST['telefone'];
	$endereco = $_POST['endereco'];
	$referencia = $_POST['referencia'];
	$nascimento = $_POST['nascimento'];
	$nascimento = date("Y-m-d",strtotime(str_replace('/','-',$nascimento)));


	
	$sql = "INSERT INTO  clientes (nome, telefone, endereco, referencia, nascimento) VALUES ('$nome', '$telefone','$endereco', '$referencia','$nascimento') ";
	$insert = mysql_query($sql, $conecta);

	if($insert){
		echo "<script  language='javascript'  charset='utf-8' type='text/javascript>alert('Funfou... =) '); window.location.href='cadastrar_cliente.php';</script>";
		header("Location:cadastrar_cliente.php");
	}
	else{
		echo "<script  language='javascript'  charset='utf-8' type='text/javascript>alert('Não Funfou... =)'); window.location.href='cadastrar_cliente.php';</script>";
		header("Location:cadastrar_cliente.php");	
	}


?>