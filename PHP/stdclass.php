<?php

/*
  A StdClass é uma classe predefinida do PHP. Ela é vazia, ou seja, não possui métodos nem propriedades.

  Mas qual o objetivo disto? Ela é a classe padrão dos objetos que não são declarados, ou seja, quando você converte um array ou algum outro tipo para objeto, na verdade está criando um objeto da StdClass.

  É útil também utilizar a StdClass quando se deseja criar um objeto vazio e ir adicionando as propriedades conforme necessário.
*/
 
$pessoa = new stdclass;
$pessoa->nome = "Anderson";
$pessoa->sobrenome = "Bravo";
