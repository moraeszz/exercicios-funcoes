<?php

function apresentandoNomes(array $nomeVetor, $nomeEspecifico){
    foreach($nomeVetor as $nome){
        if($nome == $nomeEspecifico){
            return true;
        }else{
            return false;
        }
    }
}

$nomes = ["Rafaela", "Leticia", "Isabelle", "Mariana"];

echo apresentandoNomes($nomes, "Rafaela");
?>