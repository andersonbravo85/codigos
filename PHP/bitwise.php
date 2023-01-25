<?php

/*

Bitwise (lógica binária) é uma técnica que consiste, basicamente, em alterar a sequência de bits de uma variável.

O deslocamento de bits é uma operação elementar de lógica binária que consiste na rotação de um conjunto de bits (como um byte ou word, por exemplo).

Devido às características do sistema binário, existe correspondência direta com as seguintes operações matemáticas:

- multiplicação (por 2) do operando - caso o deslocamento seja feito para a esquerda;

- divisão inteira (por 2) do operando - caso o deslocamento seja feito para a direita.

[ TESTADO NO PHP 8.1.12 ]

*/

// Definindo as variáveis com a operação de bitwise:
define('a', 1 << 0); // valor: 1
define('b', 1 << 1); // valor: 2
define('c', 1 << 2); //4
define('d', 1 << 3); //8
define('e', 1 << 4); //16
define('f', 1 << 5); //32

// Setando o bit em uma variável de controle:
$opint = 0;

$opint |=  e;
$opint |=  c; // $opint tem os bits setados dos valores de 'c' e 'e'

// Verificando se bit esta setado na variável de controle:
if ($opint & c)
	echo 'sim';
else
	echo 'não';

// Removendo o bit da variável de controle:	
$opint = $opint & ~(c)
