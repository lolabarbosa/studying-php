<?php
    echo "hello world";
    //concatenar - juntar
    echo "Olá" . "-" . 123 . "\n";
    var_dump(value: "aloaloalo");
    var_dump(value: true);
    var_dump(value: 12.222222);
    var_dump(value: 12);
    var_dump(value: [1,2,3,4]);

    $dados = ['carolina', 23, 'lages'];
    var_dump($dados[2]);

    //variáveis
    $name = "Carolina";
    echo $name . PHP_EOL;
    $age = 23;
    echo $age . PHP_EOL;

    $data = [
        'name' =>'carolina',
        'age' => 22,
        'city' => 'lages'
    ];

    echo $data['city'] . PHP_EOL;

    //constante
    define('lola','https://github.com/lolabarbosa');
    echo lola;

    //math
    $itemA = 30;
    $itemB = 20;
    $itemC = $itemA+$itemB; // +=
    $itemD = $itemA-$itemB; // -=
    $itemE = $itemA*$itemB; // *=
    $itemF = $itemA/$itemB; // /=
    $itemG = $itemA%$itemB; // %=

    echo $itemC . PHP_EOL;
    echo $itemD . PHP_EOL;
    echo $itemE . PHP_EOL;
    echo $itemF . PHP_EOL;
    echo $itemG . PHP_EOL;

    //COMPARAÇÕES

    var_dump(value: 1 == 1); //igualdade
    var_dump(value: '1' == 1); //da true, pois transforam em inteiro e verifica
    var_dump(value: 1 == 2);
    $password = 'secret';
    var_dump(value: $password == 'secret');

    var_dump(value: 1 != 1); //diferença
    var_dump(value: 1 != 2);
    $password = 'secret';
    var_dump(value: $password != 'secret');

    var_dump(value: 1 === 1); //idêntico
    var_dump(value: '1' === 1); //da falso, pois verifica o tipo do dado

    var_dump(value: 1 !== 1); //não idêntico
    var_dump(value: '1' !== 1);

    $number = 6;
    var_dump(value: $numver > 7); //maior
    var_dump(value: $numver >= 6); //maior igual
    var_dump(value: $numver < 7); //menor
    var_dump(value: $numver <= 7); //menor igual


?>