<?php

/*
  Exemplo de leitura de argumentos de linha de comando com o métido getopt.
  
  https://www.php.net/manual/pt_BR/function.getopt
*/

// Exemplo: 	
// teste2.php -a -b "mamae" -c

$options = getopt("ab:c");

print_r($options);

// array(2) {
  // 'a' => true
  // 'b' => "mamae",
  // 'c' => true
// }

// b: indica que depois do argumento b deve vir seu valor
