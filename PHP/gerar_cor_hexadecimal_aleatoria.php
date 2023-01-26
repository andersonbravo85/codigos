<?php

/*
  Função para gerar uma cor em hexadecimal aleatoriamente.
*/

funciton gera_cor_hexadecimal() {
  
  $letters = '0123456789ABCDEF';

  $color = '#';

  for ($i = 0; $i < 6; $i++) {
      $index = rand(0,15);
      $color .= $letters[$index];
  }

  return $color;
}

echo gera_cor_hexadecimal();
