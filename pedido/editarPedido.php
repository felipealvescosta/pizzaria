<?php
	
	include("../config/conecta.php");

	$status = $_POST['status'];
	$pedido = $_POST['pedidos'];

	echo "$status";

	$sql = "UPDATE pedidos 
							SET 
								status = '$status'

							WHERE pedidos = $pedido ";

	$atualizar = mysql_query($sql, $conecta);

	if($atualizar){
		header("Location:visualizar_pedido.php");
	}
	else{
		header("Location:visualizar_pedido.php");
	}