<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="assets/css/main2.css" />
  <!--   <link rel="stylesheet" type="text/css" href="assets/css/estilo.css"> -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
  <!--NAV BAR-->
<!--class="navbar navbar-inverse navbar-fixed-top"-->
 <header >
		 <nav class="navbar navbar-dark bg-secondary" id="nav" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">PROJETO INTERDISCIPLINAR</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

          <!--LOGIN NAV BAR-->
  <form class="navbar-form navbar-right" action="processa_login.php" method="POST">
            <div class="form-group">
              <input type="text" name="email" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name="senha" placeholder="Senha" class="form-control">
            </div>
            <input type="submit" class="btn btn-success" value="Entrar">
          </form>
      </div>
    </div>
    </nav>
</header>


  <form action="processa_login.php" method="POST">
   DIGITE SEU EMAIL: <input type="text" name="email"><br>
   DIGITE SUA SENHA: <input type="text" name="senha"><br>
   <hr>
   <input type="submit" name="ENVIAR">
  </form>

</div>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div >"jumbotron"
      <div class="container">
        <h1>joaopedro@gmail.com, senha: 12345, nivel 1</h1>
        <h1>fulanosilva@gmail.com, senha: 12345, nivel 2</h1>
        <p>Projeto Interdisciplinar das materias DDW, CPA, MDBD e PW-1.</p>
      </div>
    </div>
</body>

</html>