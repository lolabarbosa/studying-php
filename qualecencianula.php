<?php

$user = [
    'name' => 'lola',
    'age' => 22,
    'job' => 'teacher'

];
 /* se tiver o nome, apresenta 'lola', se não houver, apresenta a ultima opção "fallback", nesse caso, carolina */
echo $user['name'] ?? 'carolina';

?>