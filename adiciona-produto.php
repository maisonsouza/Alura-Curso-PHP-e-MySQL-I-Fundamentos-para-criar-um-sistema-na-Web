<?php
/**
 * Created by PhpStorm.
 * User: maiso
 * Date: 18/11/2018
 * Time: 20:14
 */
?>

<?php include("cabecalho.php"); ?>
<?php
$nome_produto = $_GET["nome_produto"];
$preco_produto = $_GET["preco_produto"];
$conexao = mysqli_connect('localhost', 'root', '', 'loja');
$query = "insert into produtos (nome,preco) values ('{$nome_produto}',{$preco_produto})";
if(mysqli_query($conexao, $query)) {?>
    <p class="alert-success">Produto <?= $nome_produto ?> no valor de <?= $preco_produto ?> reais adicionado com
        sucesso</p>
<?php } else { ?>
    <p class="alert-danger">Produto não foi adicionado</p>
<?php } ?>
<?php include("rodape.php"); ?>