<?php

    include("../config/conecta.php");

    $nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$telefone = $_POST['telefone'];
	$empresa= $_POST['empresa'];



    $sql = "UPDATE entregadores 
    							SET
    								nome = '$nome',
									cpf = '$cpf',
									telefone = '$telefone',
									empresa= '$empresa'

								WHERE   cpf  = '$cpf' ";

	 $atualizar = mysql_query($sql, $conecta);

	 if ($atualizar) {
	 		header("Location:entregador.php");
	 }
	 else{
	 	header("Location:cadastrar_entregador.php");
	 }

?>