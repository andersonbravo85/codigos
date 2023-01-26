<?php

/*
  Script de exemplo de como chamar uma função passando N funções.
  
  • func_get_args — retorna um array contendo uma lista de argumentos da função
  • func_num_args — retorna o número de argumentos passados para a função
  
  https://www.php.net/manual/pt_BR/function.func-get-args.php
  https://www.php.net/manual/pt_BR/function.func-num-args.php  
*/

function myfunc() {
	
  $a = func_get_args();
	
  $n = func_num_args();
	
	$obj = new Stdclass;
	
	for ($i = 0; $i < $n; $i += 2) {
		$obj->{$a[$i]} = $a[$i + 1];
		echo $a[$i] . ":" . $a[$i + 1] . " - ";
	}
}

myfunc(
		"nome", "Anderson",
		"sobrenome", "Bravo",
		"idade", 30,
		"filhounico", false
	);

// nome:Anderson - sobrenome:Bravo - idade:30 - filhounico: -

////////////////////////////////////////////

function myfunc2() {
	
  $a = func_get_args();
	
  $n = func_num_args();
	
	$obj = array();
	
	for ($i = 0; $i < $n; $i++) {
		$obj[] = $a[$i];
		echo $a[$i] . " - ";
	}
}

myfunc2("Anderson", "Bravo", 30, false); // Anderson - Bravo - 30 - -
