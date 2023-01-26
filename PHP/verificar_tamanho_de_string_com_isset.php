<?php

/*
  Para verificar o tamanho de uma string, a função isset é aproximadamente 5x mais rápida do que a strlen.
  E caso a variável não exista, isset ainda funciona, enquanto que strlen retornaria um erro.
*/
  
if (!isset($senha[5]))
    echo 'Sua senha deve possuir no mínimo 6 caracteres!';
