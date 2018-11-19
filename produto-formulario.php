<?php
/**
 * Created by PhpStorm.
 * User: maiso
 * Date: 18/11/2018
 * Time: 20:23
 */
include ("cabecalho.php"); ?>

<h1> Formulário de cadastro </h1>

<form action="adiciona-produto.php">
    Produto: <input name="nome_produto">
    Preço: <input type="number" name="preco_produto">
    <input class="btn" type="submit" value="Cadastrar"/>

</form>

<?php include ("rodape.php"); ?>