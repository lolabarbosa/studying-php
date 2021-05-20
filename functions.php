<?php


function sendMessage(string $nickName, string $message): string
{
    return "[" . date(format:'Y-m-d H:i:s') . "] $nickName: " . strtoupper($message) . PHP_EOL;

}

$result = sendMessage(nickName:'lola', message:'salve');
echo $result;


//boas práticas

function calculoBase(float $x, float $y){ //nomear bem a função e parâmetros e tipar.

}

?>