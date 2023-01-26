<?php

/*
  Validar valores diversos
  
  filter_var é um método bastante útil para fazer algumas validações de valores.
  Ele retorna o dado filtrado ou, FALSE se o filtro falhar.

  mixed filter_var ( mixed $variable [, int $filter [, mixed $options ]] )
  
  http://php.net/manual/pt_BR/function.filter-var.php
  http://php.net/manual/en/filter.filters.validate.php
  http://php.net/manual/en/filter.filters.sanitize.php
*/

// EXEMPLOS

//Validando um ip:  
function validateIP($ip) {
    return filter_var($ip, FILTER_VALIDATE_IP);
}

validateIP('10.20.30.40.50'); 	// false
validateIP('10.20.30.40');		// 10.20.30.40


//Validando um e-mail:  
function validateMail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

validateMail('anderson@andersonbravo.com.br'); 	// anderson@andersonbravo.com.br
validateMail('andersonbravo.com.br');			// false


// Validando uma url:  
function validateUrl($url) {
    return filter_var($url, FILTER_VALIDATE_URL);
}

validateUrl('http://www.example.com');	// http://www.example.com
validateUrl('www.example.com');			// false


/*
  Além de validar um valor passado, retornando true ou false, filter_var também possui filtros de limpeza (sanitize)
    que irão retirar caracteres que não correspondam ao padrão permitido.

  Quando utilizamos filtros do tipo sanitize, todos os caracteres que não pertecem ao padrão escolhido são retirados do valor passado na entrada.
*/

// Exemplo validando uma url
function validateUrl2($url) {
    return filter_var($url, FILTER_SANITIZE_URL);
}

validateUrl2("http://www.example@.com");	// http://www.example.com
validateUrl2("http://bravo£.com.br");	// http://bravo.com.br
