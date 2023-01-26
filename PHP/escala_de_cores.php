<?php

/*
  Exemplo de tabela de escala de cores
*/

echo '<table>';
echo '<tr style="color: white;">';

$primeiro = 0;
$j = 10;
$varG = 5;
$varR = 12;

for ($i = 0; $i < 10; $i++) {
	
	$segundo = $primeiro + 10;
	
	if ($i >= 9)
		$corG = '00';
	else
		$corG = dechex(($j+$varG)*10);
	
	if (strlen($corG) == 1)
		$corG = '0'.$corG;
	if ($i <= 1)
		$corR = '00';
	else
		$corR = dechex(($i+$varR)*10);
	
	if (strlen($corR) == 1)
		$corR = '0'.$corR;
	
	$cor = '#'.$corR.$corG.'00';
	
	echo '<th style="background-color: '.$cor.';">'.(($i==0)? $primeiro : $primeiro+1).' - '.$segundo.'</th>';
	
	$primeiro = $segundo;
	
	$j--;
}

echo '</tr></table>'; 
