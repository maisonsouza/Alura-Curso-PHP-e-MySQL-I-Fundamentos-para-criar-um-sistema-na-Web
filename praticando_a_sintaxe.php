<?php
/**
 * Created by PhpStorm.
 * User: maiso
 * Date: 19/11/2018
 * Time: 08:57
 */

function somaArray ($numeros){
    $soma=0;
    for($i=0;i<sizeof($numeros);$i++){
        $soma += $numeros[$i];
    }
    return $soma;
}