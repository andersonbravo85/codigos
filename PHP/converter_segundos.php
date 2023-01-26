<?

/*
  Função para converter segundos em horas:minutos:segundos
*/

function converte_segundos($segundos) {
  
  $horas = floor($segundos / 3600);
  $segundos = $segundos % 3600;
  $minutos = floor($segundos / 60);
  $segundos = $segundos % 60;
  
  return sprintf("%02d:%02d:%02d", $horas, $minutos, $segundos);
}

$resultado = converte_segundos(120);

echo $resultado;
