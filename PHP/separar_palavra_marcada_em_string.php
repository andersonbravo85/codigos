<?php

/*
  Supondo que tenhamos um texto com palavras marcadas (entre aspas), 
  podemos utilizar o método preg_match_all (expressão regular) para separar essas palavras em um array.
*/
 
$frase = 'Quando "percebemos" o valor da vida, damos menos "valor" ao passado e preocupamo-nos mais em "preservar" o futuro.';

preg_match_all('/"[^"]*"/', $frase, $array_resposta);

$array_resposta = $array_resposta[0];

foreach ($array_resposta as $i => $palavra)
	echo substr($palavra, 1, -1) . "<br />"; // tiramos as aspas com o método 'substr'
	
// percebemos
// valor
// preservar	
