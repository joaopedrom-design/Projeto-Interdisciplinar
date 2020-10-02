<?php
  session_start();
  /*
  $_SESSION['id']
  $_SESSION['nome'] 
  $_SESSION['email'] 
  $_SESSION['nivel']
  */

  if ((!isset($_SESSION['id']) == true) && (!isset($_SESSION['nome']) == true)
  && (!isset($_SESSION['email']) == true) &&(!isset($_SESSION['nivel']) == true)) {

    header('Location: ../index.html');
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/estilo.css">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body>
 <header >
		 <nav class="navbar navbar-dark bg-secondary" id="nav" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand">PROJETO INTERDISCIPLINAR</a>
        </div>
        
      </div>
    </nav>
</header>
<div class="container">
 <div class="col-sm-12">
                <div class="card">
                            <div class="card-header">
                                <strong class="card-title">NOTAS FISCAIS</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>NF</th>
                                            <th>DATA</th>
                                            <th>ID</th>
                                            <th>CodPRODUTO</th>
                                            <th>NOME</th>
                                            <th>VALOR UNIT</th>
                                            <th>QUANTIDADE</th>
                                            <th>SUB TOTAL</th>
                                            <th>VALOR TOTAL</th>
                                        </tr>
                                    </thead>
                                    <tbody>

<?php
	include'conecta.php';
	echo "<hr>";

	$consulta = "SELECT * FROM nota_fiscal";

	foreach ($conexao -> query($consulta) as $linha) {
		echo "NF: ".$linha['nf']."<br>";
		echo "DATA: ".$linha['data']."<br>";
		

//-------------------------------------------------------------------------------------
		$nota = $linha['nf'];
		$consulta2 = "SELECT * FROM itens_nf WHERE num_nf = '$nota'";
		foreach ($conexao -> query($consulta2) as $linha2){
			echo "ID: ".$linha2['id']." <br> ";

			echo "CodProduto: ".$linha2['cod_produto']." - ";
//------------------------------------------------------------------------------
			$codigo = $linha2['cod_produto'];

		$consulta3 = "SELECT * FROM produtos WHERE id = '$codigo'";
		foreach ($conexao -> query($consulta3) as $linha3){
			echo "NOME: ".$linha3['nome']." - ";
			echo "VALOR UNIT R$: ".$linha3['preco']." - ";
		}
		echo "QTDE: ".$linha2['qtde']." <br> ";
		echo "SUB TOTAL: ".$linha2['subtotal']."<br>";
		}
		echo "VALOR TOTAL R$: ".$linha['valor_total']."<br>";		
		echo "<hr>";
	}
	echo "<br>";
?>
      							 </tbody>
                                </table>
                            </div>
                        </div>
            </div>
            <hr>
 <form action="index.php" method="post">
          <input class="btn btn-outline-danger" type="submit" value="VOLTAR INICIO">
    </form>

</div>
</body>
</html>