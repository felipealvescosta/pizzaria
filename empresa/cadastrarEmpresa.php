<?php
	include("../config/conecta.php");

	$nome = $_POST['nome'];
	$cnpj = $_POST['cnpj'];
	$telefone =$_POST['telefone'];
	$endereco =$_POST['endereco'];
	$email =$_POST['email'];


	$sql= "INSERT INTO  empresas (nome, cnpj, telefone, endereco, email)  VALUES ('$nome', '$cnpj', '$telefone', '$endereco', '$email') ";

	$inserir = mysql_query($sql, $conecta);

	if($inserir){
		header("Location:empresa.php");
	}
	else{
		header("Location:cadastrar_empresa.php");
	}
?>
