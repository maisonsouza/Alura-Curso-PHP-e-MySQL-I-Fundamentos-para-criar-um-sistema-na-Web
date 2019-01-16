<?php
/**
 * Created by PhpStorm.
 * User: p001495
 * Date: 21/11/2018
 * Time: 11:28
 */
include ("cabecalho.php");
include ("conecta.php");
include ("banco-produto.php");
?>

<?php
    if(array_key_exists("removido",$_GET) && $_GET['removido']==true){
        ?>
        <p class="alert-success">Produto apagado com sucesso</p>
        <?php
    }
    ?>
    <table class="table table-striped table-bordered">
        <?php
        $produtos = listaProdutos($conexao);
        foreach ($produtos as $produto):
        ?>
<tr>
    <td><?=$produto['nome']?></td>
    <td><?=$produto['preco']?></td>
    <td>
        <a href="remove-produto.php?id=<?=$produto['id']?>" class="text-danger">Remover</a></td>
</tr>

        <?php
        endforeach;
        ?>
    </table>


<?php include ("rodape.php");