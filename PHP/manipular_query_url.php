<?php

/*
  Script com exemplos para criar/ler uma query de uma URL.
  --------------------------------------------------------

  http_build_query - gera a string de consulta (query) em formato URL
  parse_url - interpreta uma URL e retorna os seus componentes
  parse_str - interpreta a string para variáveis
  
  https://www.php.net/manual/en/function.http-build-query.php
  https://www.php.net/manual/en/function.parse-url.php
  https://www.php.net/manual/en/function.parse-str.php
  
*/

// criando a query
$data = array(
              'nome'=>'anderson',
              'sobrenome'=>'bravo',
              'ano'=> 1985
            );

echo http_build_query($data); // nome=anderson&sobrenome=bravo&ano=1985

// lendo a url/query para um array
$url = parse_url('https://www.andersonbravo.com.br/search?q=anderson+bravo&ano=1985');

var_dump($url);

/*
array(4) {
  ["scheme"]=>
  string(5) "https"
  ["host"]=>
  string(24) "www.andersonbravo.com.br"
  ["path"]=>
  string(7) "/search"
  ["query"]=>
  string(31) "q=anneke+van+giersbergen&num=50"
}
*/

parse_str($url['query'], $query);
  
echo $query['q']; // anderson bravo
echo $query['ano']; // 1985

