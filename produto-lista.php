<?php
/**
 * Created by PhpStorm.
 * User: p001495
 * Date: 21/11/2018
 * Time: 11:28
 */
include ("cabecalho.php");
include ("conecta.php");
$resultado = mysqli_query($conexao,"select * from produtos");
while($produto = mysqli_fetch_assoc($resultado)){
    echo $produto['nome']."<br>";
}
include ("rodape.php");