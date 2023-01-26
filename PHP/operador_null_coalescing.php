<?php

/*
  A partir do PHP 7 foi adicionado o operador ?? (operador null coalescing). 
  Sua funcionalidade é retornar o primeiro operando se ele existir e não for nulo, do contrário retorna o segundo.

  Em outras palavras, foi criado para substituir o uso do operador ternário em conjunto com isset.
*/
 
$username = $_GET['user'] ?? 'nobody';

// o código acima é equivalente a:
$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';

// O operador null coalescing também funciona na atribuição de valores:
$array['key'] ??= computeDefault();

// o código acima é equivalente a:
if (!isset($array['key']))
    $array['key'] = computeDefault();
