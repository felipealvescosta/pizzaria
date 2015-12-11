<?

	include("../config/conecta.php");

	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$preco = $_POST['preco'];
	$tamanho = $_POST['tamanho'];

	$sql = " INSERT INTO produtos (nome, descricao, preco, tamanho) VALUES ('$nome', '$descricao', '$preco','$tamanho')  ";

	$inserir = mysql_query($sql, $conecta);

	if($inserir){
		print("<h1> Produto cadastrado com sucesso.</h1>");
		header("Location:produto.php");
	}
	else{

		print("<h1> Algo incomum ocorreu, tente novamente.</h1>");
		sleep(1000);
		header("Location:cadastrar_produto.php");
	}
