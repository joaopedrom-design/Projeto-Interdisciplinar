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

    header('Location: .../index.html');
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>CADASTRAR PRODUTO</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 	<link rel="stylesheet" href="../assets/css/main2.css" >

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
</head>
<body>
	<section class ="container">
    <br>
    <br>
      <h2>Cadastre um Produto</h2>
      <form action="processa_cad_pd.php" method="POST">

        <div class="form-group">
            <label><h5> Insira o Nome do Produto </h5> <label> 
            <input type ="text" name="nome_pd" class="form-control" >
       
          <p><h5>Insira o Preço do Produto </h5></p>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text">R$</span>
            </div>
          <input type ="text" name = "preco" class="form-control">
          </div>

         <button type="submit" class="btn btn-success"> Continuar </button>
      </form>
      <br>
      <form action="index.php">
      	 <button type="submit" class="btn btn-danger"> Volta</button>
      </form>
  </section>
</body>
</html>