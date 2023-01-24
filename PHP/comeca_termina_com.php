/*
  Funções para verificar se uma string COMEÇA COM ou TERMINA COM determinado texto.
*/
 
function comecaCom($string, $search_string) {
	return $search_string === "" || strrpos($string, $search_string, -strlen($string)) !== false; 
} 

function terminaCom($string, $search_string) {
	return $search_string === "" || (($temp = strlen($string) - strlen($search_string)) >= 0 && strpos($string, $search_string, $temp) !== false);
}
