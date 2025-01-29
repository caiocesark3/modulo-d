<?php
//calculadora
$num1 = (float)readline("digite um numero: ");
$num2 = (float)readline("digite mais um numero: ");
$operação = readline("escolha uma operação (+, -, *, /,): ");
echo calcular ($num1, $num2, $operação);

function calcular ($num1, $num2, $operação){
    switch($operação){
        case '+':
            return "resultado: " . ($num1 + $num2);
            break;
            case '-':
                return "resultado: " . ($num1 - $num2);
                break;
                case '*':
                    return "resultado: " . ($num1 * $num2);
                    break;
                    case '/':
                        return $num2 != 0 ? "resultado: ". ($num1 / $num2) : "erro: divisão por zero";
                        default:
                        return "operação invalida";
    }
}
