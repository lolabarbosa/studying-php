<?php

$name = 'lola' . PHP_EOL;
$employed = true;
$age = 22;

if ($name == 'lola') {
    echo 'meu nome é lola' . PHP_EOL;

} else if ($name == 'carolina'){
    echo 'esse é meu nome verdadeiro';
} else {
    echo 'é sobre isso';
}

if ($age >=18) {   //possivel usar operadores logicos
    echo 'você é maior de idade e tem emprego';
    } else {
        echo 'você é menor de idade';
    }

?>
