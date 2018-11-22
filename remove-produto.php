<?php
/**
 * Created by PhpStorm.
 * User: p001495
 * Date: 21/11/2018
 * Time: 13:18
 */

include("conecta.php");
include("banco-produto.php");
$id = $_POST['id'];
removeProduto($conexao,$id);
header("Location:produto-lista.php?removido=true");
die();
?>

