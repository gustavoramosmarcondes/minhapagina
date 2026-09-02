<?php
$dia = 3;
$mensagem = "";

switch ($dia) {
    case 1:
        $mensagem = "Domingo";
        echo "Esse dia é $mensagem";
        break;
    case 2:
        $mensagem = "Segunda-feira";

        break;
    case 3:
        $mensagem = "Terça-feira";

        break;
    case 4:
        $mensagem = "Quarta-feira";

        break;
    case 5:
        $mensagem = "Quinta-feira";

        break;
    case 6:
        $mensagem = "Sexta-feira";

        
        break;
    case 7:
        $mensagem = "Sabado";

        break;
    default:
        echo "Dia inválido $mensagem";
        break;
}
echo "Esse dia é: $mensagem";
?>