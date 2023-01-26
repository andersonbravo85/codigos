<?php

/*
  Formatação de casas decimais com o método number_format.

  https://www.php.net/manual/pt_BR/function.number-format

  Podemos passar os seguintes argumentos para a função:

    1º – O número a ser formatado
    2º – A precisão decimal (quantidade de casas decimais que serão exibidas)
    3º – Separador de dezenas (opcional)
    4º – Separador de milhar (opcional)
*/

// Exemplo
$numero = 1234.5678;

// Formato brasileiro
echo number_format($numero, 2, ',', '.'); // 1.234,57
 
// Formato inglês sem separador de milhar
echo number_format($numero, 2, '.', ''); // 1234.57
