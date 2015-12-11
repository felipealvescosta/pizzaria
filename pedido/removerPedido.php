<?php

	include("../config/conecta.php");

	$pedidos = $_GET['pedidos'];

	$sql = "DELETE FROM pedidos WHERE pedidos = $pedidos";
	$deletar = mysql_query($sql, $conecta);

	if ($deletar) {
		# code...
		header("Location:visualizar_pedido.php");
	}
	else{
		header("Location:pedido.php");
	}
