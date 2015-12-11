<?php
	
	include("../config/conecta.php");

	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$preco = $_POST['preco'];
	$tamanho = $_POST['tamanho'];

	$sql = " UPDATE produtos 
							SET
								nome = '$nome' ,
								descricao = '$descricao' ,
								tamanho = '$tamanho',
								preco = '$preco' 

							WHERE nome = '$nome'";

	$atualizar = mysql_query($sql, $conecta);

	if($atualizar){
		header("Location:produto.php");
	}
	else{
		header("Location:editar_produto.php");
	}