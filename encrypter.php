<?php

$CHAVES_LETRA = array( // ARRAY RESPONSAVEL POR GRAVAR LETRAS E VALORES CORREPONDENTES
    "A" => 0,
    "B" => 1,
    "C" => 2,
    "D" => 3,
    "E" => 4,
    "F" => 5,
    "G" => 6,
    "H" => 7,
    "I" => 8,
    "J" => 9,
    "K" => 10,
    "L" => 11,
    "M" => 12,
    "N" => 13,
    "O" => 14,
    "P" => 15,
    "Q" => 16,
    "R" => 17,
    "S" => 18,
    "T" => 19,
    "U" => 20,
    "V" => 21,
    "W" => 22,
    "X" => 23,
    "Y" => 24,
    "Z" => 25
);
$CHAVES_NUMERO = array(
    0 => "A",
    1 => "B",
    2 => "C",
    3 => "D",
    4 => "E",
    5 => "F",
    6 => "G",
    7 => "H",
    8 => "I",
    9 => "J",
    10 => "K",
    11 => "L",
    12 => "M",
    13 => "N",
    14 => "O",
    15 => "P",
    16 => "Q",
    17 => "R",
    18 => "S",
    19 => "T",
    20 => "U",
    21 => "V",
    22 => "W",
    23 => "X",
    24 => "Y",
    25 => "Z"
);

/*

*/


$PALAVRA_ORIGINAL   = $_POST['palavra']; // RECEBO A PALAVRA ORIGINAL
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
        $valor = number_format($valor,1,'.','');
        $valor = str_replace('.','',$valor);
    }
    $letra = $CHAVES_NUMERO[$valor];

    $CRIPTO .= $letra;

    $pri++;
    $I++;
}

echo $CRIPTO;


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