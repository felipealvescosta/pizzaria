<?php

    include("../config/conecta.php");

	$cpf = $_GET['cpf'];
	



    $sql = "DELETE FROM entregadores	WHERE   cpf  = '$cpf' ";

	 $remover = mysql_query($sql, $conecta);

	 if ($remover) {
	 		header("Location:entregador.php");
	 }
	 else{
	 	header("Location:cadastrar_entregador.php");
	 }

?>