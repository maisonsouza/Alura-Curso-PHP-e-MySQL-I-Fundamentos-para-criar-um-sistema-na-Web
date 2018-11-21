<?php
/**
 * Created by PhpStorm.
 * User: maiso
 * Date: 18/11/2018
 * Time: 20:14
 */


include("cabecalho.php");
include("conecta.php");

function insereProduto($conexao, $nome_produto, $preco_produto)
{
    $query = "insert into produtos (nome,preco) values ('{$nome_produto}',{$preco_produto})";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
}

$nome_produto = $_GET["nome_produto"];
$preco_produto = $_GET["preco_produto"];

if (insereProduto($conexao, $nome_produto, $preco_produto)) { ?>
    <p class="text-success">Produto <?= $nome_produto ?> no valor de <?= $preco_produto ?> reais adicionado com
        sucesso</p>
<?php } else { ?>
    <?php $msg = mysqli_error($conexao) ?>
    <p class="text-danger">Produto não foi adicionado: <?= $msg ?></p>

<?php } ?>
<?php include("rodape.php"); ?>