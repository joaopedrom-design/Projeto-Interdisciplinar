<?php  
	include'conecta.php';
	//formato da data atual 2020-08-30
	//Ao clicar para continuar, sera feito um insert
	//na tabela total em branco que sera atualizado mais a frente
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 	<link rel="stylesheet" href="../assets/css/main2.css" />
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<title>DATA NOTA FISCAL</title>
	
</head>

<body class ="container"> 
	<div>
	<FORM action="gera_nf.php" method="post">
		<p>INSIRA A DATA DA VENDA</p>
		DATA: <input class="btn btn-dark" type="date" name="data">
		<hr>
		<input class="btn btn-sucess" type="submit" value="CONTINUAR">	
	</FORM>

	<form action="index.php" method="post">
		<input class="btn btn-danger" type="submit" value="VOLTAR">
	</form>
</div>
</body>
</html>