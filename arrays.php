<?php

//união

$user = [
    'name' => 'carolinatb',
    'age' => 22
];

$workplace = [
    'company' => 'rockfeller',
    'role' => 'teacher'
];

$all = $user + $workplace;
print_r($all);

//igualdade

$userOne = [
    'name' => 'carolinatb',
    'age' => 22
];

$userTwo = [
    'name' => 'sabrina',
    'age' => 23
];

var_dump(value:$userOne==$userTwo);

//identico ===
//diferença !=
//não identico !===


?>