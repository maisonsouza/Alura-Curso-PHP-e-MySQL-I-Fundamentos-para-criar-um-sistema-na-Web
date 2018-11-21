<?php
/**
 * Created by PhpStorm.
 * User: p001495
 * Date: 21/11/2018
 * Time: 16:25
 */
function listaCategorias($conexao){
    $categorias = array();
    $resultado = mysqli_query($conexao,"select * from categorias");
    while($categoria = mysqli_fetch_assoc($resultado)){
        array_push($categorias,$categoria);
    }

    return $categorias;
}