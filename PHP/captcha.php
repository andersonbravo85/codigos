<?php

/*
  Exemplo de como gerar um CAPTCHA.
  
  CAPTCHA é um acrônimo da expressão "Completely Automated Public Turing test to tell Computers and Humans Apart":
  um teste de desafio cognitivo, utilizado como ferramenta anti-spam.
  
  NOTA: Baixe os arquivos utilizados (captcha.png e anonymous.gdf) no link
      https://www.andersonbravo.com.br/home/dicas/programacao/php/files/captcha.zip
*/

// página HTML:  
// <img src="captcha.php">	

// pagina geradora do Captcha: captcha.php:  
session_start();

$alphanum  = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

$codigoCaptcha = substr(md5(str_shuffle($alphanum)), 0, 5);

//Criando a imagem usando o fundo escolhido.
$imagemCaptcha = imagecreatefrompng("captcha/captcha.png");

// utilizando a fonte escolhida
$fonteCaptcha = imageloadfont("captcha/anonymous.gdf");

$corCaptcha = imagecolorallocate($imagemCaptcha,0,0,0);

// Escrevendo o código gerado na imagem
imagestring($imagemCaptcha, $fonteCaptcha, 15, 5, $codigoCaptcha, $corCaptcha);

// Vamos colocar o código gerado na sessão
$_SESSION['captcha'] = $codigoCaptcha;

// Vamos mandar alguns headers para o browser não cacher a imagem
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Content-type: image/png");

//Enviando a imagem
imagepng($imagemCaptcha);

// Liberando memoria
imagedestroy($imagemCaptcha);

/*
  MÉTODOS:

  • imagecreatefrompng: cria uma nova imagem a partir de um arquivo ou URL
  • imageloadfont: carrega uma nova fonte
  • imagecreate: cria uma nova imagem
  • imagecolorallocate: aloca uma cor para uma imagem
  • imagestring: desenha uma string horizontalmente
  • imagepng: envia uma imagem PNG para o browser ou para um arquivo
  • imagedestroy: libera qualquer memória associada com a imagem image
*/
