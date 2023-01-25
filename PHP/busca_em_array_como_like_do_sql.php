<?php

/*

  preg_grep - retorna as entradas do array que combinaram com o padrão

  Formato: array preg_grep ( string $pattern , array $input [, int $flags ] );
  
  https://www.php.net/manual/pt_BR/function.preg-grep.php
  
  [ TESTADO NO PHP 8.1.12 ]
*/

//
// Exemplo 1: Procurar os índices que contenham a string desejada
//

$array = array();
$array['anderson'] = 1;
$array['andre'] = 2;
$array['bruno'] = 3;
$array['joao'] = 4;

$search = "and";

$keys = array_keys($array); 
$result = preg_grep('/'.$search.'/i', $keys);

// $result é um array com os indices encontrados
foreach ($result as $val)
	echo $val;
	
// anderson
// andre


//
// Exemplo 2: Procurar os conteúdos que contenham a string desejada
//

$array = array();
$array[0] = 'abc';
$array[1] = 'aeiou';
$array[2] = 'cdf';
$array[3] = 'xxxx';

$search = "a";

$result = preg_grep('/'.$search.'/i', $array);

foreach ($result as $i => $val)
	echo $i . " - " . $val;

// 0 -> 'abc'
// 1 -> 'aeiou'


//
// Exemplo 3: Procurar os conteúdos que NÃO contenham a string desejada
//

$array = array();
$array[0] = 'and bravo';
$array[1] = 'gab bravo';
$array[2] = 'joao trinta';
$array[3] = 'tati bravo';

$search = "bravo";

$result = preg_grep('/'.$search.'/i', $array, PREG_GREP_INVERT);

foreach ($result as $i => $val)
	echo $i . " - " . $val;

// 2 -> 'joao trinta'
