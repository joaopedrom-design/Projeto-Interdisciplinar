<?php
include 'conecta.php';
echo "<br>";
$nomePd = $_POST['nome_pd'];
$precoPd = $_POST['preco'];

// Mostrar iten selecionado e insere na tabela itens_nf
// pede confirmação se quer adicionar mais itens

$consulta = $conexao -> prepare(
    "INSERT INTO produtos (nome, preco) VALUES('$nomePd','$precoPd')");

$consulta -> execute();

header('Location: cadastrar_item.php');
?>