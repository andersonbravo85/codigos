<?php

/*
  Exemplos de como montar variáveis a partir de outras variáveis
*/

// Exemplo 1
$obj = new stdclass;

$obj->name = 'var';

$obj->var_state = 'Ativo!';

$xx = $obj->name . '_state';

echo $obj->$xx; // Ativo!


// Exemplo 2
$obj2 = "var";

$var_state = "Inativo.";

$yy = $obj2 . "_state";

echo $$yy; // Inativo.
