<?php

    include("../config/conecta.php");

	$cnpj = $_GET['cnpj'];
	



    $sql = "DELETE FROM empresas	WHERE   cnpj  = '$cnpj' ";

	 $remover = mysql_query($sql, $conecta);

	 if ($remover) {
	 		header("Location:empresa.php");
	 }
	 else{
	 	header("Location:cadastrar_empresa.php");
	 }

?>