<?php

/*
  Script de exemplo de como chamar uma função por uma variável (Funções variáveis).
  
  O PHP suporta o conceito de funções variáveis. Isto significa que se um nome de variável tem parênteses no final dela, o PHP procurará uma função com o mesmo nome, qualquer que seja a avaliação da variável, e tentará executá-la.

  Entre outras coisas, isto pode ser usado para implementar callbacks, tabelas de função e assim por diante.
  
  https://www.php.net/manual/pt_BR/functions.variable-functions.php
*/

function funcao1() {
	echo 'função 1';
}

function funcao2($param) {
	echo 'função 2 '.$param;
}

function funcao3($param) {
	echo 'função 3 '.$param;
}

//
// exemplo 1
//
$chamar_funcao = 'funcao1';
$chamar_funcao(); // 'função 1'

//
// exemplo 2
//
$tipoImagem = 'jpeg';

switch($tipoImagem){
	case 'jpeg':
		$criar = 'funcao2';
		break;
	case 'png':
		$criar = 'funcao3';
		break;
}

$criar('oi'); // 'função 2 oi'
