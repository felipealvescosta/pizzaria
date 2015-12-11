<?php 

	require_once("../config/conecta.php");

	$nome =     $_POST['nome'];
	$telefone = $_POST['telefone'];
	$endereco = $_POST['endereco'];
	$referencia = $_POST['referencia'];
	$nascimento = $_POST['nascimento'];
	$nascimento = date("Y-m-d",strtotime(str_replace('/','-',$nascimento)));


	
	$sql = "UPDATE  clientes 
							SET
							   nome = '$nome',
							   telefone = '$telefone',
							   endereco = '$endereco', 
							   referencia = '$referencia',
							   nascimento = '$nascimento'

							   WHERE telefone = '$telefone'";



	$atualiza = mysql_query($sql, $conecta);

	if($atualiza){
		echo "<script  language='javascript'  charset='utf-8' type='text/javascript' >alert('Funfou... =) ');</script>";
		header("Location:cliente.php");
	}
	else{
		echo "<script  language='javascript'  charset='utf-8' type='text/javascript>alert('Não Funfou... =)'); window.location.href='cadastrar_cliente.php';</script>";
		header("Location:cliente.php");	
	}
