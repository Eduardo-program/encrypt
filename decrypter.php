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