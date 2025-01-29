<?php
//jogo de adivinhação
function AdivinheONumero(){
    $numeroSecreto = rand(1, 100);
    $tentativas = 5;
    
    echo "Esse é um jogo de adivinhação, tente adivinhar um numero de 1 a 100. você tem $tentativas tentativas.\n";

    for($i =1; $i <= $tentativas; $i++){
        $palpite = (int)readline("tentativas: $i: ");
        if ($palpite === $numeroSecreto){
            echo "parabens voce acertou o numero $numeroSecreto.\n";
            return;
            

        }elseif($palpite < $numeroSecreto){
            echo "o numero é maior.\n";
        }else{
            echo "o numero é menor. \n";

        }
    }
    echo "Game Over, o numero correto era $numeroSecreto.\n";

}
AdivinheONumero();