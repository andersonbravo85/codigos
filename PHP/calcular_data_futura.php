<?php

/*
  Exemplos de cálculos para data futura.
  -------------------------------------
  
  Usando em conjunto as funções strftime e strtotime conseguimos calcular datas futuras.

  strftime — formata hora/data de acordo com as configurações locais
  strtotime — interpreta data/hora em texto para timestamp Unix
  
  https://www.php.net/manual/pt_BR/function.strtotime.php
  https://www.php.net/manual/pt_BR/function.strftime.php
  
  [ TESTADO NO PHP 7.4.7 ]
*/

setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

echo 'Amanhã: ', strftime('%A', strtotime('tomorrow'));
  
echo 'Próxima segunda: ', strftime('%d de %B de %Y', strtotime('next monday'));
  
echo 'Vencimento: ', strftime('%d/%m/%Y', strtotime('+3 months'));
