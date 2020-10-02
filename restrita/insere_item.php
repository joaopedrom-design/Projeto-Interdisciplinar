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
	<title>ITEM DA NOTA FISCAL</title>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 	<link rel="stylesheet" href="../assets/css/main2.css" >

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body class="container">
	
<?php
	include'conecta.php';
	echo "<hr><br>";

	//ESSE ARQUIVO DEVE PEGAR CADA PRODUTO SELECIONADO
	// CALCULAR O SUBTOTAL DE CADA ITEM E ADICIONAR A
	// TABELA ITENS_NF

	session_start();
	$nf = $_SESSION['nf'];
	echo "<b> Numero da NF: " . $nf . "</b><br>";
	$id_prod = $_POST['produto_opcao'];
	$qtde_prod = $_POST['qtde'];

	//echo "cod produto: ".$id_prod."<br>";
	//echo "Qtde: ".$qtde_prod."<br>";

	//ec ho"PRECISA CALCULAR O SUBTOTAL DESTE PRODUTO!<br>";

	$consulta = "SELECT preco,nome FROM produtos WHERE id='$id_prod'";
	$consulta = $conexao -> query($consulta);
	$linha = $consulta -> fetch_assoc();
	print_r($linha);
	$preco = $linha['preco'];
	$nome = $linha['nome'];

	//echo "Valor Unitario: R$ ".$preco."<br>";
	//FAZ O CALCULO DO SUBTOTAL DO  PRODUTO SELECIONADO
	$subtotal = $preco * $qtde_prod;

	//echo "Subtotal: R$ ".$subtotal."<br>";
?>
	<div>
	<FORM action="insere_item_nf.php" method="POST">
		<p>
			ID PRODUTO : <input type="text" name="id_prod" value="<?php echo $id_prod; ?>" reandoly="reandoly">
		</p>
		<br>
		<p>
			PRODUTO : <input type="text" name="nome_prod" value="<?php echo $nome; ?>" reandoly="reandoly">
		</p>
		<br>
		<p>
			VALOR UNIT : <input type="text" name="valor_unit" value="<?php echo $preco; ?>" reandoly="reandoly">
		</p>
		<br>
		<p>
			QTDE : <input type="text" name="qtde" value="<?php echo $qtde_prod; ?>" reandoly="reandoly">
		</p>
		<br>
		<p>
			SUBTOTAL : <input type="text" name="subtotal" value="<?php echo $subtotal; ?>" reandoly="reandoly">
		</p>

		<input type="submit" class="btn btn-success" name="ADICIONAR PRODUTO">
	</FORM>

	<br>

	<form action="index.php" >
          <input class="btn btn-outline-danger" type="submit" value="VOLTAR">
    </form>

	</div>
</body>
</html>