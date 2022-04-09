<?php

include 'chaves.php';


$PALAVRA_ORIGINAL   = strtoupper($_POST['palavra']); // RECEBO A PALAVRA ORIGINAL
$LEN                = strlen($PALAVRA_ORIGINAL); // RECUPERO A QUANTIDADE DE CARACTERES
$PALAVRA_CHAVE      = geraString($LEN); // GERO UM STRING ALEATORIA COM A MESMA QUANTIDADE DE CARACTERES DA PALAVRA ORIGINAL
$I                  = 1;
$pri                = 0;
$CRIPTO             = "";

while($I <= $LEN){
    $letra_ori = substr($PALAVRA_ORIGINAL,$pri,1);
    $letra_cha = substr($PALAVRA_CHAVE,$pri,1);

    $valor_1 = $CHAVES_LETRA[$letra_ori];
    $valor_2 = $CHAVES_LETRA[$letra_cha];
    
    $valor = $valor_1 + $valor_2;
    
    if($valor > 25){
        $valor = $valor / 26;
        $valor = substr($valor,0,3);
        $valor = str_replace('.','',$valor);
    }
    $letra = $CHAVES_NUMERO[$valor];

    $CRIPTO .= $letra;

    $pri++;
    $I++;
}

echo '        PALAVRA CHAVE: <b>' . $PALAVRA_CHAVE . '</b><br>';
echo 'PALAVRA CRIPTOGRAFADA: <b>' . $CRIPTO . '</b><br>';
exit;


function geraString($LEN){ // FUNCAO RESPONSAVEL POR GERAR A PALAVRA CHAVE
    $alfabeto   = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $tamanho    = strlen($alfabeto);
    $LEN        = $LEN;
    $chave      = "";
    for( $x = 1; $x <= $LEN; $x++ ) {  
        $chave .= $alfabeto[ rand( 0, $tamanho - 1 ) ];  
    }
    return $chave;
}


?>