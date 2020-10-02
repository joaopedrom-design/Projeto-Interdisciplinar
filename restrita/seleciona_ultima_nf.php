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

	include'conecta.php';
	echo "<br><hr>";
	//consulta para selecionar a ultima nota,
	//a mais recente (aquela que iniciou o sistema)
	$consulta ="SELECT MAX(nf) as ultima FROM nota_fiscal";
	$consulta = $conexao->query($consulta);
	$linha = $consulta->fetch_assoc();
	$ultimo = $linha['ultima'];
	echo "Nota Fiscal: ".$ultimo ."<br>";
	echo "<hr>";
	//SERIA INTERRESANTE CRIAR UMA VARIAVEL DE SESSÃO NESTE PONTO PARA ADICIONAR VARIOS PRODUTOS
	// À ESSA MESMA NOTA FISCAL
	session_start();
	$_SESSION['nf'] = $ultimo;
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
</head>
   
		<title></title>
	</head>
	<body class="container">
		<form action="insere_item.php?nf='<?php echo $ultimo; ?>'" method="post">
			NF: <input type="text" name="nf" value="<?php echo $ultimo;?>">
			<br>
			<p>
				Produto:
				<select name="produto_opcao" id="produto_opcao">
				<?php
				//Cria um select com todos os produtos para o usuario escolher um
				$consulta = "SELECT * FROM produtos";
				foreach ($conexao -> query($consulta) as $linha) {
				?>
					<option value="<?php echo $linha['id'];?>"><?php echo $linha['nome'];?></option>
				<?php
				}
				?>	
				</select>
			</p>
			<p>
				Qtde: <input type="text" name="qtde">
			</p>
			<hr>
			<input type="submit" name="ADICIONAR">
		</form>
	</body>
	</html>