
<!DOCTYPE html>
<html>
<head>
	<title>VER PRODUTOS</title>
	  <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 <link rel="stylesheet" href="../assets/css/estilo.css" />

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                                <strong class="card-title">PRODUTOS</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>PRODUTO</th>
                                            <th>PREÇO</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php

	include'conecta.php';
	echo "<hr>";

	$consulta = "SELECT * FROM produtos";
	
	foreach ($conexao -> query($consulta) as $linha) {
	echo "<tr>";
	echo "<th> ".$linha['id']."</th>";
	echo "<th> ".$linha['nome']."</th>";
	echo "<th> ".$linha['preco']."</th>";
	echo "</tr>";

}

?>
      							 	</tbody>
                               </table>
                          </div>
                </div>
 </div>
 <br>
  <form action="index.php" method="post">
          <input class="btn btn-outline-danger" type="submit" value="VOLTAR INICIO">
    </form>
 <br>
</body>
</html>