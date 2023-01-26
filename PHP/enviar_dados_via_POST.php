<?php

/*
  Script com exemplo de como enviar dados via POST.

  Para enviar dados via POST vamos utilizar os métodos abaixo:

  • http_build_query — gera a string de consulta (query) em formato URL
  • stream_context_create — creates a stream context
  • file_get_contents — lê todo o conteúdo de um arquivo para uma string
*/
 
// gera a query (dados que serão enviados)
$content = http_build_query(array(
	'cidade' => 'Rio de Janeiro',
	'tipo'   => 'Apartamento',
));
  
// cria o contexto
$context = stream_context_create(array(
	'http' => array(
		'method'  => 'POST',
		'content' => $content,
	)
));
 
// 'faz o POST' e lê o resultado
$contents = file_get_contents('http://exemplo/teste.php', null, $context);
