<?php
//tabuada
function tabuada($numero){
    echo "tabuada do $numero:\n";
    for ($i = 1; $i <= 10; $i++){
    echo "$numero x $i =". ($numero * $i)."\n";
}

}
$numero = (int) readline("para ver a tabuada, digite um numero: ");
tabuada($numero);

