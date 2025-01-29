<?php

//codigo para descobrir se um numero é par ou impar, sem interação 
function verificarParOuImpar($numero){
    if ($numero % 2 == 0){
        return "o numero $numero é par.";
    }else{
        return "o numero $numero é impar.";
    }
}
$numero = 3;
echo verificarParOuImpar($numero);
