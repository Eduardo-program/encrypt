<?php

include 'chaves.php';

$PALAVRA_CHAVE  = strtoupper($_POST['chave']);
$PALAVRA_CRYPTO = strtoupper($_POST['crypto']);

$LEN                = strlen($PALAVRA_CHAVE); // RECUPERO A QUANTIDADE DE CARACTERES
$I                  = 1;
$pri                = 0;
$DECRIPTO           = "";

while($I <= $LEN){
    $letra_ori = substr($PALAVRA_CHAVE,$pri,1);
    $letra_cha = substr($PALAVRA_CRYPTO,$pri,1);

    $valor_1 = $CHAVES_LETRA[$letra_ori];
    $valor_2 = $CHAVES_LETRA[$letra_cha];
    
    $valor = $valor_2 - $valor_1;
    if($valor < 0){
        $valor = $valor + 26;
    }
    $letra = $CHAVES_NUMERO[$valor];

    $DECRIPTO .= $letra;

    $pri++;
    $I++;
}

echo $DECRIPTO;
?>