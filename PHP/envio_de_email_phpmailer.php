<?php

/*
  Exemplo de envio de e-mail utilizando o PHPMailer.
  
  https://github.com/PHPMailer/PHPMailer
*/

require_once('phpmailer/class.phpmailer.php');

// Instancia a classe PHPMailer
$mail = new PHPMailer();

// Configuração dos dados do servidor e tipo de conexão (Estes dados você obtem com seu provedor)
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtp.meusite.com.br"; // Endereço do servidor SMTP
$mail->SMTPAuth = true; // Autenticação (True: Se o email será autenticado ou False: se o Email não será autenticado)
$mail->Username = "usuario"; // Usuário do servidor SMTP
$mail->Password = "senha"; // A Senha do email indicado acima

// Remetente (Identificação que será mostrada para quem receber o email)
$mail->From = "remetente@meusite.com.br";
$mail->FromName = "Nome remetente;

// Destinatário
$mail->AddAddress("destinatario@dominio.com.br", "Nome destinatario");

// Define tipo de Mensagem que vai ser enviado
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML

// Assunto e Mensagem do email
$mail->Subject = '=?UTF-8?B?'.base64_encode("Contato").'?= '.$data; // Assunto da mensagem. Codificado para ser 'apresentável'

$mail->Body = 'Olá tudo bem ?';

// Envia a Mensagem
$enviado = $mail->Send();

if ($enviado)
    die("OK");
else
    die($mail->ErrorInfo);
