<?php

    include("../config/conecta.php");

    $nome = $_POST['nome'];
	$cnpj = $_POST['cnpj'];
	$telefone = $_POST['telefone'];
	$email= $_POST['email'];
	$endereco = $_POST['endereco'];



    $sql = "UPDATE empresas 
    							SET
    								nome = '$nome',
									cnpj = '$cnpj',
									telefone = '$telefone',
									email= '$email',
									endereco = '$endereco'

								WHERE   cnpj  = '$cnpj' ";

	 $atualizar = mysql_query($sql, $conecta);

	 if ($atualizar) {
	 		header("Location:empresa.php");
	 }
	 else{
	 	header("Location:cadastrar_empresa.php");
	 }

?>