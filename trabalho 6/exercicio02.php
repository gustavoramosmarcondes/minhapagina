<?php
 $peso = 65;
 $altura = 1.82;
 $imc = $peso / ($altura * $altura);
    if ($imc < 18.5){
    echo "Voce esta abaixo do peso";
    } else if ($imc >= 18.5 &&  $imc <= 24.9){
    echo "Voce esta peso normal";
    } else if ($imc >= 25 &&  $imc <= 29.9){
    echo "Voce esta em sobre peso";
    } else if ($imc >= 30){
    echo "Voce esta em sobre peso";
    }

?>