<?php

function excluirValor(array $num, $valores){
    for($i=0; $i<= count($num); $i++){
        if($num[$i] == $valores){
            unset($num[$i]);

            return $num;
        }
    }
    return false;
}

$numerosInteiros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

print_r(excluirValor($numerosInteiros, 5));