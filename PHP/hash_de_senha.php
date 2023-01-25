<?php
/*
  Script de exemplo de como criar e verificar um hash de senha.
  -------------------------------------------------------------

  password_hash -> cria um password hash 
  (https://www.php.net/manual/pt_BR/function.password-hash.php)
  
  password_verify -> verifica se um password corresponde com um hash
  (https://www.php.net/manual/pt_BR//function.password-verify.php)
*/

// criação
$senha = "mamae0";
$hash = password_hash($senha, PASSWORD_DEFAULT);

// verificação
if (password_verify($senha, $hash))
  echo 'Senha correta';
else
  echo 'Senha incorreta';
