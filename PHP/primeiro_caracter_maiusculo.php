<?php

/*
  Exemplos de como converter o primeiro caracter de uma string, ou primeiro caracter de cada palavra para maiúsculo.
  
  ucfirst - converte para maiúscula o primeiro caractere de uma string
  ucwords - converte para maiúsculas o primeiro caractere de cada palavra
  
*/
 
$primeiraLetraFrase = 'hello world!';
$primeiraLetraFrase = ucfirst($primeiraLetraFrase);	// Hello world!

$primeiraLetraCadaPalavra = 'hello world!';
$primeiraLetraCadaPalavra = ucwords($primeiraLetraCadaPalavra);	// Hello World!
