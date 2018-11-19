<?php
/**
 * Created by PhpStorm.
 * User: maiso
 * Date: 18/11/2018
 * Time: 20:14
 */
?>

<?php include ("cabecalho.php");
$nome_produto = $_GET["nome_produto"];
$preco_produto = $_GET["preco_produto"];?>
<p class="alert-success">Produto <?=$nome_produto?> no valor de <?=$preco_produto?> reais adicionado com sucesso</p>
<?php include ("rodape.php");