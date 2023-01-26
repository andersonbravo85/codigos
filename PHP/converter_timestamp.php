<?php

/*
  Exemplo de como converter um timestamp para dia/mes/ano hora:minuto:segundo
*/

$timestamp = mktime(date("H"), date("i"), date("s"), date("m") , date("d"), date("Y"));

$ocidental = date('d/m/Y H:i:s', $timestamp);
