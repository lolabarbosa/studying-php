<?php

$users = [
    [
        'name' => 'lola',
        'age' => 22,
        'employed'=> true
    ],
    [
        'name' => 'carolina',
        'age' => 22,
        'employed'=> true
    ],
    [
        'name' => 'carol',
        'age' => 22,
        'employed'=> true
    ],
    [
        'name' => 'caaah',
        'age' => 22,
        'employed'=> true
    ],
];

foreach ($users as $key => $value){
    echo $key . " " . $value['name'] . PHP_EOL;

}

$user = new StdClass;

$user->name = 'lola';
$user->age = 22;

foreach($user as $key => $value) {
    echo $key . " " . $value . PHP_EOL;
}

$names = ['lola', 'garrafa', 'rabico', 'mesa'];

foreach($names as $key => $name) {
    echo $key . " " . $name . PHP_EOL;
}




?>
