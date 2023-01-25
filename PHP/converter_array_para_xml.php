<?php

/* 
  Script para Converter Array para XML
*/
 
function arrayToXml($tags) {
	$xml = '';
	foreach ($tags as $tag => $value) {
		if (is_array($value)) {
			$xml .= "<${tag}>";
			$xml .= arrayToXml($value);
			$xml .= '';
		} elseif (isset($value))
			$xml .= "<${tag}>".utf8_encode(htmlspecialchars(trim($value))).'';
	}
	return $xml;
}
	 
$array = array(
	'XML version="33"' => array(
		'nome' => 'Anderson',
		'sobrenome' => 'Bravo',
		'vicio id="1"' => 'corrida',
		'vicio id="2"' => 'economia',
		'dinheiro' => null,
		'carro' => 'fox',
		'carro' => 'cross fox'
	)
);

$xml = arrayToXml($array);

print_r($xml);

// <XML version="33">
	// <nome>Anderson</nome>
	// <sobrenome>Bravo</sobrenome>
	// <vicio id="1">corrida</vicio>
	// <vicio id="2">economia</vicio>
	// <carro>cross fox</carro>
// </XML>
