<?php

function inverterVetor(array $vetor){
    $invertendoVetor = [];

    for($i = (count($vetor) - 1); $i >= 0; $i= $i - 1){
        $invertendoVetor[] = $vetor[$i];
    }
    return $invertendoVetor;
}

$vetorAleatorio = [1, 2, 3, 4, 5, 6, 7];
$invertendoVetor = inverterVetor($vetorAleatorio);
print_r($invertendoVetor);