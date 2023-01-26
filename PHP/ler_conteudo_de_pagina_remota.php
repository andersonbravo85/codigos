<?php

/*
  O método file_get_contents lê todo o conteúdo de um arquivo para uma string.

  Isso é possível graças aos protocol wrappers que encapsulam a lógica de acesso aos respectivos protocolos, tal como HTTP.

  Esta forma de acesso, no entanto, depende da configuração 'allow_url_fopen' estar habilitada no php.ini (que é o padrão).
*/
 
$contents = file_get_contents('http://php.net/file_get_contents');
