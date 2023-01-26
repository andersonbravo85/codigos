<?php

/*
  Script exemplo de como ler informações do HD.
  
  A classe COM faz parte da extensão com_dotnet que faz parte do núcleo do PHP.
  Essa classe permite instanciar um objeto COM compatível com OLE e chamar seus métodos e acessar suas propriedades.
  Você pode usar esta técnica para abrir programas, acessar dados da rede, acessar o registro do Windows, ler informações da CPU, e muito mais.
*/  
  
$wmi = new COM("Winmgmts://");
		 	
$disks = $wmi->execquery("SELECT * FROM Win32_LogicalDisk");

foreach ($disks as $d)
  echo sprintf("%s (%s) %s bytes, %4.1f%% free\n", $d->Name, $d->VolumeName, number_format($d->Size,0,'.',','), $d->FreeSpace/$d->Size*100.0);
