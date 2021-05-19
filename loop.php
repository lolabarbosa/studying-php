<?php

for($borrachada =0; $borrachada <= 7; $borrachada++){
    echo 'A lola tomou ' . $borrachada . ' borrachadas do amiguinho!' . PHP_EOL;
}

echo 'A lola está **** com os amiguinhos no momento.' . PHP_EOL;

$tabuada = 4;
for ($i = 1; $i <= 10; $i++) {
    echo "$tabuada x $i = " . ($tabuada * $i) . PHP_EOL;
}

$estouEmpregado = true;
$commits = 0;

while($estouEmpregado){
    echo 'Eu fiz' . $commits . " commits zoados e meu superior não curtiu. " . PHP_EOL;

    if($commits == 8) {
        $estouEmpregado = false;
        echo 'Estou desempregada.' .  PHP_EOL;
    }

}

//exemplo rpg

$healthPoints = 100;
$maxHealthPoints = 100;

$monsterAttackDamage = 5;

while($healthPoints>0) {
    echo "HP: $healthPoints/$maxHealthPoints" . PHP_EOL;
    echo "Personagem atacado -$monsterAttackDamage de HP!" . PHP_EOL;

    $healthPoints -= $monsterAttackDamage;

    if ($healthPoints<=0) {
        echo "You're dead" . PHP_EOL;
    }
}



?>