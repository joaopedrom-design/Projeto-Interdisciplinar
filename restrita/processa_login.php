<?php
	session_start();
	include 'conecta_user.php';

	$email = $_POST['email'];
	$senha = $_POST['senha'];

 	$consulta = "SELECT * FROM usuarios 
 	WHERE email = '$email' AND senha = '$senha'";  
 	$resultado = $conexao -> query($consulta);	
 	$registros = $resultado -> num_rows;

 	//Para variavel da sessão:
 	//id, nome, email, nivel

 	$registro_usuario = mysqli_fetch_assoc($resultado);

 	//print_r($registro_usuario);

 	if ($registros == 1) {

 		$_SESSION['id'] = $registro_usuario['id'];
 		$_SESSION['nome'] = $registro_usuario['nome'];
 		$_SESSION['email'] = $registro_usuario['email'];
 		$_SESSION['nivel'] = $registro_usuario['nivel'];

 		//SESSÃO é tipo Global
 		header('Location: restrita.php');
 	}
 	else{
 		header('Location: ../index.html');
 	}
?>