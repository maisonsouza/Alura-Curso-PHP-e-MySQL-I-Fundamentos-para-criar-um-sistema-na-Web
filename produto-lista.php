<?php
/**
 * Created by PhpStorm.
 * User: p001495
 * Date: 21/11/2018
 * Time: 11:28
 */
include ("cabecalho.php");
include ("conecta.php");
?>
<?php
    if(array_key_exists("removido",$_GET) && $_GET['removido']==true){
        ?>
        <p class="alert-success">Produto apagado com sucesso</p>
        <?php
    }
    ?>
$resultado = mysqli_query($conexao,"select * from produtos");
while($produto = mysqli_fetch_assoc($resultado)){
    echo $produto['nome']."<br>";
}
include ("rodape.php");