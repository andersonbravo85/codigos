<?php

$numerodestinatario = "5521999999999"; // ddi+ddd+numero
$mensagem = "TEXTO";

$mensagem = urlencode($mensagem);
$mensagem = str_replace('+','%20',$mensagem);

$iphone = strpos($_SERVER['HTTP_USER_AGENT'], "iPhone") ? true : false;
$android = strpos($_SERVER['HTTP_USER_AGENT'], "Android") ? true : false;

// check if is a mobile
if ($iphone || $android) {
  echo "<script>window.location='whatsapp://send?phone='.$numerodestinatario.'&text='.$mensagem</script>";
} else {
  echo "<script>window.location='https://web.whatsapp.com/send?phone='.$numerodestinatario.'&text='.$mensagem</script>";
}
