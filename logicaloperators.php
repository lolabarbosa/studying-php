<?php

    //operador E - && (todos devem ser verdadeiros p retornar true)
    $empregado = true;
    $homeOffice = true;

    var_dump($empregado && $homeOffice);

    //operador OU - || (apenas um deve ser verdadeiro p retornar true)
    $empregado = true;
    $homeOffice = false;

    var_dump($empregado || $homeOffice);

    //operador OU Exclusivo - XOR ^ - uma delas deve ser verdadeira
    $empregado = true;
    $homeOffice = false;
    var_dump($empregado ^ $homeOffice);

    //operador NÃO - ! (transforma ao contrário)
    $empregado = true;
    var_dump(!$empregado); //retorna false

    //operador de execução???





?>