<?php

//codigo para descobrir se um numero é par ou impar com interação
function verificarParOuImpar ($numero){
    if($numero % 2 == 0){
return "o numero $numero é par.";

    }else{
        return "o numero $numero é impar.";
        
    }
}

$numero = (int) readline("digite um numero: ");
echo verificarParOuImpar($numero);


