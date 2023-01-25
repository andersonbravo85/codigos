<?php

/*
  Calcular similaridadae entre 2 strings
  --------------------------------------
  
  https://www.php.net/manual/pt_BR/function.similar-text.php
  
*/

$var_1 = 'PHP IS GREAT';
$var_2 = 'WITH MYSQL';

echo similar_text($var_1, $var_2, $percent); // 3
echo $percent; // 27.272727272727

echo similar_text($var_2, $var_1, $percent); // 2
echo $percent; // 18.181818181818

$var1 = 'Hello';
$var2 = 'Hello';
$var3 = 'hello';

echo similar_text($var1, $var2);  // 5
echo similar_text($var1, $var3);  // 4
