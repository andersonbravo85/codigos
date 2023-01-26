<?php

/*
  Função para gerar um ID único.
  ------------------------------
  
  uniqid() - que retorna um identificador único prefixado baseado no tempo atual em milionésimos de segundo
  md5() - calcula o "hash MD5" de uma string
  
  https://www.php.net/manual/pt_BR/function.uniqid.php
  https://www.php.net/manual/pt_BR/function.md5.php
*/

function gerar_ID($prefixo = "") {
  
  // uniqid() sem nenhum parâmetro irá gerar um ID único de 13 caracteres
  // Alterando para 'true' o segundo parâmetro da função, aumentaremos de 13 para 23 o número de caracteres gerados
  
  if (empty($prefixo))
    return md5(uniqid(rand(), true));
  else
    return md5(uniqid($prefixo, true));
}

echo gerar_ID("bravo");
