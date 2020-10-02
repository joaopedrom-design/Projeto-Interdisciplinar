<?php
	$host= "localhost";
	$usuario="root";
	$senha= "";
	$banco="aula_php";

	$conexao = new MySQLi("$host","$usuario","$senha","$banco");

	if ($conexao -> connect_error ) {
		echo "ERRO DE CONEXÃO";
	}
	else{
		echo "CONECTADO AO BANCO DE DADOS: aula_php <br>";

	}
?>