<?php
/**
 * Created by PhpStorm.
 * User: p001495
 * Date: 21/11/2018
 * Time: 12:06
 */
function listaProdutos($conexao)
{
    $produtos = array();
    $resultado = mysqli_query($conexao, "select p.*,c.nome as categoria_nome from produtos as p join categorias as c on c.id=p.categoria_id");
    while ($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
    }

    return $produtos;
}

function insereProduto($conexao, $nome_produto, $preco_produto, $descricao, $categoria_id)
{
    $query = "insert into produtos (nome,preco,descricao,categoria_id) values ('{$nome_produto}',{$preco_produto},'{$descricao}',{$categoria_id})";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
}

function removeProduto($conexao, $id)
{
    $query = "delete from produtos where id={$id}";
    $resultadoDaRemocao = mysqli_query($conexao, $query);
    return $resultadoDaRemocao;
}