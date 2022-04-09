<?php

include 'chaves.php';

$PALAVRA_CHAVE  = strtoupper($_POST['chave']);
$PALAVRA_CRYPTO = strtoupper($_POST['crypto']);

$LEN                = strlen($PALAVRA_CHAVE); // RECUPERO A QUANTIDADE DE CARACTERES
$I                  = 1;
$pri                = 0;
$DECRIPTO           = "";

while($I <= $LEN){
    $letra_chave  = substr($PALAVRA_CHAVE,$pri,1);
    $letra_crypto = substr($PALAVRA_CRYPTO,$pri,1);

    $valor_chave = $CHAVES_LETRA[$letra_chave];
    $valor_crypto = $CHAVES_LETRA[$letra_crypto];
    
    $valor = $valor_crypto - $valor_chave;
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