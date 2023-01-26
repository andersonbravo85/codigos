<?php

/*
  Exemplo de envio de e-mail 'manualmente', enviando comandos para o servidor e lendo a resposta.
*/

/* 
  Fluxo normal de uma conexão a um servidor SMTP:

	  C - comando enviado
	  R - resposta do servidor
*/

// C: telnet meuservidor 25
// R: 220 server ESMTP XXX
// C: EHLO nome_da_maquina
// R: 250-Prazer em conhece-lo. Seu IP e 192.168.2.71
// R: 250-SIZE
// R: 250 AUTH PLAIN LOGIN
// C: AUTH LOGIN
// R: 334 VXNlcm5hbWU6
// C: YW5kZXJzb24uYnJhdm8=
// R: 334 UGFzc3dvcmQ6
// C: xxxxxxxxxxx
// R: 235 Login OK
// C: MAIL FROM: user@teste.com.br
// R: 250 Remetente OK
// C: RCPT TO: user2@teste.com.br
// R: 250 Destinatario OK
// C: DATA
// R: 354 Entre com a mensagem: . para terminar
// C: Subject: Teste
// C: To: user2@teste.com.br
// C:
// C: Teste
// C:
// C: .
// R: 250 Mensagem 52D5107D007 aceita para entrega.

// definindo as variaveis de acesso
$_SMTP_SERVER = "meu.servidor.com";
$_SMTP_PORT = 25;
$_SMTP_USER = "user1";
$_SMTP_PASSWORD = "123456";
$_SMTP_SENDER = "user1@teste.com.br";
$_SMTP_RECIPIENT = "user2@teste.com.br";
$_USE_SSL = false;

// outras variaveis
$ssl = $_USE_SSL ? "ssl://" : "";	
$rc = false;	

// abrindo conexao com servidor
$fp = fsockopen($ssl . $_SMTP_SERVER, $_SMTP_PORT, $errno, $errstr, 5);

// se a conexao foi aberta, continuamos
if ($fp > 0) {	
	// lemos a resposta do servidor
	$resp = rtrim(fgets($fp, 1024));			
	
	// se a resposta for ok (começa com 220), continuamos
	if (!strncasecmp($resp, '220', 3)) {
		// vamos iniciar a conversa com o servidor. Enviamos o primeiro comando: EHLO
		fwrite($fp, 'EHLO ' . $_SMTP_SERVER . "\r\n");
		
		// lemos a resposta do servidor
		$resp = rtrim(fgets($fp, 1024));
		
		// se a resposta for ok (começa com 250), continuamos
		if (!strncasecmp($resp, '250', 3)) {
			
			// vamos ler todas as respostas do servidor e enviar o proximo comando
			// R: 250-Prazer em conhece-lo. Seu IP e 192.168.2.71
			// R: 250-SIZE
			// R: 250 AUTH PLAIN LOGIN
			while($resp = @fgets($fp, 1024)) {
				if(substr($resp,3,1) == " ")
					break;
			}
			
			// se a conexao for ssl, temos que fazer login
			// para isso precisamos codificar o usuario e a senha em base64
			if ($_USE_SSL) {	
				// enviamos o comando de login
				fwrite($fp, "AUTH LOGIN\r\n");
				
				// lemos a resposta do servidor
				$resp = rtrim(fgets($fp, 1024));
				
				// se a resposta for ok (começa com 334), continuamos
				if (!strncasecmp($resp, '334', 3)) {
					// enviamos o nome de usuario em base64
					fwrite($fp, base64_encode($_SMTP_USER)."\r\n");
					
					// lemos a resposta do servidor
					$resp = rtrim(fgets($fp, 1024));
					
					// se a resposta for ok (começa com 334), continuamos
					if (!strncasecmp($resp, '334', 3)) {
						// enviamos a senha em base64
						fwrite($fp, base64_encode($_SMTP_PASSWORD)."\r\n");
						
						// lemos a resposta do servidor
						$resp = rtrim(fgets($fp, 1024));
						
						// se a resposta for ok (começa com 235)
						if (!strncasecmp($resp, '235', 3))
							$rc = true;
					}							
				}
			} 

			// se a conexao nao eh ssl, ou, se for e o login funcionou, continuamos
			if (!$_USE_SSL || ($_USE_SSL && $rc)) {						
				$rc = false;
				
				// enviamos o comando MAIL_FROM (remetende da mensagem)
				fwrite($fp, 'MAIL FROM: ' . $_SMTP_SENDER . "\r\n");
				
				// lemos a resposta do servidor
				$resp = rtrim(fgets($fp, 1024));						
				
				// se a resposta for ok (começa com 250), continuamos
				if (!strncasecmp($resp, '250', 3)) {
					// enviamos o comando RCPT_TO (destinatario da mensagem)
					fwrite($fp, 'RCPT TO: ' . $_SMTP_RECIPIENT . "\r\n");
					
					// lemos a resposta do servidor
					$resp = rtrim(fgets($fp, 1024));
					
					// se a resposta for ok (começa com 250), continuamos
					if (!strncasecmp($resp, '250', 3)) {
						// pronto, agora vamos comecar a escrever o conteudo do email. Enviamos o comando DATA
						fwrite($fp, "DATA\r\n");
						
						// lemos a resposta do servidor
						$resp = rtrim(fgets($fp, 1024));
						
						// se a resposta for ok (começa com 354), continuamos
						if (!strncasecmp($resp, '354', 3)) {
							
							// vamos escrever primeiro o assunto da mensagem (Subject) e pular 1 linha (\r\n).
							// depois vamos escrever o destinatario (To) e pular 2 linhas (\r\n\r\n)
							// para comecar a escrever o corpo da mensagem.
							// Escrevemos a mensagem (no nosso caso 'Teste') e pulamos pelo menos 1 linha
							// Para terminar a mensagem e envia-la, temos que pular 1 linha, digitar '.' (ponto)
							// e pular mais 1 linha
							fwrite($fp, "Subject: Teste\r\nTo: ".$_SMTP_RECIPIENT."\r\n\r\nTeste\r\n\r\n.\r\n");
							
							// lemos a resposta do servidor
							$resp = rtrim(fgets($fp, 1024));
															
							// se a resposta for ok (começa com 250), a mensagem sera enviada com sucesso \o/
							if (!strncasecmp($resp, '250', 3)) {
								$rc = true;
							}
						}
					}
				}
			}
		}
	}
} 

fclose($fp);		
