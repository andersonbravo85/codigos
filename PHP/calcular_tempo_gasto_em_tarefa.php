<?php

/* 
  Calcular tempo gasto na execução de determinado processamento.
*/

// tempo inicial
$tstart = $_SERVER["REQUEST_TIME_FLOAT"]; 

$x = 1;

do {
	$x++;
} while ($x != 10);

// tempo final
$tend = time();       
 
echo "Tempo gasto: " . date("H:i:s", $tend - $tstart) . "\r\n";
