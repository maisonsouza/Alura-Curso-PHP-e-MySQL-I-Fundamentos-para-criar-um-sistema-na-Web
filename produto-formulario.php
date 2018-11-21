<?php
/**
 * Created by PhpStorm.
 * User: maiso
 * Date: 18/11/2018
 * Time: 20:23
 */
include("cabecalho.php");
include("conecta.php");
include("banco-categoria.php");

$categorias = listaCategorias($conexao);
?>

    <h1> Formulário de cadastro </h1>

    <form action="adiciona-produto.php" method="post">
        <table class="table">
            <tr>
                <td>Produto:</td>
                <td><input name="nome_produto" class="form-control"></td>
            </tr>
            <tr>
                <td>Preço:</td>
                <td><input type="number" name="preco_produto" class="form-control"></td>
            </tr>
            <tr>
                <td>Descrição:</td>
                <td><textarea name="descricao" class="form-control"></textarea></td>
            </tr>
            <tr>
                <td>Categoria:</td>
                <td>
                    <?php foreach ($categorias as $categoria): ?>
                        <input type="radio" name="categoria_id" value="<?= $categoria['id'] ?>"><?=$categoria['nome']?><br>

                    <?php endforeach; ?>
                </td>
            </tr>
            <tr>
                <td><input class="btn btn-primary" type="submit" value="Cadastrar"/></td>
            </tr>
        </table>
    </form>

<?php include("rodape.php"); ?>