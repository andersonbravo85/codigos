<?php

/*
  Exemplo de como descobrir a codificação de uma string utilizando a função mb_detect_encoding.
  
  https://www.php.net/manual/pt_BR/function.mb-detect-encoding
*/

// Vamos verificar a codificação da string. Temos 2 opções: UTF-8 ou ISO
// Este teste serve para sabermos se precisamos utilizar as funções 'utf8_encode' e 'utf8_decode'
// e com isso exibir corretamente um caracter do tipo 'ç' ou 'ã'

$cod = mb_detect_encoding($string.'x', 'UTF-8, ISO-8859-1');

// NOTA: Li em algum site ( não lembro qual =X ) que esta função tem ou tinha um bug, 
// onde se a última letra da string for um caracter especial, ela nao funciona.
// Dai o macete de acrescentar qualquer coisa (no nosso caso a letra 'x') no fim da string. Isso não atrapalha o funcionamento da função.
