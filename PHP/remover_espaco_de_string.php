<?php

// string com tabulacao entre as palavras
$nome = "Anderson			Bravo dos Santos";

// expressao regular para deixar apenas 1 espaco entre as palavras
$result = preg_replace("/[[:blank:]]+/"," ", $nome);

echo $result;  // Anderson Bravo dos Santos
