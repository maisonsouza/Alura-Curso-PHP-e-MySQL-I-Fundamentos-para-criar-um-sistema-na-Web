<?php
/**
 * Created by PhpStorm.
 * User: p001495
 * Date: 21/11/2018
 * Time: 11:28
 */
include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");
?>
<table class="table table-striped table-bordered">
    <?php
    $produtos = listaProdutos($conexao);
    foreach ($produtos as $produto):
        ?>
        <tr>
            <td><?
                $produto['nome'] ?></td>
            <td><?
                $produto['preco'] ?></td>
        </tr>
    <?php
    endforeach;
    ?>
</table>
include ("rodape.php");