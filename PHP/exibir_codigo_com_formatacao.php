<?php

/*
  O método highlight_string exibe textos de código com formatação da sintaxe do PHP.

  https://www.php.net/manual/pt_BR/function.highlight-string
*/

// imprime na tela
highlight_string('<?php echo "oi"; ?>');

// com o 2º argumento setado para TRUe, retorna o resultado para uma variável
$ret = highlight_string('<?php echo "olá"; ?>', true); 

/*
  Você pode alterar algumas cores:
  
  ini_set("highlight.comment", "#008000");
  ini_set("highlight.default", "#000000");
  ini_set("highlight.html", "#808080");
  ini_set("highlight.keyword", "#0000BB; font-weight: bold");
  ini_set("highlight.string", "#DD0000");
*/
