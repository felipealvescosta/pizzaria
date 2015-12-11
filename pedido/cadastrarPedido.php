<?
	include("../config/conecta.php");

	$cliente  = $_POST['cliente'];
	$produto = $_POST['produto'];
	$quantidade = $_POST['quantidade'];
	$entregador = $_POST['entregador'];
	$status = $_POST['status'];
	

	$pegapreco = "SELECT preco FROM produtos WHERE nome = '$produto'";
	$vemnimimpreco = mysql_query($pegapreco, $conecta);
	
	while($consulta = mysql_fetch_assoc($vemnimimpreco)){
		$valor = $consulta['preco'];
	}

	
	$total = ($valor * $quantidade);
	echo "$total";

	$sql =  "INSERT INTO pedidos (cliente, produto, quantidade, total, entregador, status) VALUES ('$cliente', '$produto', '$quantidade', '$total','$entregador','$status')";
	$res = mysql_query($sql, $conecta);

	if($res){
		echo "Deu certo";
		header("Location:pedido.php");
	}
	else{
		echo "não deu certo";
		header("Location:cadastrar_pedido.php");
	}
	mysql_close($conecta);
?>

	