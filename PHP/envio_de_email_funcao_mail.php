<?php

/*
  Exemplo de envio de e-mail utilizando a função nativa mail().
*/

// From
$de = "usuario@dominio.com.br";
$de_nome = "Fulano";

// To
$para  = "anderson@meusite.com.br";
$para_nome = "Anderson Bravo";

// Assunto
$subject = "Contato - andersonbravo.com.br";

// Mensagem
$message = '
<html>
<body>	
	Contato<br /><br />
	Nome: ' . $de_nome . '<br />
	E-mail: ' . $de . '<br />
	Mensagem:<br /><br />Seu texto aqui
</body>
</html>
';

// Para enviar emails em html, o Content-type header tem que ser setado
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Headers adicionais
$headers .= 'To: ' . $para_nome . ' <' . $para . '>' . "\r\n";
$headers .= 'From: ' . $de_nome . ' <' . $de . '>' . "\r\n";

// Envio
mail($para, $subject, $message, $headers);
