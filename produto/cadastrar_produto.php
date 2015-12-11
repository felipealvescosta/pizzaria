<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Sistema para pizzarias - Cliente, pizzaria Maveana.">
    <meta name="author" content="
                                Felipe Alves da Costa (0134361205)
                                Wambster Fadecio Barbosa Lemos (0132116905)
                                João Bosco Jardel Oliveira Ribeiro (0100244506)
                                Jose Carlos Jacinto da Silva (0137748305)
                                Alex Rodrigues de Souza (0138304805)
                                Francisco Sidney Lopes de Oliveira (0134910605)
                                ">

    <title>Pizzaria Maveana </title>

   
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="sticky-footer-navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

   <style type="text/css">

    .topo{
      height: 100px;
    }

     a:link{
        text-decoration: none;
      }
    </style>

  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Pizzaria Maveana</a>
        </div>
       <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="produto.php">Produto</a></li>
            <li><a href="#about">Sobre</a></li>
            <li><a href="#contact">Contato</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sistema <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../cliente.php">Clientes</a></li>
                <li><a href="../entregador.php">Entregadores</a></li>
                <li><a href="../empresa.php">Empresas</a></li>
                <li><a href="produto.php">Produto</a></li>
                <li><a href="../pedido.php">Pedidos</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
     </nav>

    <!-- Begin page content -->
    <div class="container">
      
    <br>
        <div class="page-header">
          <div class="row">
            <div class="col-xs-1 topo">
              <img src="../img/pizza.png" alt="Clientes" >
            </div>
            <div class="col-xs-11">
              <h2>Produto</h2>
            </div>
          </div>
        </div>
            <div class="row">
            <div class="col-xs-12 col-md-12">
               <section>
                   <form method="POST" action="cadastrarProduto.php">
                   
                        <h3>Cadastrar produto</h3><br>
                        <label>Nome</label><br>
                        <input type="text" name="nome"><br>
                        <label>Descrição</label><br>
                        <input type="text" name="descricao"><br>
                        <label>Preço</label><br>


                        <label>Tamanho</label><br>
                        <select name="tamanho">
                          <option value="pp">PP</option>
                          <option value="p">P</option>
                          <option value="m">M</option>
                          <option value="g">G</option>
                          <option value="gg">GG</option>
                          <option value="xg">XG</option>
                        </select>
                        <br><br>
                        <input type="text" name="preco"><br><br>
                       
                        <button class="btn btn-sucsses" type="submit">Cadastrar</button> <button class="btn btn-danger" type="submit">Cancelar</button>
        
                    </form>
                </section>
            </div>
        </div>
        </div>
    
    <footer class="footer">
      <div class="container">
        <hr>
        <p class="text-muted">
          <center>Sistema de gestão de pessoas e produtos </br> UNOPAR 2015.2</center>
        </p>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>