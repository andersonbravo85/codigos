<?php

// A partir do PHP 7 é possível definir constantes com array:
 
define('ANIMALS', [
    'dog',
    'cat',
    'bird'
]);

print_r(ANIMALS);

// Array
// (
    // [0] => dog
    // [1] => cat
    // [2] => bird
// )

echo ANIMALS[1]; // outputs "cat"


define('PERSON', [
    'nome'=> 'Anderson',
    'idade' => '34'
]);

print_r(PERSON);

// Array
// (
    // ['nome'] => 'Anderson'
    // [idade] => 24
// )

echo PERSON['nome']; // outputs "Anderson"
