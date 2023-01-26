<?php

/* 
  Função para gerar uma string aleatória.
  --------------------------------------
  
  str_shuffle - mistura uma string aleatoriamente
  substr - cria uma substring
  
  https://www.php.net/manual/pt_BR/function.str-shuffle.php
  https://www.php.net/manual/pt_BR/function.substr.php
*/

function gera_string($tamanho) {

  $maximo_size = 30;
  
  if ($tamanho > $maximo_size)
    $tamanho = $maximo_size;
  
  $alphanum  = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

  return substr(str_shuffle($alphanum), 0, $tamanho); 
}

echo gera_string(15);
