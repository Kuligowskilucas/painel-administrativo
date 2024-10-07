<?php 

include 'operacoesBanco.php';

$nome = $_POST['nome'] ?? '';
$preco = $_POST['preco'] ?? '';
$descricao = $_POST['descricao'] ?? '';
$quantidade = $_POST['quantidade'] ?? '';


if($nome && $preco && $quantidade){
    AdicionarDados($db, 'dados_produtos', $nome, $preco, $descricao, $quantidade);
}




