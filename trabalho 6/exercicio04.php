<?php
    $valor_compra = 170;
    $possui_cupom = false;
    $promo = false;

    if ($valor_compra > 150 || $possui_cupom == true){

    $valor_final = $valor_compra * 0.90;
    $promo = true;

    }else {
    $mensagem_promo = "Voce não tem desconto!";
    }
    $resultado_final = ($promo == true) ?  "Voce tem Desconto para o valor R$: $valor_compra , voce tem 10% de desconto e o valor descontado com a promoção fica R$: $valor_final " : " $mensagem_promo  ";
    echo $resultado_final . "\n";
?>