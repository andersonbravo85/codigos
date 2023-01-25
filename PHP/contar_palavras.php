<?php

/*
  Script de exemplo de como contar palavras em uma string.
  -------------------------------------------------------
  
  O método str_word_count retorna informações sobre as palavras usadas em uma string.
  
  https://www.php.net/manual/pt_BR/function.str-word-count.php
  
*/
 
$str = 'aqui são quatro palavras';

// número de palavras
echo str_word_count($str); // 4

// com o parametro '1' as palavras sao retornadas em um array
print_r(str_word_count($str, 1));

// Array
// (
    // [0] => aqui
    // [1] => são
    // [2] => quatro
    // [3] => palavras
// )
