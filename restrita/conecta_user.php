<?php
	$host= "localhost";
	$usuario="root";
	$senha= "";
	$banco="loginphp";

	$conexao = new MySQLi("$host","$usuario","$senha","$banco");

	if ($conexao -> connect_error) {
		echo "ERRO DE CONEXÃO";
	}
	
	else{
		echo "CONEXÃO BEM SUCEDIDA";

	}
?>