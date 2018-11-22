<?php
/**
 * Created by PhpStorm.
 * User: p001495
 * Date: 22/11/2018
 * Time: 11:26
 */

include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");
include("banco-categoria.php");

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$usado = $produto['usado'] ? "checked='checked'" : "";

$categorias = listaCategorias($conexao);
?>

    <h1> Alterando o produto </h1>

    <form action="altera-produto.php" method="post">
        <input type="hidden" name="id" value="<?=$produto['id']?>">
        <table class="table">
            <tr>
                <td>Produto:</td>
                <td><input name="nome_produto" class="form-control" value="<?= $produto['nome'] ?>"></td>
            </tr>

            <tr>
                <td>Preço:</td>
                <td><input type="number" name="preco_produto" class="form-control" value="<?= $produto['preco'] ?>"</td>
            </tr>

            <tr>
                <td>Descrição:</td>
                <td><textarea name="descricao" class="form-control"><?= $produto['descricao'] ?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" name="usado" <?= $usado ?> value="true"> Usado
            </tr>
            <tr>
                <td>Categoria:</td>
                <td>
                    <select name="categoria_id" class="form-control">
                        <?php foreach ($categorias as $categoria):
                            $essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
                            $selecao = $essaEhACategoria ? "selected='selected'" : "";
                            ?>
                            <option value="<?= $categoria['id'] ?>" <?= $selecao ?>>
                                <?= $categoria['nome'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input class="btn btn-primary" type="submit" value="Alterar"/></td>
            </tr>
        </table>
    </form>

<?php include("rodape.php"); ?>