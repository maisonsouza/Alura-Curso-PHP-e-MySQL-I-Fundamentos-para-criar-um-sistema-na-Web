<?php
/**
 * Created by PhpStorm.
 * User: p001495
 * Date: 21/11/2018
 * Time: 12:06
 */


function insereProduto($conexao, $nome_produto, $preco_produto)
{
    $query = "insert into produtos (nome,preco) values ('{$nome_produto}',{$preco_produto})";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
}

function listaProdutos($conexao){
    $produtos = array();
    $resultado = mysqli_query($conexao,"select * from produtos");
    while($produto = mysqli_fetch_assoc($resultado)){
        array_push($produtos);
    }
    return $produtos;
}