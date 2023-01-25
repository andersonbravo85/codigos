<?php

/*

  preg_grep - retorna as entradas do array que combinaram com o padrão

  Formato: array preg_grep ( string $pattern , array $input [, int $flags ] );

  Obs.: Se usado  a flag PREG_GREP_INVERT, esta função retorna os elementos do array de entrada que não casam com o dado pattern
  
  https://www.php.net/manual/pt_BR/function.preg-grep.php
  
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
