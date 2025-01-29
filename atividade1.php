<?php

//codigo para fazer a soma de dois numeros

$numero1 = (float)readline("digite um numero: ");
$numero2 = (float)readline("digite mais um numero: ");

echo somar($numero1, $numero2);function somar ($numero1, $numero2){
    return "resultado: ". ($numero1 + $numero2);

}


