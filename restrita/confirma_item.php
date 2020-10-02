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
 <!--	<link rel="stylesheet" href="assets/css/main.css" />-->
   <link rel="stylesheet" type="text/css" href="../assets/css/estilo.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<body class="container">
<?php
//Confirma_item.php
include 'conecta.php';
echo "<br> <hr>";
session_start();
$nf = $_SESSION['nf'];

$consulta = "SELECT * FROM itens_nf WHERE num_nf = '$nf'";

echo "<h1> NF: ". $nf. "</h1><br><hr>";
$total = 0;
foreach($conexao -> query($consulta) as $linha){

echo "Código do Produto: ". $linha['cod_produto'] . "<br>";
echo "Quantidade: ". $linha['qtde'] . "<br>";
echo "Subtotal: ". $linha['subtotal'] . "<br>";
$total = $total + $linha['subtotal'];
echo"<hr>";
}

echo "<b> Total da Nota R$: ". $total. "</b> <hr>";
?>


<h3> O que  deseja fazer?</h3>

    <form action="seleciona_ultima_nf.php" method="post">
          <input class="btn btn-outline-danger" type="submit" value="INSERIR OUTRO PRODUTO">
    </form>
    <br>
<!--<p><a href = "seleciona_ultima_nf.php"> Inserir outro produto </a> </p>-->

	    <form action="finalizar.php?total=<?php echo $total; ?>" method="post" >
          <input class="btn btn-outline-warning" type="submit" value="FINALIZAR NOTA FISCAL">
    </form>

<!-- <p><a href = "finalizar.php?total=<?php echo $total; ?>"> Finalizar Nota Fiscal</a> -->
</p>

</body>
</html>