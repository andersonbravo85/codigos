<?php

/*
  Cookies são arquivos criados em sua máquina que alguns sites usam para fazer anotações. 
  Esses dados podem ser utilizados para criar páginas customizadas.
  Isso traz vantagens e desvantagens, pois ao mesmo tempo em que facilita, ele compromete a privacidade, se permitir que outros programas leiam o conteúdo dos cookies.

  ATENÇÃO: hoje em dia é obrigatório ao site informar ao usuário que ele utiliza Cookies, e o usuário deve aceitar ou não.
 
  https://www.php.net/manual/pt_BR/function.setcookie.php
*/

// criação
// Cria um cookie chamado 'usuario' com o valor 'Fulano'
// OBS.: se você não definir a duração do cookie, ele irá durar o tempo que o browser estiver aberto.
setcookie('usuario', 'Fulano');

// Cria o mesmo cookie acima só que irá durar três dias
setcookie('usuario', 'Fulano', (time() + (3 * 24 * 3600)));

// Cria o novo cookie para durar duas horas
setcookie('nome', 'Ciclano', (time() + (2 * 3600)));

// lendo o valor de um cookie
// Pega o valor do Cookie 'usuario' definido anteriormente:
$valor = $_COOKIE['usuario']; // Fulano

// deletando o cookie
// para deletar um cookie setamos seu valor para vazio, e adicionamos um tempo de expiração negativo
setcookie('usuario', "", time() - 60);
