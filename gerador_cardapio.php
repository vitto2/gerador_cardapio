<?php

$cafe = ["Banana da Terra", "Batata doce", "Pão Frances"];

$almoco = ["Arroz, Feijão e Frango", "Macarrão com Frango", "Arroz, legumes e Carne"]; 

$lanche = ["Cuscuz com ovo", "Tapioca com Frango", "Pão francês com queijo"];


$refeicoes = [

    $cafe, 
    $almoco, 
    $lanche
];



function montaCardapio($refeicoes) { 

    foreach($refeicoes as $item) { 

        echo " " . $item[rand(0, count($item) - 1)] . PHP_EOL ; 
    }
}



montaCardapio($refeicoes);