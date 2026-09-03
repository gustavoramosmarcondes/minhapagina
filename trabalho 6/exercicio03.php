<?php
$dia = 3;
$mensagem = "";

switch ($dia) {
    case 1:
        $mensagem = "Domingo, fim de semana";
        break;
    case 2:
        $mensagem = "Segunda-feira, dia util";

        break;
    case 3:
        $mensagem = "Terça-feira, dia util";

        break;
    case 4:
        $mensagem = "Quarta-feira, dia util";

        break;
    case 5:
        $mensagem = "Quinta-feira, dia util";

        break;
    case 6:
        $mensagem = "Sexta-feira, dia util";

        
        break;
    case 7:
        $mensagem = "Sabado, fim de semana";

        break;
    default:
        echo "Dia inválido $mensagem";
        break;
}
echo "Esse dia é: $mensagem";
?>