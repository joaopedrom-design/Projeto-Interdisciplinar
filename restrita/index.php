<?php
  session_start();


  if ((!isset($_SESSION['id']) == true) && (!isset($_SESSION['nome']) == true)
  && (!isset($_SESSION['email']) == true) &&(!isset($_SESSION['nivel']) == true)) {

    header('Location: ../index.html');
  }
?>


<!DOCTYPE html>
<html>
<head>
  <title>PROJETO INTERDISCIPLINAR</title>

  <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 <link rel="stylesheet" href="../assets/css/main2.css" />

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
  

<body class ="container"> 
            
            <h1><a href="index.php" id="logo">PROJETO INTERDISCIPLINAR </a></h1>
            <hr>
            
  <h2>INICIAR UMA VENDA</h2>

 
  <FORM action="data_nf.php" method="post"> 
             
                <p>o clicar em INICIAR VENDA, o sistema ira gerar uma nova nota fiscal na tabela nota fiscal sem o valor total.<br />
                Na proxima tela sera solicitada a data da Nota fiscal.<br />
                O valor total sera atualizado apos a inserção dos produtos na nota fiscal.</p>
               <hr>
              
              
              <input class="btn btn-primary" type="submit" value="INICIAR VENDA">
    <br>

     
    </FORM>
<h3>OUTRAS OPÇÔES</h3> 

    <form action="ver_nf.php" method="post" >
          <input class="btn btn-outline-warning" type="submit" value="VER NOTAS EMITIDAS">
    </form>

    <form action="ver_produtos.php" method="post">
          <input class="btn btn-outline-danger" type="submit" value="VER PRODUTOS">
    </form>

    <form action="cadastrar_item.php" method="post">
          <input class="btn btn-outline-light" type="submit" value="CADASTRAR PRODUTOS">
    </form>

    <form action="../index.html" method="post">
          <input class="btn btn-outline-light" type="submit" value="SAIR">
    </form>

</body>
</html>
