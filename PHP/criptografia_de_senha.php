/*
  Criando uma senha forte
*/

// criação
$senha = "mamae0";

$senhaforte = password_hash($senha, PASSWORD_DEFAULT);

// verificação
if (password_verify($senha, $senhaforte))
  echo 'Senha correta';
else
  echo 'Senha incorreta';
