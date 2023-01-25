<?php

/*
  Função para converter um número decimal para hexadecimal.
*/

function converte_decimal_hexa($decimal) {
  
  $res = '';

  $char = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'A', 'B', 'C', 'D', 'E', 'F');

  do {
    $digito = $decimal %16;
    $res = $char[$digito] . $res;
    $decimal = (int) ($decimal / 16);
  } while ($decimal != 0);
  
  return $res;
}

echo converte_decimal_hexa(10); // A
