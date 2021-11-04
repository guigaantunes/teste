<?php


function saque($placar)
{

    [$placarJogadorA, $placarJogadorB] =  explode(":", $placar);// return [1,2] saque("1:2")
    $placarTotal = $placarJogadorA + $placarJogadorB;
    if ($placarTotal < 40) { // verifica em qual regra de saque ele entra
        $rodada = $placarTotal / 5;
    } else {
        $rodada = $placarTotal / 2;
    }
    $rodada =  intval($rodada); // pega apenas o valor inteiro do resultado

    if ($rodada % 2 == 0) { // verifica se é uma rodada par ou impar
        echo "jogador a";
    } else {
        echo "jogador b";
    }
}
