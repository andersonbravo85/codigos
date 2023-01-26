<?php

/*
  Script exemplo de como ler informações da CPU.
  
  A classe COM faz parte da extensão com_dotnet que faz parte do núcleo do PHP.
  Essa classe permite instanciar um objeto COM compatível com OLE e chamar seus métodos e acessar suas propriedades.
  Você pode usar esta técnica para abrir programas, acessar dados da rede, acessar o registro do Windows, ler informações da CPU, e muito mais.
*/ 

$wmi = new COM("Winmgmts://");
		 	
$server = $wmi->execquery("SELECT LoadPercentage FROM Win32_Processor");

$cpu_num = 0;
$load_total = 0;

foreach($server as $cpu) {
	$cpu_num++;
	$load_total += $cpu->LoadPercentage;
}

$load = round($load_total/$cpu_num);

echo "CPUs: ". $cpu_num;
echo "LoadPercentage: ".$load;
