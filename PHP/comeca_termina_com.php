<?php
/*
  Funções para verificar se uma string COMEÇA COM ou TERMINA COM determinado texto.
  
  [ TESTADO NO PHP 8.1.12 ]
*/
 
function comecaCom($texto_completo, $texto_procurado) {
	return $texto_procurado === "" || strrpos($texto_completo, $texto_procurado, -strlen($texto_completo)) !== false; 
} 

function terminaCom($texto_completo, $texto_procurado) {
	return $texto_procurado === "" || (($aux = strlen($texto_completo) - strlen($texto_procurado)) >= 0 && strpos($texto_completo, $texto_procurado, $aux) !== false);
}
