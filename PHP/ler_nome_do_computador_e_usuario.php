<?php

/*
  A classe COM faz parte da extensão com_dotnet que faz parte do núcleo do PHP.
  Essa classe permite instanciar um objeto COM compatível com OLE e chamar seus métodos e acessar suas propriedades.
  Você pode usar esta técnica para abrir programas, acessar dados da rede, acessar o registro do Windows, ler informações da CPU, e muito mais.
  WScript, Windows Scripting Host ou simplesmente WSH é a linguagem de script do sistema operacional Windows.
*/

$network = new COM("WScript.Network");

echo $network->username;
echo $network->computername;
