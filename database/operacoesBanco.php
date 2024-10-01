<?php 
include 'config.php';

$db = conectarBanco();



function AdicionarDados(SQLite3 $conexao, $tabela, string $nome, int $preco, string $descricao, $quantidade) : void{
    $query = "INSERT INTO $tabela (Nome, Preço, Quantidade, descricao) VALUES (:Unome, :Upreco, :Uquantidade, :Udescricao)";
    $statment = $conexao->prepare($query);
    $statment->bindValue(':Unome', $nome);
    $statment->bindValue(':Upreco', $preco);
    $statment->bindValue(':Udescricao', $descricao);
    $statment->bindValue(':Uquantidade', $quantidade);
    $statment->execute();
}
