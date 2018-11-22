<?php
/**
 * Created by PhpStorm.
 * User: p001495
 * Date: 22/11/2018
 * Time: 12:01
 */

include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");

$id=$_POST['id'];
$nome_produto = $_POST['nome_produto'];
$preco_produto = $_POST['preco_produto'];
$descricao = $_POST['descricao'];
$categoria_id = $_POST['categoria_id'];
if (array_key_exists('usado',$_POST)){
    $usado = "true";
}else{
    $usado = "false";
}


if (alteraProduto($conexao, $id, $nome_produto, $preco_produto, $descricao, $categoria_id,$usado)) { ?>
    <p class="text-success">Produto <?= $nome_produto ?> no valor de <?= $preco_produto ?> reais alterado com
        sucesso</p>
<?php } else { ?>
    <?php $msg = mysqli_error($conexao) ?>
    <p class="text-danger">Produto não foi alterado: <?= $msg ?></p>

<?php } ?>
<?php include("rodape.php"); ?>